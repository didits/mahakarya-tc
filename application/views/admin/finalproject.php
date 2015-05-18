        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Final Project
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Input Data
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
				<!--/.form input -->
				<div class="col-lg-12">
				<div class="col-lg-6">
				<div class="row">
					<form action="http://localhost/mahakarya-tc/admin/submit_fp" role="form" method="post">
						<div class="form-group" >	
							<label>Judul Final Project</label>
							<input class="form-control" type="text" name="judul">
								<p class="help-block"> Masukan judul dari final project anda disini</p>
						</div>
						<div class="form-group" type="text" >
							<label>NRP User 1</label>
							<input class="form-control" name="nrp1">
								<p class="help-block"> Masukan NRP user 1 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NRP User 2</label>
							<input class="form-control" name="nrp2">
								<p class="help-block"> Masukan NRP user 2 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NRP User 3</label>
							<input class="form-control" name="nrp3">
								<p class="help-block"> Masukan NRP user 3 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NRP User 4</label>
							<input class="form-control" name="nrp4">
								<p class="help-block"> Masukan NRP user 4 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NRP User 5</label>
							<input class="form-control" name="nrp5">
								<p class="help-block"> Masukan NRP user 5 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NRP User 6</label>
							<input class="form-control" name="nrp6">
								<p class="help-block"> Masukan NRP user 6 disini</p>
						</div>
						<div class="form-group" type="text">
							<label>NIP Dosen</label>
							<input class="form-control" name="nip">
								<p class="help-block"> Masukan NIP Dosen disini</p>
						</div>
				</div>
				</div>
                <div class="col-lg-6" style="padding-left:50px">
				<div class="row">
					
						<div class="form-group">
							<label>Deskripsi Final Project</label>
								<textarea class="form-control" rows="3" name="deskripsi" type="text"></textarea>
						</div>
						<div class="form-group">
							<label>Semester</label>
								<select class="form-control" name="semester">
									<option value="1">Semester 1</option>
									<option value="2">Semester 2</option>
									<option value="3">Semester 3</option>
									<option value="4">Semester 4</option>
									<option value="5">Semester 5</option>
									<option value="6">Semester 6</option>
									<option value="7">Semester 7</option>
									<option value="8">Semester 8</option>
								</select>
						</div>
						<div class="form-group">
							<label>Matakuliah</label>
								<select class="form-control" name="matkul">
								<option value="1">Matematika Diskrit</option>
								<option value="2">Sistem Digital</option>
								<option value="3">Dasar Pemrograman</option>
								<option value="4">Sistem dan Teknologi Informasi</option>
								<option value="5">Aljabar Linier</option>
								<option value="6">Matematika Informatika</option>
								<option value="7">Organisasi Komputer</option>
								<option value="8">Struktur Data</option>
								<option value="9">Pemrograman Berorientasi Objek</option>
								<option value="10">Perancangan dan Analisis Algoritma I</option>
								<option value="11">Sistem Basis Data</option>
								<option value="12">Teori Graf</option>
								<option value="13">Probabilitas dan Statistik</option>
								<option value="14">Sistem Operasi</option>
								<option value="15">Pemrograman Web</option>
								<option value="16">Perancangan dan Analisis Algoritma II</option>
								<option value="17">Manajemen Basis Data</option>
								<option value="18">Kecerrdasan Buatan</option>
								<option value="19">Otomata</option>
								<option value="20">Jaringan Komputer</option>
								<option value="21">Analisis dan Perancangan Sistem Informasi</option>
								<option value="22">Grafika Komputer</option>
								<option value="23">Kecerdasan Komputasional</option>
								<option value="24">Komputasi Numerik</option>
								<option value="25">Pemrograman Jaringan</option>
								<option value="26">Manajemen Proyek Perangkat Lunak</option>
								<option value="27">Rekayasa Kebutuhan</option>
								<option value="28">Penjamin Mutu Perangkat Lunak</option>
								<option value="29">Arsitektur Perangkat Lunak</option>
								<option value="30">Interaksi Manusia dan Komputer</option>
								<option value="31">Animasi Komputer dan Pemodelan 3D</option>
								<option value="32">Teknik Pengembangan Game</option>
								<option value="33">Pemrograman berbasi Kerangka Kerja</option>
								<option value="34">Rekayasa Pengetahuan</option>
								<option value="35">Sistem Enterprise</option>
								<option value="36">Analisis Data Multivariat</option>
								<option value="37">Data Mining</option>
								<option value="38">Pengolahan Citra Digital</option>
								<option value="39">Pemrograman Linier</option>
								<option value="40">Keamanan Informasi dan Jaringan</option>
								<option value="41">Komputasi Bergerak</option>
								<option value="42">Komputasi Awan</option>
								<option value="43">Jaringan Nirkabel</option>
								<option value="44">Tekniologi antar Jaringan</option>
								<option value="45">Kerja Praktik</option>
								<option value="46">Evolusi Perangkat Lunak</option>
								<option value="47">Konstruksi Perangkat Lunak</option>
								<option value="48">Realitas Virtual dan Augmentasi</option>
								<option value="49">Sistem Game</option>
								<option value="50">Topik Khusus IGS</option>
								<option value="51">Pemrograman Perangkat Bergerak</option>
								<option value="52">Topik Khusus Algroritma dan Pemrograman</option>
								<option value="53">Audit Sistem</option>
								<option value="54">Sistem Informasi Geografis</option>
								<option value="55">Tata Kelola Teknologi Informasi</option>
								<option value="56">Komputasi Biomedik</option>
								<option value="57">Robotika</option>
								<option value="58">Sistem Temu Kembali Informasi</option>
								<option value="59">Visi Komputer</option>
								<option value="60">Pemodelan dan Simulasi</option>
								<option value="61">Jaringan Multimedia</option>
								<option value="62">Komputasi Grid dan Paralel</option>
								<option value="63">Kompresi Data</option>
								<option value="64">Topik Khusus Komputasi berbasis Jaringan</option>
								<option value="65">Komputasi Pervasif dan Jaringan Sensor</option>
								<option value="66">Perancangan Keamanan Sistem dan Jaringan</option>
								<option value="67">Topik Khusus Arsitektur dan Jaringan Komputer</option>
								<option value="68">Proposal Tugas Akhir (Metode Tugas Akhir)</option>
								<option value="69">Technopreneurship</option>
								<option value="70">Topik Khusus Rekayasa Perangkat Lunak</option>
								<option value="71">Ekonomi Rekayasa Perangkat Lunak</option>
								<option value="72">Penyempurnaan Proses Perangkat Lunak</option>
								<option value="73">Basis Data Terdistribusi</option>
								<option value="74">Big Data</option>
								<option value="75">Topik Khusus Manajemen Informasi</option>
								<option value="76">Analisis Media Sosial</option>
								<option value="77">Topik Khusus KCV</option>
								<option value="78">Topik Khusus Dasar & Terapan Komputasi</option>
								<option value="79">Sistem Terdistribusi</option>
								<option value="80">Forensik Digital</option>
								</select>
						</div>
						<div class="form-group">
							<label>Screenshot</label>
							<input type="file" name="screenshot" type="text">
						</div>
						<div class="form-group">
							<label>Video</label>
							<input class="form-control" name="video" type="text">
								<p class="help-block"> Masukan link youtube dari final project anda</p>
						</div>
						<div class="form-group" >
							<label>Demo</label>
							<input type="file" name="demo">
						</div>
							
							<br>
							<br>
								<button class="btn btn-primary" name="register" type="submit" data-toggle="modal" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									Submit
								</button>
								<button type="reset" class="btn btn-default">Reset</button>
							<div class="modal" id="collapseExample" style="top:50%">
							<div class="col-lg-6" style="left:30%">
							  <div class="alert alert-success" style="margin-top:20px;">
								<center>
								<strong>Selamat! Input berhasil!</strong>
								</center>
							  </div>
							</div>
							</div>
					
							
					</form>
				</div>
				</div>
				
				</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
