<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

</div>
<!-- End Page -->

<!-- Footer -->
<footer>
  <div class="row">

    <?php 
      if ( dynamic_sidebar('Footer One') ) : 
      else : 
    ?>
    <?php endif; ?>

    <?php 
      if ( dynamic_sidebar('Footer Two') ) : 
      else : 
    ?>
    <?php endif; ?>

    <?php 
      if ( dynamic_sidebar('Footer Three') ) : 
      else : 
    ?>
    <?php endif; ?>

    <?php 
      if ( dynamic_sidebar('Footer Four') ) : 
      else : 
    ?>
    <?php endif; ?>
  </div>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

<script src="<?php echo get_bloginfo('template_directory');?>/js/bxslider.js"></script>
<script>
    $(function() {
      $.simpleWeather({
        zipcode: '20774',
        location: '',
        unit: 'f',
        success: function(weather) {
          html = '<h3>Local Weather</h3>';
          html += '<h2>'+weather.temp+'&deg;'+weather.units.temp+'</h2>';
          html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
          html += '<li class="currently">'+weather.currently+'</li>';
          html += '<img src="'+weather.image+'">';
          html += '<li>'+weather.tempAlt+'&deg;C</li></ul>';

          $("#weather").html(html);
        },
        error: function(error) {
          $("#weather").html('<p>'+error+'</p>');
        }
      });
    });
    $(document).ready(function(){
      $('.bxslider-home').bxSlider({
        controls: false,
        pager: false,
        auto: true

      });
      $('.bxslider').bxSlider();
      $('.community-slider').bxSlider({
        controls: false
      });

    });

  </script>

</body>
</html>