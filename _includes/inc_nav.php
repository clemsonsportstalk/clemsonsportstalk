<ul class='nav'>
	<? $script = $_SERVER['SCRIPT_NAME']; $active = ereg('index.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/index.php'<? } ?> class='nav-home'>Home</a>
	</li>
    <? $active = ereg('live.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a href='/main/live.php' class='nav-live'<? if(!$active) {?><? } ?>>LIVE SHOW</a>	</li>
	<? $active = ereg('tnt.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/tnt.php'<? } ?> class='nav-tnt'>Archives</a>
	</li>
		<? $active = ereg('radio_affiliates.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/radio_affiliates.php'<? } ?> class='nav-radio'>How to Listen</a>
	</li>
	<li>
    <? $active = ereg('blog.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
	  <a<? if(!$active) {?> href='/main/blog.php'<? } ?> class='nav-blog'>Blog</a>
	</li>
	<li>
    <? $active = ereg('store.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
	  <a<? if(!$active) {?> href='/main/store.php'<? } ?> class='nav-itunes'>Store</a>
	</li>
<? $active = ereg('about.php', $script); ?>
	<li class='<? if($active) { ?>active<? } ?>'>
		<a<? if(!$active) {?> href='/main/about.php'<? } ?> class='nav-about'>About</a>
	</li>
</ul>
