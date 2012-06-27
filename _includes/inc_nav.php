<ul class='nav'>
	<? $script = $_SERVER['SCRIPT_NAME']; $active = ereg('index.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/index.php'<? } ?> class='nav-home'>Home</a>
	</li>
	<? $active = ereg('tnt.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/tnt.php'<? } ?> class='nav-tnt'>Show Archives</a>
	</li>
	<? $active = ereg('clemson_hotline.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/store.php'<? } ?> class='nav-hotline'>Tiger Store</a>
	</li>
	<? $active = ereg('radio_affiliates.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/radio_affiliates.php'<? } ?> class='nav-radio'>Radio Affiliates</a>
	</li>
	<li>
		<a href='http://clemsonpodcasts.wordpress.com' class='nav-blog'>Blog</a>
	</li>
	<li>
		<a href='http://itunes.apple.com/us/podcast/tigernet-talk-tnt/id79900679' class='nav-itunes'>Itunes</a>
	</li>
	<? $active = ereg('about.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/about.php'<? } ?> class='nav-about'>About</a>
	</li>
</ul>
