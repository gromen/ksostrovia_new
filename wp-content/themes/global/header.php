<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#00923f">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#00923f">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if(is_search()): ?>
	<meta name="robots" content="noindex, nofollow">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'global' ); ?></a>

			<header class="c-header" role="banner">

				<!-- searchbar -->
				<div class="c-header__searchbar hide-for-small-only">
					<div class="row align-right align-middle full-height">
						<div class="small-12 medium-5 column">
							<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
								<div>
								<input class="no-margin" type="text" size="18" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
								<input type="submit" id="searchsubmit" value="Search" class="hide btn" />
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Logobar -->
				<div class="row hide-for-small-only">
					<div class="c-header__logo">
						<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna"></a>
					</div>
				</div>

				<!-- navbar -->
				<div class="c-header__navbar">
				<a href="<?php bloginfo('url'); ?>" class="show-for-small-only logo"><img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna"></a>
					<div class="row align-bottom">


						<div class="column">
							<div class="row align-right">
								<div class="medium-shrink column"><nav id="site-navigation" class="main-navigation" role="navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '|||', 'global' ); ?></button>
										<?php wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_id' => 'primary-menu'
										) ); ?>
									</nav><!-- #site-navigation -->
								</div>
							</div>
						</div>
					</div>

				</div>

			</header>

			<main id="content" class="site-content">
				<div class="row">
			      <div class="medium-12 large-7 column">


