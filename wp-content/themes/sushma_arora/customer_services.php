<?php
/* 
	Template Name: Customer Services Page Template
*/

	get_header();

?>
<main> 
  <!--- Terms Of Use --->
  <section class="about-sushma">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase">
            <h2><?php the_field('page_title'); ?></h2>
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
