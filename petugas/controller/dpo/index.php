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
							<li class="active">halaman pengolahan data DPO</li>
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

									<h3 class="header smaller lighter blue">Data DPO</h3>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
								</h4>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Kumpulan Data DPO
										</div>
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													
														
														<th>No</th>
														<th>Nama</th>
														

														<th>Foto</th>
												
														<th>Detail</th>

														<th>Aksi</th>
													
												</thead>
												<?php 
												include "././include/koneksi.php";
												$no=1;
													$tampil=mysqli_query($koneksi,"SELECT * FROM dpo") or die(mysqli_error());
													
														while($r=mysqli_fetch_array($tampil)):
													
												 ?>
											<tbody>
												<td><?php echo $no++ ;?></td>
												<td><?php echo $r['nama']?></td>
													
												<td><img src="./controller/dpo/foto/small_<?php echo $r['foto'] ?>"></td>
												<td>	<a href="./controller/detail/edit?id=<?php echo $r['id'] ?>"  data-toggle="modal" >Detail</a></td>
												
											<td>
		
												<a href="./controller/dpo/hapus.php?id=<?php echo $r['id'] ?>">Hapus</a>
												</td>
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
							<form method="post" action="./controller/dpo/simpan.php" enctype="multipart/form-data">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Form Untuk Menambah data DPO</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<input type="file" name="fupload" />
													</div>

													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">nama</label>

															<div>
																<input type="text"  name="nama"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Tempat Lahir</label>

															<div>
																<input type="text" name="tempatlahir" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">tgl</label>

															<div>
																<input type="text"  name="tgl"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Umur</label>

															<div>
																<input type="text" name="umur" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>


														<div class="form-group">
															<label for="form-field-select-3">Jenis Kelamin</label>

															<div>
																<input type="text" name="jk" placeholder="jenis kelamin" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Kewarganegaraan</label>

															<div>
																<input type="text"  name="wni"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Pendidikan Terkahir</label>

															<div>
																<input type="text"  name="pterakhir"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">alamat</label>

															<div>
																<input type="text"  name="alamat"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Pernah Terkait Kasus</label>

															<div>
																<input type="text"  name="pernahterkaitkasus"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Ciri Ciri</label>

															<div>
																<input type="text"  name="ciriciri"  class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Pasal Yang Dilanggar</label>

															<div>
																<select name="pasaldilanggar" class=" chosen-select form-control">
																	<optgroup>
																		<option value=0 selected>- Pilih Pasal Yang Dilanggar -</option>
																		<?php
																			$tampil=mysqli_query($koneksi,"SELECT * FROM pasal ORDER BY nopasal");
																			  while($r=mysqli_fetch_array($tampil)){ ?>
																			  	<option value="<?php echo $r['nopasal'] ?>" ><?php echo $r['nopasal'] ?></option>
																		<?php } ?>
																	</optgroup>
																</select>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Keterangan Polisi</label>

															<div>
																<textarea name="keteranganpolisi"></textarea>
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
<script type="text/javascript">
	$(document).ready(function(){
		$(".open_modal").click(function(e){
			var m = $(this).attr("id");
			$.ajax({
				url:"./controller/penyidik/edit.php",
				type:"GET",
				data:{id:m,},
				success:function(ajaxData){
					$("#modal-edit").html(ajaxData);
					$("#modal-edit").modal('show',{backdrop:'true'});
				}
			});
		});
	});
</script>