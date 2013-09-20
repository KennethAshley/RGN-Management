<?php

/*
 * Template Name: News
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
          <?php
    query_posts('cat=1,9');
    while (have_posts()) : the_post();?>
      <h3><?php the_title();?></h3>
      <div class="content">
        <div class="padding">
      <?php the_excerpt();?>
    </div>
    </div>
                <?php endwhile; ?>
                    </div>

    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>