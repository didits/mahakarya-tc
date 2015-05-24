<?php  
         foreach ($h->result() as $row)  
         {  
            ?>

<div class="row">
<div class="col s12 m12">
<section style="margin-top:20px">
<a href="<?php echo base_url();?>final_project/matakuliah/<?php echo $row->MATA_KULIAH;?>"class="waves-effect waves-light btn-flat" style="margin-top:5px; color:#CCC"><i class="mdi-hardware-keyboard-backspace left"></i>back</a>
<h5 class="center" style=" background-color:#fff"><?php echo $row->JUDUL_FP;?></h5>
</section>
</div>

</div>
<div class="row">
<div class="col s12 m2" style=" border-top:#0CF 1px solid">
		<p style="font-weight:800; font-style:italic; color:#06F; font-size:18px"><i class="mdi-content-remove"></i> Keterangan <i class="mdi-content-remove"></i></p>
		<p style="font-weight:800; font-style:italic">Semester:<br /> <?php echo $row->SEMESTER;?></p>
		<p style="font-weight:800; font-style:italic">Dosen: <br /><?php echo $row->NIP;?></p>
		<p style="font-weight:800; font-style:italic">Tahun: <br /><?php echo $row->tahun;?></p>
	</div>		
	<div class="col s12 m8" style="background-color:#fff; border-top:#0CF 1px solid;">
			<p align="justify"><span style="font-weight:800; font-style:italic; color:#FFF">Deskripsi: </span><?php echo $row->DESKRIPSI_FP;?></p>
			<iframe frameborder="0" src = "<?php echo base_url();?>uploads/fp/ViewerJS/#../pdf/<?php echo $row->ID_FP;?>.pdf" width='100%' height='600' allowfullscreen webkitallowfullscreen></iframe>
			<p style="font-weight:800; font-style:italic"><i class="mdi-image-switch-video"></i> Video Demo:</p>
<iframe width="100%" height="400" src="<?php echo $row->LINK_VIDEO;?>" frameborder="0" allowfullscreen></iframe>
</iframe>
	</div>
	<div class="col s12 m2" style=" border-top:#0CF 1px solid">
		<p style="font-weight:800; font-style:italic; color:#06F; font-size:18px"><i class="mdi-content-remove"></i> Anggota <i class="mdi-content-remove"></i></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp1;?></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp2;?></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp3;?></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp4;?></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp5;?></p>
		<p style="font-weight:800; font-style:italic"><i class="mdi-action-perm-identity"></i> <?php echo $row->nrp6;?></p>
	</div>
	<?php }?>
</div>