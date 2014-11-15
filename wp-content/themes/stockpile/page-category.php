<?php get_header();
/*
Template Name: Category Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- 
  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?> -->


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<div class="row">
  <div class="container">
    <p>Category:</p>
    <h2><?php //echo $_GET['category']; ?></h2>
<?php
if(isset( $_GET['category'] )){
  $category = $_GET['category'];

$imgcat = get_posts(array(
  'post_type'   => 'image',
  'category'    => $category
));

// if($posts)
// {
//   foreach($posts as $post)
//   {
//     // ...
//   }
// }
//print_r($category);
$the_query = new WP_Query($imgcat)
// get results
if ($the_query->have_posts()) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="col-xs-3">
<!--   <?php return the_field('category'); 
    ?> -->
  <a href="<?php the_permalink();?>">
  	<div class="image_thumb">
  	  <img src="<?php the_field('image');?>" >
    </div>
    <p><?php the_title(); ?></p>
  </a>
</div>

<!--   <?php //endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p> -->
<?php //endif; ?>

<div class="col-xs-4">
  <?php wp_pagenavi(array('query' => $the_query));?>
</div>

</div><!-- end of container -->

</div><!-- end of row -->
<!-- This be my single images, with img displayed large and all little details in the
tabs. -->

<?php get_footer(); ?>