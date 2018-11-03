<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advancedmagazine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if (get_theme_mod('favicon', '') != null) { ?>
<link rel="icon" type="image/png" href="<?php echo esc_url( get_theme_mod('favicon', '') ); ?>" />
<?php } ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
<?php wp_head(); ?>

<?php
	$primary_font = 'Open Sans';
	$secondary_font = 'Roboto Condensed';
	$primary_color = '#de0f17';
	$primary_bar_color = '#ffffff';	

?>
<style type="text/css" media="all">
	body,
	h1,h2,h3,h4,h5,h6,
	.breadcrumbs h3,
	.section-header h3,
	label,
	input,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="search"],
	input[type="password"],
	textarea,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	table,
	#primary-menu li li a,
	.sidebar .widget_ad .widget-title,
	.site-footer .widget_ad .widget-title {
		font-family: "<?php echo $primary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	#primary-menu li a,
	h3.section-heading,
	.widget-title,
	.breadcrumbs h3,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"] {
		font-family: "<?php echo $secondary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	a,
	a:visited,
	a:hover,
	.site-title a:hover,
	#primary-bar.bar-1 #primary-menu li a:hover,
	.mobile-menu ul li a:hover,	
	.entry-meta a,
	.edit-link a,
	.comment-reply-title small a:hover,
	.entry-content a,
	.entry-content a:visited,
	.page-content a,
	.page-content a:visited,
	.pagination .page-numbers.current,
	.content-block .section-heading h3 a,
	.content-block .section-heading h3 a:visited,
	.pagination .page-numbers:hover,	
	.sidebar .widget a:hover,
	.site-footer .widget a:hover,
	.sidebar .widget ul li a:hover,
	.site-footer .widget ul li a:hover,
	.entry-related .hentry .entry-title a:hover,
	.author-box .author-name span a:hover,
	.entry-tags .tag-links a:hover:before,
	.widget_tag_cloud .tagcloud a:hover:before,
	.entry-content a:hover,
	.page-content a:hover,
	.content-block .section-heading h3 a:hover,
	.content-block .section-heading .section-more-link a:hover,
	.entry-meta .entry-comment a:hover,
	.entry-title a:hover,
	.page-content ul li:before,
	.entry-content ul li:before,
	.site-footer.footer-light .footer-nav li a:hover,
	.site-footer.footer-dark .footer-nav li a:hover,
	.site-footer.footer-light #site-bottom .site-info a:hover,
	.site-footer.footer-dark #site-bottom .site-info a:hover,
	h3.section-heading,
	h3.section-heading a,
	.three-column-block .column-one .hentry a:hover .entry-title,
	#site-bottom .site-info a:hover,
	.header-date,
	.search-button .genericon:hover,
	.search-button .genericon.active, 
	.slogan h4 {
		color: <?php echo $primary_color; ?>;
	}
	.mobile-menu-icon .menu-icon-close,
	.mobile-menu-icon .menu-icon-open,
	.more-button a,
	.more-button a:hover,
	.entry-header .entry-category-icon a,
	.three-column-block .column-one h3.section-heading ,
	.header-date .arrow-right:before,
	.header-search .search-submit,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button:hover,
	.btn:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	input[type="button"]:hover	 {
		background-color: <?php echo $primary_color; ?>;
	}
	.my-pager a:hover,
	.my-pager a.active,
	.header-search .search-submit {
		border-color: <?php echo $primary_color; ?>;
	}
	#primary-bar.bar-2 {
		background-color: <?php echo $primary_bar_color; ?>;
	}
