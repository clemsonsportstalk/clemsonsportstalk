<script id='twitterTmpl' data-url='http://api.twitter.com/1/statuses/user_timeline/clemsonpodcasts.json?count=8&callback=?' type='text/html'>
<li>
	{{html body}}
	<br>
	<span>
		<a href='http://twitter.com/clemsonpodcasts/status/${id}' data-created-at='${created_at}'></a>
		via {{html source}}
	</span>
</li>
</script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
<script src='http://www.google.com/jsapi?key=ABQIAAAAx5l1k9ta2rL8WRS95cPWJhTp2i3v7I3bxMPdm89dnyUnDnty9BRoy6PfNU2DWSJt9bKrMR_fUoUPXA'></script>
<script src='http://platform.twitter.com/anywhere.js?id=BFIVaMEe44CxVvxy1wxezQ&v=1'></script>

<?if(ereg('clemsonpodcasts.com', $_SERVER['HTTP_HOST'])){?>
	<script src='/js/_home.js'></script>
<?}else{?>
	<script src='/js/jquery.tmpl.min.js'></script>
	<script src='/js/jquery.cycle.lite.min.js'></script>
	<script src='/js/home.js'></script>
<?}?>
