<?php

/*
 * Template Name: Full Page Template
 */

get_header(); ?>
</div>
  <div class="callout">
    <div class="row">
      <h3>Provide cost effective, efficient, and professional services, with a personal touch, 
        that identifies with the character of homeowner associations.”
      </h3>
    </div>
  </div>
            <?php wp_reset_query(); ?>
    <div class="slide-background">    </div>

      <div class="row home-slider">
        <ul class="bxslider-home">
          <?php
            query_posts('post_type=Slides');
            while (have_posts()) : the_post();?>
            <a href="<?php the_permalink();?>">
              <li>
                <div class="slide-image">
                  <?php the_post_thumbnail();?>
                    <div class="slide-excerpt">
                      <h4><?php the_title();?></h4>
                      <p><?php the_excerpt();?></p>
                    </div>
                </div>
              </li>
            </a>
          <?php endwhile; ?>
        </ul>
        <a href="<?php echo site_url(); ?>/procure-services">
          <div class="large-4 columns todo">
            <i class="icon-briefcase"></i>
            <h2>Procure Services</h2>
          </div>
        </a>
        <a href="<?php echo site_url(); ?>/faqs">
          <div class="large-4 columns todo">
            <i class="icon-question-sign"></i>
            <h2>FAQs</h2>
          </div>
        </a>
        <a href="<?php echo site_url(); ?>/contact-us-2">
          <div class="large-4 columns todo">
            <i class="icon-envelope"></i>
            <h2>Contact Us</h2>
          </div>    
        </a>            
      </div> 
      <div class="row">
        <div class="large-8 columns">
          <div class="row">
              <div class="large-container">
                  <h3>In the Spotlight</h3>
                  <?php
                    query_posts('cat=9&posts_per_page=1');
                    while (have_posts()) : the_post();?>
                  <?php the_post_thumbnail(); ?>
                  <div class="large-12">
                    <h4><?php the_title(); ?></h4>
                  </div>
                  <div class="large-12 spotlight">
                    <?php the_excerpt(); ?>
                  </div>
                  <?php endwhile; ?>

              </div>

          </div>
          <?php wp_reset_query(); ?>


          <div class="row">
            <div class="featured-news-container">
          <h3>Featured News</h3>
            <div class="news">
              <ul class="bxslider">
              <?php
                query_posts('cat=1&posts_per_page=4');
                while (have_posts()) : the_post();?>
                <li>
                  <?php the_post_thumbnail();?>
                  <div class="padding">
                    <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                    <p><?php the_excerpt();?></p>
                  </div>
                <?php endwhile; ?>
              </ul>
            </div>
            <a class="read-more" href="<?php echo site_url(); ?>/news">Read More News...</a>
          </div>
          </div>


          <div class="row">
            <div class="news-container">
          <h3>News</h3>
              <?php
                query_posts('cat=Uncategorized&posts_per_page=3');
                while (have_posts()) : the_post();?>
                  <div class="news-list row">
                    <div class="large-4 columns">
                      <?php the_post_thumbnail();?>
                      <div class="date">
                        <?php the_date(); ?>
                      </div>
                    </div>
                    <div class="large-8 columns">
                      <div class="padding">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <p><?php the_excerpt();?></p>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>

          </div>
          <a href="<?php echo site_url(); ?>/all-post">View All News</a>
          </div> 

        </div>

        <div class="large-4 columns">
          <div class="row">
            <div class="sidebar">
          <div>

            <div id="weather"></div>

          </div>

              <div id="calendar">
                <h3>Calendars <small>(scroll)</small></h3>
                  <?php 
                    if ( dynamic_sidebar('calendar') ) : 
                    else : 
                  ?>
                  <?php endif; ?>
              </div>
<!--              <div>
                <a href="<?php echo site_url(); ?>/subscribe">
                  <div class="orange-btn">Subscribe to Newsletter</div>
                </a>
              </div> -->
              <div>
                <h3>Useful Links</h3>
                  <?php 
                    if ( dynamic_sidebar('foundation_sidebar_right') ) : 
                    else : 
                  ?>
                  <?php endif; ?>
              </div>
 
            </div>

          
          </div>


        </div>

      </div>





  <div class="row">
    




    <!-- Main Content -->
<!--     <div class="large-12 columns" role="content">

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; ?>
      
    <?php endif; ?>

    </div> -->
    <!-- End Main Content -->

<?php get_footer(); ?>