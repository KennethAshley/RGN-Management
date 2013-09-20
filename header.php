<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- 	<nav>
		<ul class="title-area">
			<li class="name"><h1><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"/></h1></li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav> -->
	<header>
		<div class="topbar">
			<div class="left">
				<div class="large-12 columns">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'large-12 columns', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
				</div>
			</div>
			<div class="right">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="18" placeholder="Search"  value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
</div>
</form>
			</div>
		</div>
		<div class="row">
			<div class="large-8 columns">

				<a href="<?php echo get_option('home'); ?>">
					<!-- <h1 class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"/></h1> -->
					<div class="logo">
						<img src="<?php echo get_bloginfo('template_directory');?>/img/rgn-logo.png">
						<h1>Management, LLC</h1>
					</div>
				</a>
			</div>
			<?php rewind_posts(); wp_reset_query(); ?>

			<div class="large-4 columns">
				<div class="community-select">
					<div>Please Select your Community</div>
					<ul class="hidden">
						<?php      
							query_posts( 'post_type=Communities&sort=post_title&order=ASC&posts_per_page=40');
							while ( have_posts() ) : the_post(); ?>
							<a href="<?php the_permalink();?>">
								<li><?php the_title(); ?></li>
							</a>
							<?php endwhile; ?>
					</ul>
				</div>
			</div>

		</div>
		<!-- <div class="header-shadow"></div> -->
		</header>

<!-- 	<?php $header =  get_header_textcolor();
	if ( $header !== "blank" ) : ?>
	<header class="site-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
		<div class="row">
			<div class="large-12 columns">
				<h2><a style="color:#<?php header_textcolor(); ?>;" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h2>
			</div>
		</div>
	</header>
	<?php endif; ?> -->

<!-- Begin Page -->
<?php wp_reset_query(); ?>
<div class="row">