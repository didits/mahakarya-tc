
	<!--   Icon Section   -->
	<div class="row" style="background-color:#FFF; padding:10px; border-top:#0CF 1px solid; overflow:hidden">
		<div class="wow slideInLeft col s12 m6 l3 kotak" >
	<div id="owl-demo" class="owl-carousel owl-theme ">
		<div class="item" style="overflow:hidden; height:190px; width:100%"><img width="100%" src="<?php echo base_url(); ?>uploads/fp/img/final_project.jpg" alt=""></div>
		<div class="item" style="overflow:hidden; height:190px; width:100%"><img width="100%" src="<?php echo base_url(); ?>uploads/fp/img/2.jpg" alt=""></div>
	</div>
		</div>
		<div class="wow slideInLeft col s12 m6 l3 kotak">
			<div id="owl-demo2" class="owl-carousel owl-theme ">
		<div class="item" style="overflow:hidden; height:190px; width:100%"><img width="100%" src="<?php echo base_url(); ?>uploads/fp/img/prestasi.jpg" alt=""></div>
		<div class="item" style="overflow:hidden; height:190px; width:100%"><img width="100%" src="<?php echo base_url(); ?>uploads/fp/img/2.jpg" alt=""></div>
		</div>
		</div>
		<div class="wow slideInRight col s12 m6 l3 kotak">
			<p>s12 m6 l3</p>
		</div>
		<div class="wow slideInRight col s12 m6 l3 kotak">
			<p>s12 m6 l3</p>
		</div>
		<div class="wow slideInLeft col s12 m6 kotak">
			<p>s12 m6 l3</p>
		</div>
		<div class="wow slideInRight col s12 m6 l3 kotak">
			<p>s12 m6 l3</p>
		</div>
		<div class="wow slideInRight col s12 m6 l3 kotak">
			<p>s12 m6 l3</p>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script> 
<script>
			wow = new WOW(
			  {
				animateClass: 'animated',
				offset:       150,
				callback:     function(box) {
				  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			  }
			);
			wow.init();
		  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.js"></script> 
<script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
         	navigation : false,
			pagination :false,
			paginationNumbers : false,
			lazyLoad : true,
         	slideSpeed : 500,
         	paginationSpeed : 400,
         	autoPlay : true,
         	singleItem:true
           });
		   $("#owl-demo2").owlCarousel({		
         	navigation : false,
			pagination :false,
			paginationNumbers : false,
			lazyLoad : true,
         	slideSpeed : 50,
         	paginationSpeed : 200,
         	autoPlay : true,
         	singleItem:true
           });
         });	 
      </script>