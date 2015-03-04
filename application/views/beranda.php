<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>slide/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>slide/css/full-slider.css" rel="stylesheet">
<!-- slider -->
<div id="myCarousel" class="carousel slide" >
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active"> 
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
			<div class="carousel-caption">
				<h4>Caption 1</h4>
				<h4>Caption 3</h4>
			</div>
		</div>
		<div class="item"> 
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
			<div class="carousel-caption">
				<h4>Caption 1</h4>
				<h4>Caption 3</h4>
			</div>
		</div>
		<div class="item"> 
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
			<div class="carousel-caption">
				<h4>Caption 1</h4>
				<h4>Caption 3</h4>
			</div>
		</div>
	</div>
	
	<!-- Controls --> 
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </div>

<!-- end slider -->
<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<div class="row center">
			<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
		</div>
	</div>
</div>
<div class="container">
	<div class="section"> 
		
		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-image-flash-on"></i></h2>
					<h5 class="center">Speeds up development</h5>
					<p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-social-group"></i></h2>
					<h5 class="center">User Experience Focused</h5>
					<p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-action-settings"></i></h2>
					<h5 class="center">Easy to work with</h5>
					<p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="section"> </div>
</div>
<!-- jQuery --> 
<script src="<?php echo base_url(); ?>slide/js/jquery.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="<?php echo base_url(); ?>slide/js/bootstrap.min.js"></script> 
<!-- Script to Activate the Carousel --> 
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>  
