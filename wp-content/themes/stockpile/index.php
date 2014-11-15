<?php get_header();
/*
Template Name: Home Page
*/
?>

<div class="row megatron">

 <!--  <img class="mainimg" src="<?php //bloginfo('template_directory');?>/imgs/main_haak.jpg" alt="Haak beauty"> -->

  <!-- the searchbar -->
      <!-- <h1 class="white mt-240 text-center">The best architectural images on the interwebs, hands down.</h1> -->

  <div class="col-xs-12 col-md-4 col-md-offset-4">

    <form action="<?php echo bloginfo('url'); ?>/Images?=" method="GET">
     <div class="mb-20 z">
        <div class="input-group">
          <input type="text" class="form-control mainsearch" name="search" 
          value="<?php if(isset($_GET['search'] )){echo $_GET['search'];} ?>">
          <span class="input-group-btn">
                <button type="submit" class="btn btn-primary mainsearch">Search</button>
          </span>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="row quotes">
  <div class="container text-center mb-20">
    <h2>If a building becomes architecture, then it is art.</h2>
  </div>
</div>

<?php get_footer(); ?>