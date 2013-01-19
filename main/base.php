<?php require_once('ti.php') ?>
<!doctype html>
<html>
<head>
	<title>Clemson Sports Talk</title>
	<meta name='description' content='Clemson Tiger sports shows and news updates. Clemson Sports Talk brings you Clemson Tiger sports news via Twitter as well as Clemson Tiger radio shows Clemson Hotline and TigerNet Talk.'>
	<meta name='keywords' content='Clemson Tigers, , CLemson Sports Talk, Clemson Podcasts, Tigernet, Clemson Hotline, TigerNet Talk, Y&apos;all Magazine, sports, podcasts, podcasting'>
	<link rel='apple-touch-icon' href='http://farm4.static.flickr.com/3461/3824482129_32c5e526bd.jpg'>
	<?php require_once('../_includes/inc_meta.php'); ?>

	<link href='//fonts.googleapis.com/css?family=Orbitron:400,500,700,900' rel='stylesheet'>
    <link href='/css/bubbles.css' rel='stylesheet'>

	<?if(ereg('clemsonpodcasts.com', $_SERVER['HTTP_HOST'])){?>
		<link href='/css/_screen.css' rel='stylesheet'>
	<?}else{?>
		<link href='/css/template.css' rel='stylesheet'>
		<link href='/css/space.css' rel='stylesheet'>
		<link href='/css/grids.css' rel='stylesheet'>
		<link href='/css/common.css' rel='stylesheet'>
		<link href='/css/table.css' rel='stylesheet'>
	<?}?>
</head>
<body>
<div class='page gs955'>
	<?php startblock('bg') ?>
	<div class='body bg'>
	<?php endblock() ?>
		<div class='header-bg'>
			<div class='leftCol side-nav'>
				<a class='logo' alt='Clemson Podcasts - Home' href='/'>Clemson Podcasts</a>
				<?php require_once('../_includes/slideshow.php') ?>
				<?php require_once('../_includes/inc_our_shows.php') ?>
				<?php require_once('../_includes/inc_our_links.php') ?>
				<?php require_once('../_includes/inc_donate.php') ?>
			</div>
			<div class='main'>
				<a class='logo-right' alt='Clemson Podcasts - Home' href='/'>Clemson Podcasts</a>
				<?php require_once('../_includes/inc_nav.php'); ?>
				<?php startblock('main') ?>
				<?php endblock() ?>
			</div>
		</div>
	</div>
	<div class='foot'>
		<hr>
		<?php require_once('../_includes/inc_footer.php'); ?>
	</div>
</div>

<?php require_once('../_includes/scripts.php'); ?>
</body>
</html>
