<div class="row" style="min-height:100vh">		
	
	
	<div class="col s12 m12">
		<div class="section">
		
		<a href="<?php echo base_url();?>tugas_akhir" class="waves-effect waves-light btn-flat" style="margin-top:5px; color:#CCC"><i class="mdi-hardware-keyboard-backspace left"></i>back</a>
			<h5 class="center" style=" background-color:#fff; color:#666;";>TUGAS AKHIR</h5>
			<!--   Icon Section   -->
			<div class="row" style="background-color:#fff; padding-top:30px; border-top:#0CF 1px dashed;">
			<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
				<a href="<?php echo base_url();?>tugas_akhir/rincian_ta/<?php echo $row->ID_TA;?>"><div class="col s12 m2 kotak2">
					<div class="gambar_kotak3" style="background-image:url(<?php echo base_url(); ?>uploads/ta/img/<?php echo $row->ID_TA;?>.jpg); background-position:center; background-size:cover"> </div>
					<div class="caption3">
						<p><?php echo $row->JUDUL_TA;?></p>
					</div>
				</div></a>
				<?php }?>
			</div>
		</div>
	</div>
</div>