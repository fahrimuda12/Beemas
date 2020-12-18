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
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<h3 class="header smaller lighter blue">Laporan</h3>
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Kumpulan Data Laporan
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th>No</th>
									<th>Id Pengaduan</th>
									<th><i></i>Tanggal</th>
									<th>kategori</th>
									<th>NIK</th>
									<th>Isi Pengaduan</th>
									<th>Foto</th>
									<th>Status</th>
									<th>Aksi</th>
								</thead>
								<?php 
									include "././include/koneksi.php";
									$no=1;
									$tampil=mysqli_query($koneksi,"SELECT * FROM pengaduan  WHERE status !='0' ORDER BY id_pengaduan  DESC") or die(mysqli_error());
									while($r=mysqli_fetch_array($tampil)):
								?>
								<tbody>
									<td><?php echo $no++ ;?></td>
									<td><?php echo $r['id_pengaduan']?></td>
									<td><?php echo $r['tgl_pengaduan']?></td>
									<td><?php echo $r['kategori']?></td>
									<td><?php echo $r['nik']?></td>
									<td><?php echo $r['isi_laporan']?></td>
									<td><?php echo $r['foto']?></td>
									<td><?php echo $r['status']?></td>		
									<td>
										<a href="./controller/laporan/edit?id=<?php echo $r['id_pengaduan'] ?>"  data-toggle="modal" >Tanggapi</a> |||
										<a href="./controller/laporan/selesai.php?id=<?php echo $r['id_pengaduan'] ?>"  data-toggle="modal" >Selesai</a> |||
										<a href="controller/pasal/hapus.php?id=<?php echo $r['id_pengaduan'] ?>">Hapus</a>
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
					<form method="post" action="./controller/pasal/simpan.php" enctype="multipart/form-data">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="blue bigger">Form Untuk Menambah data pasal</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label for="form-field-select-3">No Pasal</label>
												<div>
													<input type="text" id="nopasal" name="nopasal" placeholder="nomor pasal" class="form-control"/>
												</div>
											</div>
											<div class="space-4"></div>
											<div class="form-group">
												<label for="form-field-select-3">Keterangan pasang</label>
												<div>
													<input type="text" id="ket_pasal" name="ket_pasal" placeholder="Keterangan pasal" class="form-control"/>
												</div>
											</div>
											<div class="space-4"></div>
											<div class="form-group">
												<label for="form-field-select-3">sanksi minimal</label>
												<div>
													<input type="text" id="sanksi_min" name="sanksi_min" placeholder="sanksi minimal" class="form-control"/>
												</div>
											</div>
											<div class="space-4"></div>
											<div class="form-group">
												<label for="form-field-select-3">sanksi maksimal</label>
												<div>
													<input type="text" id="sanksi_max" name="sanksi_max" placeholder="sanski maksimal" class="form-control"/>
												</div>
											</div>
											<div class="space-4"></div>
											<div class="form-group">
												<label for="form-field-select-3">denda minimal</label>
												<div>
													<input type="text" id="denda_min" name="denda_min" placeholder="denda minimal" class="form-control"/>
												</div>
											</div>
											<div class="space-4"></div>
											<div class="form-group">
												<label for="form-field-select-3">denda maksimal</label>
												<div>
													<input type="text" id="denda_max" name="denda_max" placeholder="denda maksimal" class="form-control"/>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm" data-dismiss="modal" type="submit">
										<i class="ace-icon fa fa-times"></i>Batal
									</button>
									<button class="btn btn-sm btn-primary">
										<i class="ace-icon fa fa-check"></i>Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
				</div><!-- PAGE CONTENT ENDS -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div><!-- /.main-inner -->
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