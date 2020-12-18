<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">halaman Tim Pemeriksa</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						


						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<h3 class="header smaller lighter blue">Data Tim Pemeriksa</h3>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a href="./controller/timpemeriksa/tambah.php" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
								</h4>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Kumpulan Data Tim Pemeriksa
										</div>
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													
														
														<th>No</th>
														<th>No Tindak Lanjut</th>
														<th class="hidden-480">Kode Penyidik</th>
														<th class="hidden-480">Jabatan</th>
														<th>Aksi</th>
													
												</thead>
												<?php 
												include "././include/koneksi.php";
												$no=1;
													$tampil=mysqli_query($koneksi,"SELECT * FROM tim_pemeriksa") or die(mysqli_error());
													
														while($r=mysqli_fetch_array($tampil)):
													
												 ?>
											<tbody>
												
											
										
												<td><?php echo $no++; ?></td>
												<td><?php echo $r['notlhp'] ?> &nbsp;&nbsp;<a href="./controller/timpemeriksa/detailtindaklanjut.php?id=<?php echo $r['notlhp']; ?>">Lihat Detail tindak lanjut</a></td>
												<td><?php echo $r['kdpenyidik'] ?>&nbsp;&nbsp; <a href="./controller/timpemeriksa/detailpenyidik.php?id=<?php echo $r['kdpenyidik']; ?>">Lihat Detail Penyidik</a></td>
												<td><?php echo $r['jabatan'] ?></td>
											
												<td>
												<a href="./controller/timpemeriksa/hapus.php?id=<?php echo $r['notlhp'] ?>">Hapus</a></td>
												
											</tbody>
											<?php 
											endwhile;
										
											?>
											</table>
										</div>

									
								</div>


								<div class="hr hr32 hr-dotted"></div>

							
							</div><!-- /.col -->
							
								</div><!-- PAGE CONTENT ENDS -->
								
								
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
	