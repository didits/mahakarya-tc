<div class="row" style="min-height:100vh">		

	<div class="col s12 m12">
		<div class="section">
			<h5 class="center" style=" background-color:#fff; color:#666;">TUGAS AKHIR</h5>
			<!--   Icon Section   -->
			<div class="row" style="background-color:#fff; padding-top:30px; border-top:#0CF 1px dashed;">
			<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
				<a href="<?php echo base_url();?>tugas_akhir/rmk/<?php echo $row->id_rmk;?>"><div class="wow fadeIn col s12 m2 kotak2">
					<div class="gambar_kotak2" > <img src="<?php echo base_url(); ?>assets/img/folder.png" style="width:100%; height:100%;"/> </div>
					<div class="caption2">
						<p align="center"><?php echo $row->nama_rmk;?></p>
					</div>
				</div></a>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script> 
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
>>>>>>> f5ae880c0f507914d2e4e86a91272e95f1ec93ca
