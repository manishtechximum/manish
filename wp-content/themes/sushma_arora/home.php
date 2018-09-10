<?php
/* 
	Template Name: Home Page Template
*/

	get_header();

?>

<main> 

  
  <!---About--->

  <section class="about-sushma" style="background:url(<?php echo  get_template_directory_uri(); ?>/img/about-bg.jpg) no-repeat;background-position: 101% 0%;background-size: contain;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="sa-heading text-uppercase">

<?php  // Getting Title About Page

 $title = get_the_title(9);
 $about_title= explode(" ", $title);
 // echo "<pre>";
 // print_r($about_title);
					  
 $con = get_post(9);
 $content = $con->post_content;
 $content = apply_filters('the_content', $content);
 $about_cont=substr($content, 0, 862);
		
?>
            <h2><?php echo "<span> ".$about_title[0]."</span> ".$about_title[1]; ?></h2>
          </div>
          <div class="sa-sub-heading">
            <p><?php the_field('sub_title_1', 9); ?> "<span><?php the_field('sub_title_2', 9); ?> </span>"</p>
          </div>
          <article>
            <h6>&nbsp;</h6>
			
            <?php echo $about_cont; ?>

          </article>
          <a href="<?php echo get_permalink(9); ?>" class="sa-pink-btn" title="About Us">Know More <i class="fas fa-arrow-right"></i></a> </div>
        <div class="col-lg-6">
          <div class="owl-carousel owl-theme margn-tp" id="about-slider">
		  
			 <!-- Getting About Images Section Data -->
				<?php 
				
				$aboutid=9;
    
					if( have_rows('about_section_images', $aboutid) ): ?>
					
					
					<?php	while( have_rows('about_section_images', $aboutid) ) : the_row();
							
							$about_img = get_sub_field('all_images');
							//$image = wp_get_attachment_image_src( $about_img, 'full' );
							// echo "<pre>";
							// print_r($about_img);

					

					?>
		  <?php if($about_img) { ?>
            <div class="item"> <a class="fancybox" href="<?php echo $about_img; ?>" data-fancybox-group="gallery" title="Sushma Arora"><img src="<?php echo $about_img; ?>" alt="" title="" /></a> </div>
		  <?php }
		       endwhile;
			 endif;
			?>         
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
  <!---defining strengths--->
  <?php $strength_define_img = get_field('strength_define_image', 7); ?>
  <section class="sa-strength-defines" style="background:#211f21 url(<?php echo $strength_define_img; ?>) no-repeat; background-position:130% 0%; background-size: contain;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading white-head text-uppercase">
            <h2><?php the_field('strength_define_title', 7); ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
		<!-- Getting Strengths Define Section Data -->
				<?php 
				   $strength_define_id=7;
					if( have_rows('strengths_define_me', $strength_define_id) ): ?>
										
					<?php
									
						while( have_rows('strengths_define_me', $strength_define_id) ) : the_row();
							
							$strength_me_title = get_sub_field('strength_me_title');
							$strength_me_descrip = get_sub_field('strength_me_descrip');
					?>
				
          <div class="defines-box">
			  <?php if($strength_me_title) { ?>	
				<h4><?php echo $strength_me_title; ?></h4>
			  <?php } ?>	
			  
			  <?php if($strength_me_descrip) { ?>	
				<p><?php echo $strength_me_descrip; ?></p>
			  <?php } ?>	
          </div>
        <?php   
		       endwhile;
			 endif;
		?>   
        </div>
      </div>
    </div>
  </section>
  <!---//defining strengths---> 
  <!---Team--->
  <section class="sa-team" style="background:url(<?php echo  get_template_directory_uri(); ?>/img/team-bg.jpg) no-repeat; background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading white-head text-uppercase text-center">
            <h2><span>Our</span> Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme margn-tp" id="team-slider">
		    <!-- Getting Our Team Section Data -->
				<?php 
				  $team_id=13;
				    if( have_rows('team', $team_id) ): 
										
						while( have_rows('team', $team_id) ) : the_row();
							
							$team_img = get_sub_field('image');
							$team_name = get_sub_field('team_name');
							$team_desig = get_sub_field('team_designation');
							
					?>
            <div class="item">
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
        </div>
      </div>
    </div>
  </section>
  <!---//Team---> 
  <!---our products--->
  <section class="sa-products">
<?php 
	$video_url = get_field('video_url', 19);
	$video_img = get_field('video_image', 19);
	
	$title_1 = get_field('title_1', 19);
	$title_2 = get_field('title_2', 19);
	
?>

    <div class="product-video"><a href="<?php echo $video_url; ?>" title="" data-toggle="modal" data-target="#exampleModal"> <img src="<?php echo $video_img; ?>" alt="" title=""></a>
       <?php if($title_1 || $title_2) {?>
	  <div class="video-caption">
	 
        <div class="sa-heading white-head text-uppercase text-center">
		
          <h4><?php echo $title_1; ?><br>
		
            <span><?php echo $title_2; ?> </span></h4>
		
        </div>
	
      </div>
	  <?php } ?>	
    </div>
    <div class="product-gallery">
      <div class="sa-heading text-uppercase text-center">
        <h4>Our <span>Products</span></h4>

       <?php $url = get_field('url', 19);
			if($url){ ?>
             <p>Image Source: <?php echo $url; ?></p>
	<?php } ?> 
      </div>
	  
<div class="gallery-pics">
<?php

// budget-blind project
//$products= query_posts('post_type=products&posts_per_page=-1&order=DESC');
 //echo "<pre>";
$values = query_posts( array( 'post_type' => 'products','posts_per_page'=>6, 'order' => 'DESC') );
$res = array_chunk($values,3);
//print_r($res);
foreach ($res as $value)
{
     //print_r($value);
    
     ?>
     <div class="pic-row">
<?php   
foreach ($value as $val)
{
	// print_r($val);
	   
	   $s = $val->post_title;
	$img = wp_get_attachment_image_src(get_post_thumbnail_id($val->ID), array('220','100'));
	

	?>       
          <div class="colm"> <a class="fancybox" href="<?php echo $img[0];?>" data-fancybox-group="gallery" title=""><img src="<?php echo $img[0];?>" alt="" title="" /></a> </div>
                  
        <?php } // 2st foreach end ?>

     </div>
<?php } // 1st foreach end ?>
      
      </div>
      <div class="text-center"> <br>
        <a href="<?php echo get_permalink(19); ?>" class="sa-pink-btn" title="About Us">Know More <i class="fas fa-arrow-right"></i></a> </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/4yatgHW2gEM?feature=oembed" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="modal-footer"> </div>
        </div>
      </div>
    </div>
  </section>
  <!---//our products---> 
  <!---Testimonial--->
  <section class="sa-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sa-heading text-uppercase text-center">
            <h2> <strong><?php echo the_field('testimonial_title', 7); ?> </strong></h2>
          </div>
          <div class="sa-sub-heading text-center">
            <p><?php echo the_field('testimonial_subtitle', 7); ?> </p>
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
  <!---//Testimonial---> 
</main>

<?php get_footer(); ?>
