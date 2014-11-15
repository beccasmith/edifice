<div id="footer" class="row">
<!-- 		<?php wp_footer(); ?> -->
	<div class="container">
		
	<div class="col-xs-12 col-md-7">

		<!-- <h5>About</h5> -->
			<ul class="footernav">
				<li><h5><a href="">About</a></h5></li>
				<li><a href="<?php bloginfo('url' ); ?>/who-we-are">Who We Are</a></li>
				<li><a href="<?php bloginfo('url' ); ?>/pricing-2">Pricing</a></li>
			</ul>
		<!-- <h5>Support</h5> -->
			<ul class="footernav ml-20">
				<li><h5><a href="">Support</a></h5></li>
				<li><a href="">Contact</a></li>
				<li><a href="">FAQs</a></li>
				<li><a href="">Legal/Privacy</a></li>
			</ul>
			<ul class="footernav ml-20">
				<li><h5><a href="">Connect</a></h5></li>
				<li><a href="">FB</a></li>
				<li><a href="">TW</a></li>
				<li><a href="">Insta</a></li>
			</ul>
	</div><!-- end of cols -->

	<div class="col-xs-12 col-md-5">
		<h3>Be the first to know,<br>sign up for our newsletter!</h3>
		<form action="" method="POST" class="input-group">
			<input class="form-control" type="text" name="email" value="<?php if(isset($_GET['email'] )){echo $_GET['email'];} ?>" placeholder="Email address">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary bolder">></button>
			</span>
		</form>
		<?php if(isset($_GET['email'] )){echo "You've been added to the mailing list!";} ?>
		<br>
		<br>
		<p>HAVE A QUESTION?<br>
		<span class="h3">+1 (800) 555-1287</span><br>
		OR CONTACT US AT SUPPORT@edifice.COM</p>
	</div>
	
	</div>

</div>    <!-- end of footer div -->

</div><!-- x content -->
</body>
</html>