<?php
/* 
	Template Name: About Page Template
*/

	get_header();

?>
<main> 
  <!---About--->

  <section class="about-sushma">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="sa-heading text-uppercase">
<?php

 // $title = get_the_title($post->ID);
 // $about_title= explode(" ", $title);
 // echo "<pre>";
 // print_r($advice_title);

 ?>
            <h2><?php the_field('title_on_banner'); ?></h2>
          </div>
          <div class="sa-sub-heading">
            <p><?php the_field('sub_title_1'); ?> "<span><?php the_field('sub_title_2'); ?></span>"</p>
          </div>
          <article>
            <h6>&nbsp;</h6>
           
		    <?php
				while ( have_posts() ) : the_post();
				  the_content();
				endwhile;
		    ?>
		   
          </article>
          </div>
        <div class="col-lg-4">
          <div class="sa-about-page-img">
		  <?php 
				$about_image=get_field('image');
				// echo "<pre>";
				// print_r($about_image['url']);

		  ?>
		  
		  <?php if($about_image['url']) { ?>
			<img src="<?php echo $about_image['url']; ?>" title="" alt="">
		  <?php } ?>
		  
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---//About---> 
    <!---SA Strength--->
  <?php $strength_going_img = get_field('strength_going_images', 7); ?>
  <section class="sa-strength" style="background:url(<?php echo $strength_going_img; ?>) no-repeat;background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading white-head text-uppercase text-center">
            <h2><?php the_field('strength_going_title', 7); ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
	  <!-- Getting Strengths Going Section Data -->
				<?php 
				    $strength_going_id=7;
					if( have_rows('strengths_going', $strength_going_id) ): ?>
										
					<?php
						while( have_rows('strengths_going', $strength_going_id) ) : the_row();
							
							$strength_icons = get_sub_field('strength_icons');
							// echo "<pre>";
							// print_r($strength_icons);
							$strength_title = get_sub_field('strength_title');
							$strength_description = get_sub_field('strength_description');
					?>
	<?php if($strength_title || $strength_description || $strength_icons) { ?>				
        <div class="col">
          <div class="strength-box"> <i class="fa <?php echo $strength_icons; ?>"></i> <span class="timer count-title count-number" data-to="<?php echo $strength_title; ?>" data-speed="3000"></span> <a href="#"><?php echo $strength_description; ?></a> </div>
        </div>
	<?php  } 
		  endwhile;
		endif;
			?>  	
        
      </div>
    </div>
  </section>
  <!---//SA Strength---> 
  <!---Business Oppourtunity--->
  <section class="sa-business">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="star-list">
            <ul>
			<?php if(get_field('title_1', 17) || get_field('description_1', 17)) { ?>
              <li>
			    <article> <span>1</span>
				<?php if(get_field('title_1', 17)) { ?>
                  <h5><?php echo get_field('title_1', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_1', 17)) { ?>	
                  <p><?php echo get_field('description_1', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?> 
			
			<?php if(get_field('title_2', 17) || get_field('description_2', 17)) { ?>
              <li>
			    <article> <span>2</span>
				<?php if(get_field('title_2', 17)) { ?>
                  <h5><?php echo get_field('title_2', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_2', 17)) { ?>	
                  <p><?php echo get_field('description_2', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?> 
             
			 <?php if(get_field('title_3', 17) || get_field('description_3', 17)) { ?>
              <li>
			    <article> <span>3</span>
				<?php if(get_field('title_3', 17)) { ?>
                  <h5><?php echo get_field('title_3', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_3', 17)) { ?>	
                  <p><?php echo get_field('description_3', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?> 
            </ul>
          </div>
        </div>
		
	 <?php if(get_field('opportunity_image', 17) || get_field('title_on_image', 17)) { ?>	
        <div class="col-lg-4" style="background:url(<?php echo get_field('opportunity_image', 17); ?>) no-repeat;background-size:cover;background-position:center center;">
		<?php if(get_field('title_on_image', 17)) { ?>
          <div class="sa-business-msg">
            <div class="sa-heading text-uppercase text-center">
              <h4><?php echo get_field('title_on_image', 17); ?></h4>
            </div>
          </div>
		<?php } ?>   
        </div>
	<?php } ?> 	
        <div class="col-lg-4">
          <div class="star-list">
            <ul>
          
			<?php if(get_field('title_4', 17) || get_field('description_4', 17)) { ?>
              <li>
			    <article> <span>4</span>
				<?php if(get_field('title_4', 17)) { ?>
                  <h5><?php echo get_field('title_4', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_4', 17)) { ?>	
                  <p><?php echo get_field('description_4', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?> 
             
			 <?php if(get_field('title_5', 17) || get_field('description_5', 17)) { ?>
              <li>
			    <article> <span>5</span>
				<?php if(get_field('title_5', 17)) { ?>
                  <h5><?php echo get_field('title_5', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_5', 17)) { ?>	
                  <p><?php echo get_field('description_5', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?>
			
			<?php if(get_field('title_6', 17) || get_field('description_6', 17)) { ?>
              <li>
			    <article> <span>6</span>
				<?php if(get_field('title_6', 17)) { ?>
                  <h5><?php echo get_field('title_6', 17); ?> </h5>
				<?php } ?> 
					
				<?php if(get_field('description_6', 17)) { ?>	
                  <p><?php echo get_field('description_6', 17); ?> </p>
				<?php } ?>   
                </article>
              </li>
			<?php } ?> 
			
			
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---//Business Oppourtunity---> 
</main>

<?php get_footer(); ?>
