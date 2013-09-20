<?php
/**
 * Page
 *
 * Loop container for page content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>
</div>
<div class="callout">
  <div class="row">
    <header>
      <h3><?php the_title(); ?></h3>
    </header>
  </div>
</div>
<div class="row">

    <!-- Main Content -->
    <div class="large-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>