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
				<li class="active">halaman pengolahan data pegawai</li>
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
						<h3 class="header smaller lighter blue">Data Pegawai</h3>
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right green"></i>
							<a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>
						</h4>
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Kumpulan Data Pegawai
						</div>
						<div>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
								<thead>						
									<th>No</th>
									<th>Id Petugas</th>
									<th class="hidden-480">Nama</th>
									<th>Username</th>
									<th class="hidden-480">Telp</th>
									<th class="hidden-480">Level</th>
									<th>Aksi</th>
								</thead>
									<?php 
										include "././include/koneksi.php";
										$no=1;
										$tampil=mysqli_query($koneksi,"SELECT * FROM petugas") or die(mysqli_error());
										while($r=mysqli_fetch_array($tampil)):			
									?>
									<tbody>
										<td><?php echo $no++ ;?></td>
										<td><?php echo $r['id_petugas']?></td>
										<td class="hidden-480"><?php echo $r['nama_petugas']?></td>
										<td><?php echo $r['username']?></td>
										<td class="hidden-480"><?php echo $r['telp']?></td>
										<td class="hidden-480"><?php echo $r['level']?></td>
												
										<td>
											<a href="./controller/pegawai/edit?id=<?php echo $r['id_petugas'] ?>"  data-toggle="modal" >Edit</a> |||
											<a href="./controller/pegawai/hapus.php?id=<?php echo $r['id_petugas'] ?>">Hapus</a>
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
				<!-- modal mulai -->
			<div id="modal-form" class="modal" tabindex="-1">
				<form method="post" action="./controller/pegawai/simpan.php" enctype="multipart/form-data">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">Form Untuk Menambah data pelapor</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-12 col-sm-5">
										<div class="space"></div>
										<input type="file" name="fupload" />
									</div>
									<div class="col-xs-12 col-sm-7">
										<div class="form-group">
											<label for="form-field-select-3">Kode Pegawai*</label>
											<div>
												<input type="text" id="kdpegawai" name="kdpegawai" placeholder="Kode Pegawai" class="form-control" required maxlength="25"/>
											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">
											<label for="form-field-select-3">Nama*</label>
											<div>
												<input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control"  required maxlength="50"/>
											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">
											<label for="form-field-select-3">Username*</label>
											<div>
												<input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control"  required maxlength="32"/>
											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">
											<label for="form-field-select-3">Password*</label>
											<div>
												<input type="password" id="password" name="password" placeholder="Masukkan Password" class="form-password" style="width:321.33px;"  required maxlength="32"/>
												<input type="checkbox" class="form-checkbox" /> Tunjukkan password
											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">
											<label for="form-field-select-3">Nomor Hp</label>
											<div>
												<input type="text" id="nohp" name="nohp" placeholder="Nomor Hp" class="form-control" maxlength="12"/>
											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">
											<label for="form-field-select-3">Level*</label>
											<div>
												<select  class="form-control" id="level" name="level">
													<option value="admin">Admin</option>
													<option value="petugas">Petugas</option>
												</select>
											</div>
										</div>
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