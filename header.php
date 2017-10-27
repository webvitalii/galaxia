<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'galaxia' ); ?></a>
<div class="container-fluid site-container">

    <header id="masthead" class="site-header">
<?php get_template_part( 'template-parts/header', 'branding' ); ?>
<?php get_template_part( 'template-parts/header', 'navigation' ); ?>
    </header><!-- #masthead .site-header -->