<?php get_header();
/*
Template Name: Login Page
*/
?>
<div class="row">
  <div class="container">
  
<?php
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
</div>
</div><!-- end of container -->

</div><!-- end of row -->
<!-- This be my single images, with img displayed large and all little details in the
tabs. -->

<?php get_footer(); ?>