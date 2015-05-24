
	<!--   Icon Section   -->
	<div class="row" style="background-color:#FFF; padding-top:10px; border-top:#0CF 1px solid; overflow:hidden">
		<div class="wow slideInLeft col s12 m6 l3 kotak" >
		</div>
		<div class="wow slideInLeft col s12 m6 l3 kotak">
			<p>s12 m6 l3</p>
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
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script> 
<script>
			wow = new WOW(
			  {
				animateClass: 'animated',
				offset:       100,
				callback:     function(box) {
				  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			  }
			);
			wow.init();
		  </script>