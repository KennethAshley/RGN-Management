<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>
</div>
  <div class="callout">
    <div class="row">
      <h3>All News</h3>
    </div>
  </div>
  <div class="row">

    <!-- Main Content -->
    <div class="large-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>

			<h2><?php _e('No posts.', 'foundation' ); ?></h2>
			<p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'foundation' ); ?></p>
			
		<?php endif; ?>

		<?php foundation_pagination(); ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>