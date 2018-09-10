<?php
/* 
	Template Name: Achievements Page Template
*/

	get_header();

?>
<main> 
 
  <!---Achievement--->
  <section class="sa-team-members">
    <div class="container">
      <div class="row">
        <div class="card-columns">
		 <!-- Getting About Images Section Data -->
				<?php 
					if( have_rows('achievements') ): ?>
					
					
					<?php	while( have_rows('achievements') ) : the_row();
							
							$achievement_title = get_sub_field('title');
							$achievement_year = get_sub_field('year');
					?>
					
		  <?php// if($about_img) { ?>
          <div class="card">
            <div class="card-body">
              <div class="sa-achievement-card"> <i class="fas fa-trophy"></i>
                <div class="achievement-content">
                  <h4><?php echo $achievement_title; ?> <span><?php echo $achievement_year; ?></span></h4>
                </div>
              </div>
            </div>
          </div>
		  
		  <?php //}
		       endwhile;
			 endif;
			?> 
		  		  
        </div>
      </div>
      <hr>
    </div>
  </section>
  <!---//Achievement---> 
  <!---catalouge--->
  <section class="sa-catalouge">
  <div class="container">
  <div class="row">
  <div class="col-lg-8 offset-lg-2">
  <div class="sa-catalouge-item"> 
      <div class="catalouge-item-caption">
        <div class="sa-heading white-head text-uppercase text-center">
          <h4><span>FEATURED IN SEPTEMBER CATALOUGE </span></h4>
        </div>
      </div>
      <img src="<?php echo  get_template_directory_uri(); ?>/img/catalouge.jpg" alt="" title="">
    </div>
    </div>
  </div>
  </div>
  </section>
  <!---//catalouge---> 
</main>

<?php get_footer(); ?>
