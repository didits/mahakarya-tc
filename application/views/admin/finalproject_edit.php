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
                                <i class="fa fa-edit"></i> Edit Data
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
				<!--/.table input -->
				<div class="col-lg-12">
				<h2>Edit Data</h2>
				<div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>NRP User 1</th>
										<th>NRP User 2</th>
										<th>NRP User 3</th>
										<th>NRP User 4</th>
										<th>NRP User 5</th>
										<th>NRP User 6</th>
										<th>NIP Dosen</th>
                                        <th>Deskripsi Final Project</th>
										<th>Semester</th>
										<th>Matakuliah</th>
										<th>Screenshot</th>
										<th>Video</th>
										<th>Demo</th>
										<th></th>
                                     
                                    </tr>
									<?php
									foreach($h->result() as $row)
									{
										?>
									
									<tbody>
										<td><?php echo row->JUDUL_FP;?></td>
										<td></td>NRP1
										<td></td>NRP2
										<td></td>NRP3
										<td></td>NRP4
										<td></td>NRP5
										<td></td>NRP6
										<td><?php echo row->NIP;?></td>
										<td><?php echo row->DESKRIPSI_FP;?></td>
										<td><?php echo row->SEMESTER;?></td>
										<td><?php echo row->MATA_KULIAH;?></td>
										<td><?php echo row->IMAGE;?>/td>
										<td><?php echo row->LINK_VIDIO;?></td>
										<td><?php echo row->DEMO_PDF;?></td>
										<td><button type="submit" class="btn btn-default">Ubah</button></td>
									</tbody>
									<?php}
									?>
                                </thead>
                             </table>
                        </div>
				</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
