<!DOCTYPE html>
<html lang="de">
	<head>
		<title><?php wp_title('-', 1, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="icon" type="image/x-gif" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.gif">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" media="all" />
		<link rel="pingback" href="<?php bloginfo('wpurl'); ?>/xmlrpc.php" />
		<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="<?php bloginfo('wpurl') ?>/feed/" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="wrapper-padded">
				<div id="top">
					<div id="logo">
						<a href="http://www.mira-konzertbuero.de">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg" />
						</a>
					</div>
					<div id="address">
						<?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Address')) {} ?>
					</div>
				</div>
				<div style="clear: both"></div>
				<div id="menu">
					<?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Menu')) {} ?>
				</div>
				<div style="clear: both"></div>
				<div id="banner">
					<?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Banner')) {} ?>
				</div>
				<div id="main">
					<div id="content">
