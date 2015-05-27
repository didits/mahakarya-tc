<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<div class="row center">
			<h5 class="header col s12 light"><br /><br /></h5>
		</div>
	</div>
</div>
<div class="container">
	<div class="section"> 
		<!--   Icon Section   -->
		<div class="row">
		<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
			<div class="wow fadeIn col s12 m3">
				<div class="icon-block" style="margin-bottom:30px">
					<h1 align="center"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>assets/tentang_kami/<?php echo $row->user_id;?>.jpg);"></div></div></div></h1>
					<h6 class="center" style="color:#0082c6"><?php echo $row->nama;?></h6>
					<h6 class="center" style="color:#666"><?php echo $row->peran;?></h6>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
	<br /><br />
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