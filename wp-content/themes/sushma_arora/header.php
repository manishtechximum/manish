<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link rel="icon" href="<?php echo  get_template_directory_uri(); ?>/img/favicon.png" type="image/png" sizes="16x16">
<title>Sushma Arora | Oriflame Sr. Gold Director</title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/all.min.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/jquery.fancybox.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
<header> 
  <!---Top Strip--->
  <section class="sushma-top-strip">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-8">
          <div class="top-contact">
            <ul>
			<?php if(ot_get_option('phone_no')) { ?>  
              <li><a href="tel:9997044105" title="Call Now"><i class="fas fa-phone-square"></i> <?php echo ot_get_option('phone_no'); ?></a> | </li>
			<?php } ?>   
			
			<?php if(ot_get_option('email_id')) { ?>  
              <li><a href="mailto:arora.sushma1919@gmail.com" title="Drop us a line"><i class="fas fa-envelope-square"></i> <?php echo ot_get_option('email_id'); ?></a></li>
            <?php } ?>  
		   </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-4">
          <div class="top-social-link">
            <ul>
			
				<?php if(ot_get_option('facebook')) { ?>
				  <li><a href="<?php echo ot_get_option('facebook'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
				<?php } ?>
				
				<?php if(ot_get_option('instagram')) { ?>
					<li><a href="<?php echo ot_get_option('instagram'); ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
				<?php } ?>	
				
				<?php if(ot_get_option('google_plus')) { ?>
					<li><a href="<?php echo ot_get_option('google_plus'); ?>" target="_blank" title="Google Plus"><i class="fab fa-google-plus-square"></i></a></li>
				<?php } ?>	
					
				<?php if(ot_get_option('twitter')) { ?>	
					<li><a href="<?php echo ot_get_option('twitter'); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
				<?php } ?>	
				
				<?php if(ot_get_option('you_tube')) { ?>	
					<li><a href="<?php echo ot_get_option('you_tube'); ?>" target="_blank" title="You Tube"><i class="fab fa-youtube"></i></a></li>
				<?php } ?>	

				<?php if(ot_get_option('whats_app')) { ?>	
					<li><a href="<?php echo ot_get_option('whats_app'); ?>" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
				<?php } ?>	
			
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---//Top Strip---> 

</header>

  
 <!---Slider--->
  <!---Menubar--->
 
  <section class="sushma-navbar" id="main-menu-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
		
		
          <nav class="navbar navbar-expand-lg"> 
		<?php if(ot_get_option('site_logo')) { ?>  
		  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Sushma Arora"><img src="<?php echo ot_get_option('site_logo'); ?>" alt="Sushma Arora" title="Sushma Arora"></a>
		<?php } ?>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			
			<?php
            wp_nav_menu( array(
                'menu'              => 'main_menu',
                'theme_location'    => '',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'navbar-nav ml-auto',
                 
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
			
			
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!---//Menubar---> 
  
 <!--- Slider --->   

  <?php if(is_front_page()) { ?>

<section class="sushma-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	 <div class="carousel-inner">
<?php 

$s=0;		
$home_sliderdata= new WP_Query('post_type=slider&posts_per_page=-1&order=DESC');
// echo "<pre>";
// print_r($testimonials);

while ($home_sliderdata->have_posts()) : $home_sliderdata->the_post();

$slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(), array('220','100'));

 $title_on_slider=get_field('title_on_slider');
 $get_in_touch=get_field('get_in_touch');

 ?>	
     <?php if ( has_post_thumbnail() ) { ?>
	  
        <div class="carousel-item <?php if($s==0) { echo "active"; }?>"> <img class="d-block w-100" src="<?php echo $slider_image[0]; ?>" alt="Slide 1">
          <div class="carousel-caption">
            
			<?php if(!empty($title_on_slider)){ ?>
				<div class="texture-bg"> <span></span>
					<h1><?php echo $title_on_slider; ?></h1>
			<?php } ?>
			
			<?php if(!empty($get_in_touch)){ ?>
              <span><a href="<?php echo $get_in_touch; ?>" class="sa-btn text-uppercase" title="Get in touch">Get in Touch</a></span> </div>
			<?php } ?>
			
          </div>
        </div>
		        
	 <?php } ?>			
	  
<?php 
		$s++;
	endwhile;
?> 
    </div>
	
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </section>
  <!---//Slider---> 

<!--  About banner start here -->
<?php } elseif (is_page(9)) { 

 $about_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
<section class="sa-page-heading" style="background:url(<?php echo $about_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
<div class="blk-overly"></div>
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="page-head">
<h1><?php the_field('title_on_banner', 9); ?></h1>
</div>
</div>
<div class="col-lg-4">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
  <li class="breadcrumb-item active"><?php the_title();?></li>
</ol>
</div>
</div>
</div>
</section>
<!-- About banner end here --> 

<!-- Achievements banner end here --> 
<?php } elseif (is_page(11)) { 
 $achievements_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $achievements_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(9);?></a></li>
			
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Achievements banner end here --> 
 
 <!-- Team banner end here --> 
<?php } elseif (is_page(13)) { 
 $team_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $team_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(9);?></a></li>
			
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Team banner end here -->

 <!-- Why Join Me banner end here --> 
<?php } elseif (is_page(15)) { 
 $why_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $why_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(15);?></a></li>
			
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Why Join Me banner end here --> 
 
 <!-- Business Opportunities banner end here --> 
<?php } elseif (is_page(17)) { 
 $opp_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $opp_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!--Business Opportunities end here --> 
 
  
 <!-- Products banner end here --> 
<?php } elseif (is_page(19)) { 
 $products_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $products_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(17);?></a></li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Products end here -->

<!-- Skin Care banner end here --> 
<?php } elseif (is_page(21)) { 
 $skin_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $skin_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Skin Care end here --> 
 
 <!-- Contact us banner end here --> 
<?php } elseif (is_page(23)) { 
 $skin_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $skin_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Skin Care end here --> 
 
 <!-- Terms banner end here --> 
<?php } elseif (is_page(27)) { 
 $terms_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $terms_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Terms end here --> 
 
 <!-- Privacy and Policy banner end here --> 
<?php } elseif (is_page(25)) { 
 $privacy_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $privacy_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Privacy and Policy end here --> 
 
  <!-- Shipping and Handling banner end here --> 
<?php } elseif (is_page(31)) { 
 $shipping_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $shipping_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Shipping and Handling end here --> 
 
   <!-- Customer Services banner end here --> 
<?php } elseif (is_page(29)) { 
 $customer_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
 ?>
  <section class="sa-page-heading" style="background:url(<?php echo $customer_banner[0]; ?>);background-size: cover;background-repeat: no-repeat;background-position: 10% 10%;">
    <div class="blk-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="page-head">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-lg-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i></a></li>
			<li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 <!-- Customer Services end here --> 
<?php } ?>

