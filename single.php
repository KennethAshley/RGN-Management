<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>
</div>
    <!-- Main Content -->
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
      <div class="callout">
        <div class="row">
          <h3><?php the_title(); ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="large-8 columns" role="main">
          <?php the_post_thumbnail(); ?>

				  <?php the_content(); ?>
			   <?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>