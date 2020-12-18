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
							<li class="active">halaman pengolahan laporan</li>
						</ul><!-- /.breadcrumb -->
					</div>/
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<h3 class="header smaller lighter blue">Data laporan</h3>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
								</h4>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Kumpulan Data laporan
										</div>
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													
														
														<th>No</th>
														<th>Nomor Laporan</th>
														<th class="hidden-480">Tanggal Kejadian</th>

														<th>No Ktp Pelapor</th>
														<th class="hidden-480">Kategori</th>
														<th class="hidden-480">Isi Laporan</th>
													
														
														<th class="hidden-480"> Tanggal Kejadian</th>
														
														<th class="hidden-480">Kode Penyidik</th>
													
														<th>Aksi</th>
													
												</thead>
												<?php 
												include "././include/koneksi.php";
												$no=1;
													$tampil=mysqli_query($koneksi,"SELECT  * FROM pengaduan") or die(mysqli_error());
													
														while($r=mysqli_fetch_array($tampil)):
													
												 ?>
											<tbody>
												
											
										
												<td><?php echo $no++; ?></td>
												<td><?php echo $r['id_pengaduan']?></td>
												<td class="hidden-480"><?php echo $r['tgl_pengaduan']?></td>
												<td><?php echo $r['nik']?>&nbsp;&nbsp;<a href="./controller/laporan/detailpelapor.php?id=<?php echo $r['noktp']; ?>">Detail Pelapor</a></td>
												<td class="hidden-480"><?php echo $r['kategori']?></td>
												<td class="hidden-480"><?php echo $r['isi_laporan']?></td>
												<td class="hidden-480"><?php echo $r['status']?></td>
<td class="hidden-480"><?php echo $r['status']?>&nbsp;&nbsp;<a href="./controller/laporan/detailpenyidik.php?id=<?php echo $r['kdpenyidik']; ?>">Detail Penyidik</a></td>
						<td><a href="./controller/datalaporan/hapus.php?id=<?php echo $r['id_pengaduan'] ?>">Hapus</a></td>
											</tbody>
											<?php 
											endwhile;
										
											?>
											</table>
										</div>

									
								</div>


								<div class="hr hr32 hr-dotted"></div>

							
							</div><!-- /.col -->
							<div id="modal-form" class="modal" tabindex="-1">
							<form method="post" action="./controller/laporan/simpan.php" enctype="multipart/form-data">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Form Untuk Menambah  laporan</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													

													<div class="col-xs-12 col-sm-12">
														
														<div class="form-group">
															<label for="form-field-select-3">Tanggal</label>

															<div>
																<input type="text" id="tanggal" name="tanggal" placeholder="tanggal" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Nomor Ktp</label>

															<div>
																<select name="noktp" class=" chosen-select form-control">
																	<optgroup>
																		<option value=0 selected>- Pilih Ktp Pelapor -</option>
																		<?php
																			$tampil=mysqli_query($koneksi,"SELECT * FROM masyarakat ORDER BY nik");
																			  while($r=mysqli_fetch_array($tampil)){ ?>
																			  	<option value="<?php echo $r['nik'] ?>" ><?php echo $r['nik'] ?></option>
																		<?php } ?>
																	</optgroup>
																</select>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Isi Laporan</label>

															<div>
																<input type="text" id="isi_laporan" name="isi_laporan" placeholder="Isi Laporan" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Kasus</label>

															<div>
																<input type="text" id="kasus" name="kasus" placeholder="kasus" class="form-control"/>
															</div>
														</div>
														
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">LOkasi Kejadian</label>

															<div>
																<input type="text" id="lokasi_kejadian" name="lokasi_kejadian" placeholder="Lokasi Kejadian" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-select-3">Tanggal Kejadian</label>

															<div>
																<input type="text" id="tgl_kejadian" name="tgl_kejadian" placeholder="Tanggal Kejadian" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Jam Kejadian</label>

															<div>
																<input type="text" id="jam_kejadian" name="jam_kejadian" placeholder="jam Kejadian" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Kerugian Materi</label>

															<div>
																<input type="text" id="kerugian_materi" name="kerugian_materi" placeholder="Kerugian Materi" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Kerugian Benda</label>

															<div>
																<input type="text" id="kerugian_benda" name="kerugian_benda" placeholder="Kerugian Benda" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Kerugian Lainnya</label>

															<div>
																<input type="text" id="kerugian_lain" name="kerugian_lain" placeholder="Kerugian Lain" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>	
														<div class="form-group">
															<label for="form-field-select-3">Nominal Kerugian</label>

															<div>
																<input type="text" id="nominal_kerugian" name="nominal_kerugian" placeholder="Nominal Kerugian" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>	
														<div class="form-group">
															<label for="form-field-select-3">Ciri Ciri Pelaku</label>

															<div>
																<input type="text" id="ciri_ciri_pelaku" name="ciri_ciri_pelaku" placeholder="Ciri Ciri Pelaku" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>	
														<div class="form-group">
															<label for="form-field-select-3">Kronologis</label>

															<div>
																<input type="text" id="kronologis" name="kronologis" placeholder="kronologis" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>								
														<div class="form-group">
															<label for="form-field-select-3">Penyidik</label>

															<div>
																<select name="kdpenyidik" class=" chosen-select form-control">
																	<optgroup>
																		<option value=0 selected>- Pilih Penyidik -</option>
																		<?php
																			$tampil=mysqli_query($koneksi,"SELECT * FROM penyidik ORDER BY kdpenyidik");
																			  while($r=mysqli_fetch_array($tampil)){ ?>
																			  	<option value="<?php echo $r['kdpenyidik'] ?>" ><?php echo $r['kdpenyidik'] ?></option>
																		<?php } ?>
																	</optgroup>
																</select>
															</div>
														</div>
														<div class="space-4"></div>
													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal" type="submit">
													<i class="ace-icon fa fa-times"></i>
													Batal
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="ace-icon fa fa-check"></i>
													Simpan
												</button>
											</div>
										</div>
									</div>
									</form>
								</div><!-- PAGE CONTENT ENDS -->
								
								
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
