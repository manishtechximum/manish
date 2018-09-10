<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?><footer>
  <section class="sa-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h5>For Fans</h5>
         <?php
            wp_nav_menu( array(
                'menu'              => 'For Fans',
                'theme_location'    => '',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => '',
                 
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        </div>
        <div class="col-lg-3">
		<h5>For Companies</h5>
		<?php
            wp_nav_menu( array(
                'menu'              => 'For Companies',
                'theme_location'    => '',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => '',
                 
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        </div>
		<!--
        <div class="col-lg-3">
          <h5>Customer Service</h5>
        <?php
            // wp_nav_menu( array(
                // 'menu'              => 'Customer Service',
                // 'theme_location'    => '',
                // 'depth'             => 2,
                // 'container'         => '',
                // 'container_class'   => '',
                // 'container_id'      => '',
                // 'menu_class'        => '',
                 
                // 'walker'            => new wp_bootstrap_navwalker())
            // );
        ?>  
        </div>
		-->
        <div class="col-lg-6">
          <h5>Instagram Feed</h5>
          <div class="following"> <a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/img/25008055_1570638333029062_3471303975783890944_n.jpg" alt="" title=""></a>
            <h6>Sushma Arora</h6>
            <a href="#" class="folow" title="">Follow</a>
            <p>109 Followers 0 Follow</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sa-copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
		
		<?php if(ot_get_option('copyright')) { ?>
			<?php echo ot_get_option('copyright'); ?>
          <!--<p>Copyright Â© 2017-2018 <span>Sushma Arora</span> | Designed & Developed by <a href="http://txdigital.com.au/" title="">TX Digital</a></p> -->
        <?php } ?>
		
		</div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="footer-social">
            <ul>
              <?php if(ot_get_option('facebook')) { ?>
				  <li><a href="<?php echo ot_get_option('facebook'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
				<?php } ?>
				
				<?php if(ot_get_option('instagram')) { ?>
					<li><a href="<?php echo ot_get_option('instagram'); ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
				<?php } ?>	
				
				<?php if(ot_get_option('google_plus')) { ?>
					<li><a href="<?php echo ot_get_option('google_plus'); ?>" target="_blank" title="Google Plus"><i class="fab fa-google-plus-square"></i></a></li>
				<?php } ?>	
					
				<?php if(ot_get_option('twitter')) { ?>	
					<li><a href="<?php echo ot_get_option('twitter'); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
				<?php } ?>	
				
				<?php if(ot_get_option('you_tube')) { ?>	
					<li><a href="<?php echo ot_get_option('you_tube'); ?>" target="_blank" title="You Tube"><i class="fab fa-youtube"></i></a></li>
				<?php } ?>	

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.min.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>

