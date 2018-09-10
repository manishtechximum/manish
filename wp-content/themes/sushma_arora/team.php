<?php
/* 
	Template Name: Team Page Template
*/

	get_header();

?>
<main> 
    <!---team--->
  <section class="sa-team-members">
    <div class="container">
      <div class="row">
	  
	  <!-- Getting Our Team Section Data -->
				<?php 
				
				    if( have_rows('team') ): 
										
						while( have_rows('team') ) : the_row();
							
							$team_img = get_sub_field('image');
							$team_name = get_sub_field('team_name');
							$team_desig = get_sub_field('team_designation');
							
					?>
        <div class="col-lg-4">
          <div class="team-member"> 
		  
		<?php if($team_img) { ?>		  
		  <img src="<?php echo $team_img; ?>" alt="" title="">
		<?php } ?> 
		
            <div class="member-name">
		
		<?php if($team_name) { ?>
            <p><?php echo $team_name; ?></p>
		<?php } ?>
		
			<?php if($team_desig) { ?>
              <span><?php echo $team_desig; ?></span>
			<?php } ?>   
			
			</div>
          </div>
        </div>
		<?php 
		       endwhile;
			 endif;
		?> 	
      </div>
      <hr>
    </div>
  </section>
  <!---//team---> 
  <!---testimonial--->
  <section class="sa-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase text-center">
            <h2> <strong><?php echo the_field('testimonial_title', 7); ?></strong></h2>
          </div>
          <div class="sa-sub-heading text-center">
            <p><?php echo the_field('testimonial_subtitle', 7); ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="owl-carousel owl-theme margn-tp" id="testimonial-slider">
		  
		  <!-- Getting Testimonials Section Data -->
				<?php 
				  $test_id=7;
				    if( have_rows('testimonials', $test_id) ): 
										
						while( have_rows('testimonials', $test_id) ) : the_row();
							
							$test_img = get_sub_field('testimonials_image');
							$test_name = get_sub_field('testimonials_name');
							$test_desig = get_sub_field('testimonials_designation');
							$test_des = get_sub_field('testimonials_description');
					?>
            <div class="item">
              <div class="testimonial-member">
				 
				<?php if($test_img) { ?>
					<img src="<?php echo $test_img; ?>" alt="" title="">
				<?php } ?> 
				 
				<?php if($test_des) { ?>
					<p><?php echo $test_des; ?></p>
				<?php } ?> 
			
              <div class="member-name">
			  
				<?php if($test_name) { ?>
                  <p><?php echo $test_name; ?></p>
				<?php } ?>  

				<?php if($test_desig) { ?>	
                  <span><?php echo $test_desig; ?></span>
				<?php } ?> 
				
			  </div>
             </div>
            </div>
		<?php 
		       endwhile;
			 endif;
		?>     
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---//testimonial---> 
</main>

<?php get_footer(); ?>