</style>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header id="masthead" class="site-header clear">

		<div id="top-bar" class="container clear">

			<span class="header-date">
				<span class="arrow-right"></span> <?php echo current_time('l, F j, Y'); ?>
			</span>

			<?php if ( get_theme_mod('header-search-on', true) ) : ?>
				
				<span class="search-button">
					<span class="genericon genericon-search"> <strong>Search</strong></span>
					<span class="genericon genericon-close"> <strong>Search</strong></span>			
				</span>

				<div class="header-search">
					<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" name="s" class="search-input" placeholder="Enter keywords..." autocomplete="off">
						<button type="submit" class="search-submit"><?php echo __('Go', 'advanced-magazine'); ?></button>		
					</form>
				</div><!-- .header-search -->

			<?php endif; ?>		

			<?php if ( get_theme_mod('header-social-on', 'true') == true ) : ?>

			<span class="header-social <?php if ( get_theme_mod('header-search-on', true) == false ) { echo "no-header-search";  } ?>">

				<?php if ( get_theme_mod('twitter-url', '') ) : ?>
					<a class="twitter" href="<?php echo esc_url( get_theme_mod('twitter-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-twitter-white.png'; ?>" alt="Twitter"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('facebook-url', '') ) : ?>
					<a class="facebook" href="<?php echo esc_url( get_theme_mod('facebook-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-facebook-white.png'; ?>" alt="Facebook"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('google-plus-url', '') ) : ?>
					<a class="google-plus" href="<?php echo esc_url( get_theme_mod('google-plus-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-google-plus-white.png'; ?>" alt="Google+"></a>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('youtube-url', '') ) : ?>
					<a class="youtube" href="<?php echo esc_url( get_theme_mod('youtube-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-youtube-white.png'; ?>" alt="YouTube"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('linkedin-url', '') ) : ?>
					<a class="linkedin" href="<?php echo esc_url( get_theme_mod('linkedin-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-linkedin-white.png'; ?>" alt="LinkedIn"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('pinterest-url', '') ) : ?>
					<a class="pinterest" href="<?php echo esc_url( get_theme_mod('pinterest-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-pinterest-white.png'; ?>" alt="Pinterest"></a>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('rss-url', '') ) : ?>
					<a class="rss" href="<?php echo esc_url( get_theme_mod('rss-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-rss-white.png'; ?>" alt="RSS"></a>
				<?php endif; ?>					

			</span>

			<?php endif; ?>

			<span class="mobile-menu-icon">
				<span class="menu-icon-open"><?php echo __('Menu', 'advanced-magazine'); ?></span>
				<span class="menu-icon-close"><span class="genericon genericon-close"></span></span>		
			</span>				

		</div><!-- #top-bar -->

		<div class="site-start clear header-1">

			<div class="container">

			<div class="site-branding">

				<?php if (get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png') != null) { ?>
				
				<div id="logo">
					<span class="helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png'); ?>" alt=""/>
					</a>
				</div><!-- #logo -->

				<?php } else { ?>

				<div class="site-title">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-title -->
				
				<div class="site-description">
					<?php  echo get_bloginfo( 'description' ); ?>
				</div><!-- .site-description -->				

				<?php } ?>

			</div><!-- .site-branding -->

			<div class="slogan slogan-left">
				<?php if( get_theme_mod('left-quote-image', get_template_directory_uri().'/assets/img/slogan1.jpg') != null ) { ?>
						<img src="<?php echo get_theme_mod('left-quote-image', get_template_directory_uri().'/assets/img/slogan1.jpg'); ?>" alt=""/>
				<?php } ?>
				<div class="slogan-content">
					<h4><?php echo get_theme_mod('left-quote-header', 'Vladimir Putin') ?></h4>
					<p><?php echo get_theme_mod('left-quote-text', 'I never met with him. We have a lot of Americans who visit us') ?></p>
				</div>
			</div>

			<div class="slogan slogan-right">
				<?php if( get_theme_mod('right-quote-image', get_template_directory_uri().'/assets/img/slogan2.jpg') != null ) { ?>
						<img src="<?php echo get_theme_mod('right-quote-image', get_template_directory_uri().'/assets/img/slogan2.jpg'); ?>" alt=""/>
				<?php } ?>
				<div class="slogan-content">
					<h4><?php echo get_theme_mod('right-quote-header', 'Donald Trump') ?></h4>
					<p><?php echo get_theme_mod('right-quote-text', 'I think I\'ve made a lot of sacrifices. I work very, very hard') ?></p>
				</div>	
			</div>			
			
			</div><!-- .container -->

		</div><!-- .site-start -->

		<div id="primary-bar" class="container clear bar-1">

			<nav id="primary-nav" class="primary-navigation">

				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="primary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Primary Menu', 'advanced-magazine'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #primary-nav -->

		</div><!-- .primary-bar -->

		<div id="secondary-bar" class="container clear">

			<nav id="secondary-nav" class="secondary-navigation">

				<?php 
					if ( has_nav_menu( 'secondary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="secondary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Secondary Menu', 'advanced-magazine'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #secondary-nav -->	

		</div><!-- #secondary-bar -->			

		<div class="mobile-menu clear">

			<div class="container">

			<?php 

				if ( has_nav_menu( 'primary' ) ) {

					echo '<div class="menu-left">';
					echo '<h3>' . get_theme_mod('primary-nav-heading', __('Categories', 'advanced-magazine')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

				if ( has_nav_menu( 'secondary' ) ) {

					echo '<div class="menu-right">';
					echo '<h3>' . get_theme_mod('secondary-nav-heading', __('Pages', 'advanced-magazine')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

			?>

			</div><!-- .container -->

		</div><!-- .mobile-menu -->	

	</header><!-- #masthead -->

	<div id="content" class="site-content container clear">
