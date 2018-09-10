<?php
/* 
	Template Name: Contact Page Template
*/

	get_header();

?>

<main> 
  <!---contact--->
  <section class="sa-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="sa-heading text-uppercase">
            <h2><?php the_field('contact_info_title'); ?></h2>
          </div>
          <hr>
          <div class="contact-info">
            <ul>
				<?php
					$contact_no = get_field('contact_number');
					$email_add = get_field('email_address');
					$address = get_field('address'); 	 					
				?>
				
			<?php if($contact_no) { ?>	
              <li><i class="fas fa-phone"></i>
				<p>Contact Number <br>
                  <span><?php echo $contact_no; ?></span></p>
              </li>
			<?php } ?>
			
			<?php if($email_add) { ?>				
              <li><i class="fas fa-envelope"></i>
                <p>Email Address<br>
                  <span><?php echo $email_add; ?></span></p>
              </li>
			<?php } ?>

			<?php if($address) { ?>	
              <li><i class="fas fa-map-marker-alt"></i>
                <p>Address <br>
                  <span><?php echo $address; ?></span></p>
              </li>
			<?php } ?>
			
			</ul>
          </div>
          <div class="sa-heading text-uppercase">
            <h2><span><?php the_field('location_title'); ?></span></h2>
          </div>
          <hr>
          <div class="map">
            <iframe src="<?php the_field('map'); ?>" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <div class="contact-form-container">
            <div class="sa-heading text-uppercase">
              <h2><?php the_field('contact_form_title'); ?></h2>
            </div>
            <div class="sa-sub-heading">
              <p><?php the_field('contact_form_subtitle'); ?></p>
            </div>
            <hr>
            <?php echo do_shortcode('[contact-form-7 id="184" title="Contact Us"]'); ?>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---//contact---> 
</main>

<?php get_footer(); ?>
