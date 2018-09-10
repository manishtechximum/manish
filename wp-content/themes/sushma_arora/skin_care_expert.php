<?php
/* 
	Template Name: Skin Care Expert Page Template
*/

	get_header();

?>
<main> 
  <!---Skin Care--->
  <section class="about-sushma">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase">
            <h2><span>Skin Care</span> Expert</h2>
          </div>
          
          <article>
            <h6>&nbsp;</h6>
            <p>
			<?php 
				while(have_posts()) : the_post();
					the_content();
				endwhile;	
			?>
			</p>
          </article>
          </div>
        
      </div>
    </div>
  
 
</main>

<?php get_footer(); ?>
