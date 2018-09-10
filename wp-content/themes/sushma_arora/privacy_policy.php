<?php
/* 
	Template Name: Privacy Policy Page Template
*/

	get_header();

?>

<main> 
  <!---PRIVACY POLICY STARTS HERE--->
  <section class="privacy-policy">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase">
            <h2><?php the_field('page_title'); ?></h2>
          </div>
          <div class="sa-sub-heading">
           <!-- <p>Lorem Ipsum is simply dummy text of  "<span>the printing</span>"</p> -->
          </div>
          <article>
            <h6>&nbsp;</h6>
            <?php 
				while(have_posts()) : the_post();
					the_content();
				endwhile;	
			?>
			
          </article>
          </div>
      </div>
    </div>
<!--
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        	<article>
        		<ul>
        			
        			<li>
        				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard d
        			</li>
        			
        			<li>
        				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industmm
        			</li>
        			
        			<li>
        				Lorem Ipsum is simply dummy text of the printing and tyxt ever since the 1500s, when an unknown printer 
        			</li>
        			
        			<li>
        				Lorem Ipsum is simply dummy text of the printing and typesetting industryscrambled it to make a type spe
        			</li>
        			
        			<li>
        				Lorem Ipsum is simply dummy text of the printing and typesetting indnce the 1500se and scrambled it to make a type spe
        			</li>
        			
        		</ul>
        	</article>
        </div>
      </div>
    </div> -->
  </section>
<!-- PRIVACY POLICY ENDS HERE -->
</main>

<?php get_footer(); ?>
