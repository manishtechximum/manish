<?php
/* 
	Template Name: Why Join Page Template
*/

	get_header();

?>

<main> 
  
  <!---Why Join Me--->
  <section class="sa-why-join">
    <div class="container">
      <div class="row">
      <div class="col-lg-4">
      <div class="sa-why-page-img">
	  <?php $why_image = get_field('why_image'); ?>
          <img src="<?php echo $why_image; ?>" title="" alt="">
          </div>
      </div>
        <div class="col-lg-8">
          <div class="star-list badge-plus">
            <ul>
			<!-- Getting Why Join Me Section Data -->
				<?php 
				 	if( have_rows('why_join_details') ): ?>
										
					<?php
					$s=1;
						while( have_rows('why_join_details') ) : the_row();
							
							$why_title = get_sub_field('why_title');
							$why_descrip = get_sub_field('why_description');
					?>
				
              <li>
                <article> <span><?php echo $s; ?></span>
                  <h5><?php echo $why_title; ?></h5>
                  <p><?php echo $why_descrip; ?></p>
                </article>
              </li>
			 <?php   
			 $s++;
		       endwhile;
			 endif;
		?>     
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!---//Achievement---> 
</main>

<?php get_footer(); ?>
