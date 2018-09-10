<?php
/* 
	Template Name: Opportunities Page Template
*/

	get_header();

?>

<main> 
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
  <!---Business Oppourtunity 2--->
  <section class="sa-business-plus">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase text-center">
		  
            <h2> <strong><?php echo the_field('advantage_title'); ?> </strong></h2>
		  
          </div>
          <div class="sa-sub-heading text-center">
		 
            <p><?php echo the_field('advantage_subtitle'); ?> </p>
		
          </div>
        </div>
      </div>
      <hr>
	  
      <div class="row">
	    
			<!-- Getting Advantages Section Data -->
				<?php 
				    
					if( have_rows('advantage_images') ): ?>
										
					<?php
						while( have_rows('advantage_images') ) : the_row();
							
							$advantage_image = get_sub_field('image');
							// echo "<pre>";
							// print_r($advantage_image);
							$advantage_title = get_sub_field('title');
					?>
	<?php if($advantage_image || $advantage_title) { ?>				
        <div class="col-lg-4">
		
          <div class="sa-advantage">
			<?php if($advantage_image) { ?>
				<figure> <img src="<?php echo $advantage_image['url']; ?>" title="" alt=""> </figure>
			<?php } ?>
		  
			<?php if($advantage_title) { ?>
				<p><?php echo $advantage_title; ?></p>
			<?php } ?>
          </div>
		</div>
	<?php } ?>	
		  <?php 
		       endwhile;
			 endif;
			?>    
	
         
      </div>
    </div>
  </section>
  <!---//Business Oppourtunity 2---> 
</main>

<?php get_footer(); ?>
