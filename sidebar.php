<?php
/**
 * Sidebar
 *
 * Content for our sidebar, provides prompt for logged in users to create widgets
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!-- Sidebar -->
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
<!-- End Sidebar -->