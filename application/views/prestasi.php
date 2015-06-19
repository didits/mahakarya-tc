<br />
<div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a class="active" href="#test1">DAFTAR PRESTASI</a></li>
        <li class="tab col s6"><a href="#test2">BLOG</a></li>
      </ul>
    </div>
 <div class="row">
    <div id="test1" class="col s12">
	<br />
			<table class="bordered hoverable">
				<thead>
			    	<tr>
						<th style="color:#00F">Tahun</th>
						<th style="color:#00F">Ajang</th>
						<th style="color:#00F">Bidang</th>
						<th style="color:#00F">Tingkat</th>
						<th style="color:#00F">Peringkat</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($h->result() as $row){?>
					<tr>
						<td><?php echo $row->TAHUN;?></td>
						<td><?php echo $row->AJANG;?></td>
						<td><?php echo $row->BIDANG;?></td>
						<td><?php echo $row->TINGKAT;?></td>
					    <td><?php echo $row->PERINGKAT;?></td>
				    </tr>
				<?php }?>
				</tbody>
			</table>
    </div>
    <div id="test2" class="col s12">
	<br />
		<div class="section"> 
			<!--   Icon Section -->   
			<div class="row">
				<div class="col s12 m4">
					<div class="icon-block">
						<img src="<?php echo base_url(); ?>assets/blog/tcode.jpg" style="width:100%; height:50%;"/>
					</div>
				</div>
				<div class="col s12 m8">
					<div class="icon-block">
						<h5>Tcode Februari 2015</h5>
						<p><i class="mdi-action-event"></i>March 3, 2015&nbsp;&nbsp;<i class="mdi-action-loyalty"></i><span class="tag">TCode</span></p>
						<p class="light">Tcode Bulan Februari 2015 telah selesai diselenggarakan. Setelah melalui pertarungan sengit selama 3 jam di Laboratorium Workshop Pemrograman 1 Teknik Informatika, diperoleh pemenang Tcode Februari 2015. Berikut ini daftar pemenangnya.<br />
			- Juara 1 – John Stephanus Peter (5113100106)<br />
			- Juara 2 – Azkaa Khoirudin (5113100135)<br />
			- Peserta Terbaik Angkatan 2014 – Ilham Aulia Majid (5114100144)<br />

			Selamat kepada seluruh pemenang dan terima kasih kepada seluruh peserta atas partisipasinya. Sampai jumpa di Tcode berikutnya pada Bulan Maret 2015. Untuk informasi lebih lanjut dan pendaftaran Tcode bisa diakses di sini.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="divider" style="margin-bottom:20px;"></div>
			<div class="row">
				<div class="center">
					<a class="waves-effect waves-light btn disabled tooltipped" data-position="bottom" data-delay="50" data-tooltip="Halaman sebelumnya"><i class="mdi-hardware-keyboard-arrow-left"></i></a>
					<a class="waves-effect waves-light btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Halaman selanjutnya"><i class="mdi-hardware-keyboard-arrow-right"></i></a>
				</div>
			</div>
		</div>	
    </div>
  </div>