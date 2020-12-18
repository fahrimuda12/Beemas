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
							<li class="active">halaman pengolahan data penyidik</li>
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

									<h3 class="header smaller lighter blue">Data Penyidik</h3>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
								</h4>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Kumpulan Data Penyidik
										</div>
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													
														
														<th>No</th>
														<th>Kode Penyidik</th>
														<th class="hidden-480">Nama</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Alamat
														</th>
														<th>Nomor Hp</th>
														<th>Jenis Kelamin</th>
														<th>Pangkat</th>
														<th class="hidden-480">Foto</th>

														<th>Aksi</th>
													
												</thead>
												<?php 
												include "././include/koneksi.php";
												$no=1;
													$tampil=mysqli_query($koneksi,"SELECT * FROM penyidik") or die(mysqli_error());
													
														while($r=mysqli_fetch_array($tampil)):
													
												 ?>
											<tbody>
												<td><?php echo $no++ ;?></td>
												<td><?php echo $r['kdpenyidik']?></td>
												<td><?php echo $r['nama']?></td>
												<td><?php echo $r['alamat']?></td>
												<td><?php echo $r['nohp']?></td>
												<td><?php echo $r['jenkel']?></td>
												<td><?php echo $r['pangkat']?></td>
												<td><img src="./controller/penyidik/foto/small_<?php echo $r['foto'] ?>"></td>
			<td>
			<a href="./controller/penyidik/edit?id=<?php echo $r['kdpenyidik'] ?>"  data-toggle="modal" >Edit</a> |||
												<a href="./controller/penyidik/hapus.php?id=<?php echo $r['kdpenyidik'] ?>">Hapus</a>
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
							<form method="post" action="./controller/penyidik/simpan.php" enctype="multipart/form-data">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Form Untuk Menambah data penyidik</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<input type="file" name="fupload" />
													</div>

													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">Kode Penyidik</label>

															<div>
																<input type="text" id="kdpenyidik" name="kdpenyidik" placeholder="kode penyidik" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Nama Penyidik</label>

															<div>
																<input type="text" id="nama" name="nama" placeholder="Nama Penyidik" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">alamat</label>

															<div>
																<input type="text" id="alamat" name="alamat" placeholder="alamat Penyidik" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">No Hp</label>

															<div>
																<input type="text" id="nohp" name="nohp" placeholder="Nomor HP Penyidik" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>


														<div class="form-group">
															<label for="form-field-select-3">Jenis Kelamin</label>

															<div>
																<input type="text" id="jenkel" name="jenkel" placeholder="jenis kelamin" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Pangkat</label>

															<div>
																<input type="text" id="pangkat" name="pangkat" placeholder="pangkat" class="form-control"/>
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