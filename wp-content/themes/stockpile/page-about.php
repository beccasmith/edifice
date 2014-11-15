<?php get_header();
/*
Template Name: About Page
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row about">
	<div class="container">
	<div class="col-xs-8 col-xs-offset-1 col-md-8 col-md-offset-2">
		

	</div>
	</div>
</div>

<div class="row">
	<div class="container copy">
	<div class="col-xs-8 col-xs-offset-1 col-md-8 col-md-offset-2">
		<h1 class="mt-30"><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</div>
	</div>
</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>