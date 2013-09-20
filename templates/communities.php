<?php

/*
 * Template Name: Communities
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
    <div class="large-8 columns communities-list">
          <?php
    query_posts('post_type=Communities&sort=post_title&order=ASC&posts_per_page=40');
    while (have_posts()) : the_post();?>
    <a href="<?php the_permalink()?>">
      <h3><?php the_title();?></h3>
    </a>
                <?php endwhile; ?>
                    </div>

    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>