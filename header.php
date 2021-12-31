<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<?php wp_head(); ?>
</head>
<body class="is-loading" <?php body_class();?>>

<!-- Wrapper -->
<div id="wrapper" class="fade-in fullscreen">


<?php if(is_front_page()): ?>
	<!-- Intro -->
	<div id="intro">
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
		<ul class="actions">
			<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
		</ul>
	</div>
<?php endif; ?>
	<!-- Header -->
	<header id="header">
		<a href="<?php echo get_site_url(); ?>" class="logo">
			<?php if(has_custom_logo()): ?>
				<?php the_custom_logo(); ?>
			<?php else: ?>
                generic logo text
            <?php endif; ?>
        </a>
	</header>

	<!-- Nav -->
	<nav id="nav">
		<ul class="links">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</ul>
		<!--<ul class="icons">
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
		</ul>-->
	</nav>
