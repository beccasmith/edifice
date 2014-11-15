<?php get_header();
/*
Template Name: Images Page
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
    <h4>Search Results:</h4>
    <h2><?php if(isset($_GET['search'] )){echo $_GET['search'];} ?></h2>
<?php
  if(isset($_GET['search'])){
    $search = $_GET['search'];
    $imgs = array(
      's' => $search,
      'post_type' => 'image',
      'paged' => get_query_var('paged')
    );
  }
  else {
    $imgs = array(
      'post_type' => 'image',
      'paged' => get_query_var('paged')
    );
  }

$images = new wp_query($imgs);
if ($images->have_posts()) : while ($images->have_posts()) : $images->the_post(); ?>

<div class="imgtitle col-xs-3 mb-20">
  <a href="<?php the_permalink();?>">
    <div class="image_thumb">
      <img src="<?php the_field('image');?>" >
    </div>
   <span class="imgtitle"><?php the_title(); ?></span>
  </a>
</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

</div><!-- end of container -->

</div><!-- end of row -->
<div class="row">
  <div class="container">
      <div class="col-xs-4 mb-40">
        <?php wp_pagenavi(array('query' => $images));?>
      </div>
  </div>
</div>
<?php get_footer(); ?>