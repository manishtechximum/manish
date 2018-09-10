<?php
/* 
	Template Name: Products Page Template
*/

	get_header();

?>

<main> 
  <!---our products--->
  <section class="sa-products-page">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
	 <?php $url = get_field('url');
			if($url){ ?>
      <div class="sa-heading text-uppercase text-center">
	         <p>Image Source: <?php echo $url; ?></p>
	<?php } ?>  
      </div>

  </div>
  </div>
  
<?php

// budget-blind project
//$products= query_posts('post_type=products&posts_per_page=-1&order=DESC');
 //echo "<pre>";
$values = query_posts( array( 'post_type' => 'products','posts_per_page'=>-1, 'order'=>'DESC') );
$res = array_chunk($values,4);
//print_r($res);
foreach ($res as $value)
{
     //print_r($value);
    
     ?>
    <div class="row">
<?php   
foreach ($value as $val)
{
	// print_r($val);
	   
	   $s = $val->post_title;
	$img = wp_get_attachment_image_src(get_post_thumbnail_id($val->ID), array('220','100'));
	

	?>
	
 <div class="col-lg-3 col-md-3 col-sm-4 col-6">
	     
	   <a class="fancybox" href="<?php echo $img[0];?>" data-fancybox-group="gallery" title="">
	   <img src="<?php echo $img[0];?>" alt="" title="" />
	   </a>
	
	  </div>

     <?php } // 2st foreach end ?>

     </div>
<?php } // 1st foreach end ?>
	   
<!--  
  <div class="row">
  <div class="col">
  <a class="fancybox" href="<?php echo  get_template_directory_uri(); ?>/img/product-zoom-17.jpg" data-fancybox-group="gallery" title=""><img src="<?php echo  get_template_directory_uri(); ?>/img/product17.jpg" alt="" title="" /></a>
  </div>
  <div class="col">
  <a class="fancybox" href="<?php echo  get_template_directory_uri(); ?>/img/product-zoom-18.jpg" data-fancybox-group="gallery" title=""><img src="<?php echo  get_template_directory_uri(); ?>/img/product18.jpg" alt="" title="" /></a>
  </div>
  <div class="col">
  <a class="fancybox" href="<?php echo  get_template_directory_uri(); ?>/img/product-zoom-19.jpg" data-fancybox-group="gallery" title=""><img src="<?php echo  get_template_directory_uri(); ?>/img/product19.jpg" alt="" title="" /></a>
  </div>
  <div class="col">
  <a class="fancybox" href="<?php echo  get_template_directory_uri(); ?>/img/product-zoom-20.jpg" data-fancybox-group="gallery" title=""><img src="<?php echo  get_template_directory_uri(); ?>/img/product20.jpg" alt="" title="" /></a>
  </div>
        
  </div>
  -->
 
  </section>
  <!---//our products---> 
</main>

<?php get_footer(); ?>
