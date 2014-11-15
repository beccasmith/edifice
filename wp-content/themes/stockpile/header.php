<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,700,400' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body style="background-color:<?php the_field('color', 'option'); ?>">
  <div class="row">
  	<div class="container">

<?php
if(is_user_logged_in()){
	global $current_user;
	get_currentuserinfo();
	?>
	<div class="user"><p>Welcome, <?php echo $current_user->user_firstname ?>!</p>
		<p>
		<a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>">Logout</a>
		</p>
	</div>
	<?php } ?>

	<div class="main-nav logo"><a href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory' );?>/imgs/logo.png" alt=""></a></div>
		<div class="main-nav">
			<ul>
				<li><a href="<?php bloginfo('url');?>/register">Register</a></li>
				<li data-toggle="modal" data-target="#loginmodal">Login</li>
				<li><a href="#">Cart</a></li>
			</ul>
		</div>
		<div class="modal fade" id="loginmodal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Login</h4>
		      </div>
		      <div class="modal-body">
		      	<?php
				//array for login form
				  $login_args = array(
				        'echo'           => true,
				        'redirect'       => site_url( $_SERVER['REQUEST_URI'] ), 
				        'form_id'        => 'loginform',
				        'label_username' => __( 'Username' ),
				        'label_password' => __( 'Password' ),
				        'label_remember' => __( 'Remember Me' ),
				        'label_log_in'   => __( 'Log In' ),
				        'id_username'    => 'user_login',
				        'id_password'    => 'user_pass',
				        'id_remember'    => 'rememberme',
				        'id_submit'      => 'wp-submit',
				        'remember'       => true,
				        'value_username' => NULL,
				        'value_remember' => false
				    );
				    wp_login_form($login_args);
				    
				?>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


<?php
if( is_front_page() ) {
	}
else{ ?>
		<div class="navsearch">
			<form action="<?php echo bloginfo('url'); ?>/Images?=" method="GET">
		     <div class="mb-20">
		        <div class="input-group">
		          <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'] )){echo $_GET['search'];} ?>">
		          <span class="input-group-btn">
		                <button type="submit" class="btn btn-primary">Search</button>
		          </span>
		        </div>
		      </div>
		    </form>
		</div>

<!-- 		<div class="categorybar">
			<ul>
				<li ><a href="<?php echo bloginfo('url'); ?>/category?category=contemporary" name="category">Contemporary</a></li>
				<li ><a href="<?php echo bloginfo('url'); ?>/category?category=abstract">Abstract</a></li>
				<li ><a href="<?php echo bloginfo('url'); ?>/category?category=ancient">Ancient</a></li>
				<li ><a href="<?php echo bloginfo('url'); ?>/category?category=skyline">Skyline</a></li>
			</ul>
		</div> -->
<?php
	}
?>
		</div>
	</div><!-- end of row -->

<!-- <ul class="nav nav-pills">
	<li class="active"><a href="<?php bloginfo('url');?>/cart">Cart</a></li>
	<li><a href="<?php bloginfo('url');?>/login">Login</a></li>
	<li><a href="<?php bloginfo('url');?>/signup">Sign Up</a></li>
</ul> -->