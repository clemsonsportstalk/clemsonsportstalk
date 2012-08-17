;(function($, undefined) {

function relDate(s) {
	var date = new Date((s || '').replace(/-/g, '/')),
		diff = ((new Date()).getTime() - date.getTime()) / 1000,
		day_diff = Math.floor(diff / 86400);

	if (isNaN(day_diff) || day_diff < 0 || day_diff >= 31){
		return;
	}

	return day_diff == 0 && (
			diff < 60 && 'just now' ||
			diff < 120 && '1 minute ago' ||
			diff < 3600 && Math.floor(diff / 60) + ' minutes ago' ||
			diff < 7200 && '1 hour ago' ||
			diff < 86400 && Math.floor(diff / 3600) + ' hours ago'
		) ||
		day_diff == 1 && 'Yesterday' ||
		day_diff < 7 && day_diff + ' days ago' ||
		day_diff < 31 && Math.ceil(day_diff / 7) + ' weeks ago';
}

function twitterDate(s) {
	return s.replace(/^\w+ (\w+) (\d+) ([\d:]+) \+\d{4} (\d+)$/, '$1 $2 $4 $3 UTC');
}

var rLink = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
function linkify(s) {
	return s.replace(rLink, "<a href='$1'>$1</a>");
}

jQuery(function($) {

	var tmpl = $('#twitterTmpl'),
		tweets = $('.tweets'),
		slideshow = $('.slideshow');

	slideshow.length && slideshow.cycle();

	tweets.length && $.getJSON(tmpl.data('url'), function(data) {
		var list = $.map(data, function(s) {
			return {
				body: linkify(s.text),
				id: s.id,
				created_at: twitterDate(s.created_at),
				source: s.source
			};
		});
		tweets.html(tmpl.tmpl(list));

		function update() {
			tweets.find('a').each(function(i, o) {
				var self = $(this);
				self.text(relDate(self.attr('data-created-at')));
			});
		}
		update();
		setInterval(update, 5000);

		/*
		twttr.anywhere(function(t) {
			t.hovercards();
			t('.follow-button').followButton('clemsonsports');
		});
		*/
	});

});

function getfeed(a){
	a = $(a);
	a.length && new google.feeds.Feed(a.data('feed'))
	.load(function(result){
		var entries = result.feed.entries;
		if(!entries.length){
			return;
		}
		var tmpl = '<a href="${url}"><strong>${title}</strong></a>';
		a.replaceWith($.tmpl(tmpl, {
			url: entries[0].link,
			title: entries[0].title
		}));
	});
}

google.load('feeds', '1');
google.setOnLoadCallback(function(){
	$(function(){
		getfeed('.tigernet-latest');
		getfeed('.clemsonhotline-latest');
	});
});

})(jQuery);

