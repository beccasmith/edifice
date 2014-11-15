<?php get_header(); ?>
<div class="row">
	<div class="container">
		<a href="<?php bloginfo('url'); ?>/images" class="white">< Back</a>		
	</div>
</div>
>

<?php
 // $args = array(
 //      'post_type' => 'image',
 //      // 'category_name' => 'Featured'
 //    );
?>
<?php
// $images = new wp_query($args);
// if ($images->have_posts()) : while ($images->have_posts()) : $images->the_post(); 
if(have_posts()): while (have_posts()) : the_post();
?>

<div class="row">
	<div class="container">

      <h3><?php the_title(); ?></h3>
	
		<div class="col-xs-12 col-md-8 image_full mb-20">
			<img src="<?php the_field('image');?>" alt="<?php the_title(); ?>">
		</div>
		<div class="col-xs-12 col-md-4">
			
			<form action="" method="POST">
				<?php
				get_field('price_size'); ?>
				<?php while (has_sub_field('price_size')) {
				?>
					<div id="price">
					<input type="radio" name="<?php echo $price ?>"
					 value="<?php echo $price ?>">
					<span class="sizing"><?php $size = the_sub_field('size');
					echo $size;?></span>
					<div class="price"><?php $price = the_sub_field('price');
					echo $price;?> USD</div>
					<p><?php $dim = the_sub_field('pixels');
					echo $dim;?></p>
					</input>
					
					</div>
				<?php } ?>
			</form>
			
			<button class="btn btn-lg download" type="button">
			    Download
			</button>
		</div>

		<div class=" col-xs-12 col-md-8">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
			  <li class="active"><a href="#description" role="tab" data-toggle="tab"><h4>Description</h4></a></li>
			  <li><a href="#details" role="tab" data-toggle="tab"><h4>Details</h4></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="description">
					<p><?php the_field('image_description');?></p>
					<hr class="hrstyle">
					<span class="details">Categories</span><br>
					<span class="category"><?php the_field('category');
						 ?></span>
				</div>
				<div class="tab-pane fade" id="details">
				  	<span class="details">Stock Photo ID:</span> <?php the_field('image_id');?><br>
					<span class="details">License Type:</span> <?php the_field('license_info');?><br>
					<span class="details">Author:</span> <?php the_field('author');?></div>
				</div>
					
		</div>
		
  	</div>
</div>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

		


<!-- end of img row, outside loop of course. -->



<?php get_footer(); ?>