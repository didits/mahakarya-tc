<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
<div class="row">
<div class="col s12 m12">
<h5 class="center" style="padding-top:15px; background-color:#fff"><?php echo $row->JUDUL_FP;?></h5>
</div>
</div>
<div class="row">
<div class="col s12 m2" style=" border-top:#0CF 1px solid">
		<p style="font-weight:800; font-style:italic">Semester: <?php echo $row->SEMESTER;?></p>
		<p style="font-weight:800; font-style:italic">Dosen: <?php echo $row->NIP;?></p>
		<p style="font-weight:800; font-style:italic">Tahun: <?php echo $row->tahun;?></p>
	</div>		
	<div class="col s12 m8" style="background-color:#fff; border-top:#0CF 1px solid;">
			<p align="justify"><span style="font-weight:800; font-style:italic; color:#FFF">Deskripsi: </span><?php echo $row->DESKRIPSI_FP;?></p>
			<iframe src = "<?php echo base_url();?>uploads/fp/ViewerJS/#../pdf/<?php echo $row->ID_FP;?>.pdf" width='100%' height='600' allowfullscreen webkitallowfullscreen></iframe>
	</div>
	<div class="col s12 m2" style=" border-top:#0CF 1px solid">
		<p style="font-weight:800; font-style:italic">User 1: <?php echo $row->nrp1;?></p>
		<p style="font-weight:800; font-style:italic">User 2: <?php echo $row->nrp2;?></p>
		<p style="font-weight:800; font-style:italic">User 3: <?php echo $row->nrp3;?></p>
		<p style="font-weight:800; font-style:italic">User 4: <?php echo $row->nrp4;?></p>
		<p style="font-weight:800; font-style:italic">User 5: <?php echo $row->nrp5;?></p>
		<p style="font-weight:800; font-style:italic">User 6: <?php echo $row->nrp6;?></p>
	</div>
	<?php }?>
</div>