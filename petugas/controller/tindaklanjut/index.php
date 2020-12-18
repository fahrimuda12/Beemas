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
							<li class="active">halaman Tindak Lanjut Hasil Pemeriksaan</li>
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

									<h3 class="header smaller lighter blue">Data Tindak Lanjut Hasil Pemeriksaan</h3>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
								</h4>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Kumpulan Data Tindak Lanjut Hasil Pemerriksaan
										</div>
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													
														
														<th>No</th>
														<th>No Tindak Lanjut</th>
														<th class="hidden-480">Tanggal Tindak Lanjut</th>

														<th>No Laporan</th>
														<th class="hidden-480">Jumlah Tim</th>
													
														<th>Hasil Pemeriksaan</th>
												
														<th>Hasil Sitaan</th>
														
													
														<th>Aksi</th>
													
												</thead>
												<?php 
												include "././include/koneksi.php";
												$no=1;
													$tampil=mysqli_query($koneksi,"SELECT * FROM tb_tlhp") or die(mysqli_error());
													
														while($r=mysqli_fetch_array($tampil)):
													
												 ?>
											<tbody>
												
											
										
											
												<td><?php echo $no++; ?></td>
												<td><?php echo $r['notlhp']?></td>
												<td><?php echo $r['tgl_tlhp']?></td>
												<td><?php echo $r['nolaporan']?>&nbsp;&nbsp;<a href="./controller/tindaklanjut/detaillaporan.php?id=<?php echo $r['nolaporan']; ?>">Lihat Detail Pelapor</a></td>
												<td><?php echo $r['jumlah_tim']?></td>
												<td><?php echo $r['catatan_pemeriksaan']?></td>
												<td><?php echo $r['hasil_sitaan']?></td>
												<td><a href="./controller/tindaklanjut/edit?id=<?php echo $r['notlhp'] ?>"  data-toggle="modal" >Edit</a> |||
												<a href="./controller/tindaklanjut/hapus.php?id=<?php echo $r['notlhp'] ?>">Hapus</a></td>
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
							<form method="post" action="./controller/tindaklanjut/simpan.php" enctype="multipart/form-data">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Form Untuk Menambah  Tindak Lanjut Hasil Pemeriksaan</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													

													<div class="col-xs-12 col-sm-12">
														<div class="form-group">
															<label for="form-field-select-3">Nomor Tindak Lanjut</label>

															<div>
																<input type="text" id="notlhp" name="notlhp" placeholder="Nomor tindak lanjut" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Tanggal</label>

															<div>
																<input type="text" id="tgl_tlhp" name="tgl_tlhp" placeholder="Tanggal Tindak Lanjut" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Nomor Laporan</label>

															<div>
																<select name="nolaporan" class=" chosen-select form-control">
																	<optgroup>
																		<option value=0 selected>- Pilih No Laporan -</option>
																		<?php
																			$tampil=mysqli_query($koneksi,"SELECT * FROM laporan ORDER BY nolaporan");
																			  while($r=mysqli_fetch_array($tampil)){ ?>
																			  	<option value="<?php echo $r['nolaporan'] ?>" ><?php echo $r['nolaporan'] ?></option>
																		<?php } ?>
																	</optgroup>
																</select>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Jumlah Tim</label>

															<div>
																<input type="text" id="jumlah_tim" name="jumlah_tim" placeholder="jumlah_tim" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">catatan pemeriksaan</label>

															<div>
																<input type="text" id="catatan_pemeriksaan" name="catatan_pemeriksaan" placeholder="kasus" class="form-control"/>
															</div>
														</div>
														
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Hasil Sitaan</label>

															<div>
																<input type="text" id="hasil_sitaan" name="hasil_sitaan" placeholder="hasil_sitaan" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>

														
																			
													
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
