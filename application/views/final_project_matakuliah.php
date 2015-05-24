<div class="row">		
	
	
	<div class="col s12 m12">
		<div class="section">
			<h5 class="center" style=" background-color:#fff; color:#666">FINAL PROJECT</h5>
			<!--   Icon Section   -->
			<div class="row" style="background-color:#fff; padding-top:30px; border-top:#0CF 1px dashed;">
			<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
				<a href="<?php echo base_url();?>final_project/rincian_fp/<?php echo $row->ID_FP;?>"><div class="col s12 m2 kotak2">
					<div class="gambar_kotak3" style="background-image:url(<?php echo base_url(); ?>assets/img/1.jpg); background-position:center; background-size:cover"> </div>
					<div class="caption3">
						<p><?php echo $row->JUDUL_FP;?></p>
					</div>
				</div></a>
				<?php }?>
			</div>
		</div>
	</div>
</div>