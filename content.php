<?php
/**
 * Content
 *
 * Displays content shown in the 'index.php' loop, default for 'standard' post format
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h3><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
		</hgroup>
	</header>

	<div class="row">
		<div class="large-4 columns">
			<?php if ( has_post_thumbnail()) : ?>

				<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			<div class="date">
				<?php the_date(); ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="large-8 columns">
			<?php the_excerpt(); ?>
		</div>
	</div>
	<hr>


</article>