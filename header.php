<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo site_description(); ?>" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="<?php echo theme_url('/css/ie/html5shiv.js'); ?>"></script><![endif]-->
		<script src="<?php echo theme_url('/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/jquery.poptrox.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/skel.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/init.js'); ?>"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo theme_url('/css/skel.css'); ?>" />
			<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>" />
			<link rel="stylesheet" href="<?php echo theme_url('/css/style-xlarge.css'); ?>" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo theme_url('/css/ie/v8.css'); ?>" /><![endif]-->
		
		<meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
	</head>

		<body id="top">

		<!-- Header -->
			<header id="header">
				<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
				<h1><?php echo site_description(); ?></h1>
			</header>
	
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search my blog:</label>
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
					</form>

					<aside>
						<b>Categories</b>
						<ul>
						<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</aside>
				</div>
			</div>

			<header id="top">
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

				<?php if(has_menu_items()): ?>
				<nav id="main" role="navigation">
					<ul>
						<?php while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile; ?>

						<li class="tray">
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
				<?php endif; ?>
			</header>