<!-- <div class="row">
 	<div class="col s12 m2 grid-example side-nav fixed">
 		<h5 class="center" style="padding-top:15px; background-color:#3b424b">TA</h5>
 		<ul>
 			<li class="no-padding">
 				<ul class="collapsible collapsible-accordion">
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		              <!-- <div class="collapsible-body">
		                <ul>
		                  <li><a href="helpers.html"></a>A</li>
		                  <li><a href="media-css.html">B</a></li>
		                  <li><a href="sass.html">C</a></li>
		                </ul>
		              </div> 
		            </li>
		           <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		            <li class="bold"><a class="active waves-effect waves-teal">Progjar</a>
		            </li>
		        </ul>
 			</li>
 		</ul>
 	</div>
 	<div class="col s12 m10 grid-example">
 		<div class="section">
 			<h5 class="center" style="padding-top:15px; background-color:#3b424b">TUGAS AKHIR VIDEOS</h5>
			<!--   Icon Section   
			<div class="row" style="background-color:#3b424b; padding-top:30px; border-top:#0CF 1px solid;">
				
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
				<div class="col s12 m2 kotak">
					<div class="gambar_kotak"> <img src="<?php echo base_url(); ?>assets/beranda/Capture.png" style="width:100%; height:100%;"/> </div>
					<div class="caption1">
						<p>Test1</p>
					</div>
				</div>
			</div>
		</div>
 	</div>
  </div> -->

  <div class="row">		

	<div class="col s12 m12">
		<div class="section">
			<h5 class="center" style=" background-color:#fff; color:#666;">TUGAS AKHIR</h5>
			<!--   Icon Section   -->
			<div class="row" style="background-color:#fff; padding-top:30px; border-top:#0CF 1px dashed;">
			<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
				<a href="<?php echo base_url();?>tugas_akhir/rmk/<?php echo $row->id;?>"><div class="col s12 m2 kotak2">
					<div class="gambar_kotak2"> <img src="<?php echo base_url(); ?>assets/img/folder.png" style="width:100%; height:100%;"/> </div>
					<div class="caption2">
						<p align="center"><?php echo $row->nama_rmk;?></p>
					</div>
				</div></a>
				<?php }?>
			</div>
		</div>
	</div>
</div>

 