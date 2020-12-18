<?php 
session_start();
include "../../include/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Kriminal</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../../assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	
		<script src="../../assets/js/ace-extra.min.js"></script>

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="?view=beranda" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Kriminal
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
					

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php echo $_SESSION['username']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

							

								<li class="divider"></li>

								<li>
									<a href="./include/keluar.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>


				<ul class="nav nav-list">
					<li class="active">
						<a href="../../home?view=beranda">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=pelapor">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data pelapor </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=penyidik">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Penyidik </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=pasal">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data pasal </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=laporan">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> laporan </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=tindaklanjut">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Tindak Lanjut </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=timpemeriksa">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Tim Pemeriksa </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../home?view=temuanpelaku">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Temuan Pelaku </span>
						</a>
						<b class="arrow"></b>
					</li>

			
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
		
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
							<li class="active">halaman pengolahan data kapolsek</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						


						<div class="row">
							
							<div class="col-sm-3">
								<!-- PAGE CONTENT BEGINS -->
								
						
							<form method="post" action="simpan.php" enctype="multipart/form-data">
									
								
										<div class="widget-box widget-color-blue2">
											<div class="widget-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="widget-title lighter smaller">Form Untuk Menambah  Tim pelaku</h4>
											</div>

											<div class="widget-body">
												<div class="row">
													
													<div class="col-sm-12">
													<div class="form-group">
															<label for="form-field-select-3">Nomor Tindak Lanjut</label>

															<div>
																<select name="notlhp" class=" chosen-select form-control" onchange="changeValue(this.value)">
																	<optgroup>
																		<option value=0 selected>-  No Tindak Lanjut -</option>
																		<?php
																			$tampil=mysqli_query($koneksi,"select tb_tlhp.notlhp,tb_tlhp.jumlah_tim,tb_tlhp.tgl_tlhp,laporan.nolaporan,pelapor.nama from tb_tlhp join laporan ON tb_tlhp.nolaporan=laporan.nolaporan join pelapor ON laporan.noktp=pelapor.noktp order by notlhp");
																		$jsArray = "var prdName = new Array();\n";   
																			  while($r=mysqli_fetch_array($tampil)){
								echo '<option value="' . $r['notlhp'] . '">' . $r['notlhp'] . '</option>';    
    $jsArray .= "prdName['" . $r['notlhp'] . "'] = {tgl_tlhp:'" . addslashes($r['tgl_tlhp']) . "',nolaporan:'".addslashes($r['nolaporan'])."',nama:'".addslashes($r['nama'])."',jumlah_tim:'".addslashes($r['jumlah_tim'])."'};\n";    
}    

																		?>
																	</optgroup>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="form-field-select-3">tangal Tindak Lanjut</label>

															<div>
																<b><input type="text" id="tgl_tlhp" name="tgl_tlhp"  class="form-control"/></b>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Nomor Laporan</label>

															<div>
																<b><input type="text" id="nolaporan" name="nolaporan"  class="form-control"/></b>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">nama pelapor</label>

															<div>
																<b><input type="text" id="nama" name="nama"  class="form-control"/></b>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Jumlah tersangka</label>

															<div>
																<b><input type="text" id="jumlah_tim" name="jumlah_tim"  class="form-control"/></b>
															</div>
														</div>
													</div>
													

														<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue(id){  
document.getElementById('nolaporan').value = prdName[id].nolaporan;  
document.getElementById('tgl_tlhp').value = prdName[id].tgl_tlhp;  
document.getElementById('nama').value = prdName[id].nama;  
document.getElementById('jumlah_tim').value = prdName[id].jumlah_tim;  
};  
</script>

														
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
								
								
									
									</form>
									</div>
									<div class="col-sm-3">

									
										<div class="widget-box widget-color-blue2">
											<div class="widget-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="widget-title lighter smaller">Form Untuk Menambah  temuan pealku</h4>
											</div>

											<div class="widget-body">
											<div class="row">
											<div class="col-sm-12">
											<form method="POST" action="#">
														<div class="form-group">
														<label for="form-field-select-3">TambahKan pelaku</label>
														
														<div>
															 <a href="#"> <button type="button" class="btn btn-info" id="tambahtim"><span class="glyphicon glyphicon-user">Tambah pelaku </span></button></a>
															 </div>
														</div>
														<p id="tim">
															
														</p>
														<div class="modal-footer">
												

												<button class="btn btn-sm btn-primary" type="submit">
													<i class="ace-icon fa fa-check"></i>
													Simpan
												</button>
											</div>
														
                                   					</form>	
											</div>
</div>
										</div>
									</div>

								
						</div><!-- /.row -->
						<div class="col-sm-6">

									
										<div class="widget-box widget-color-blue2">
											<div class="widget-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="widget-title lighter smaller">Form Untuk Menambah  temuan pelaku</h4>
											</div>

											<div class="widget-body">
											<div class="row">
											<div class="col-sm-12">
														<div class="form-group">
														
														
														<div>
														<table id="dynamic-table" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	
																	<th>Nomor KTP</th>
																	<th>Nama</th>
																	<th>Alamat</th>
																</tr>
															</thead>

															 <?php 
$_SESSION['temp_var'] = null;

foreach ((array)@$_POST['noktpel'] as $row => $act) {
	//session_start();
	$noktpel=trim($_POST['noktpel'][$row]);
	$nama_pelaku=trim($_POST['nama_pelaku'][$row]);
	$alamat=trim($_POST['alamat'][$row]);
	$umur=trim($_POST['umur'][$row]);
	$status_pelaku=trim($_POST['status_pelaku'][$row]);
	$pasal_dilanggar=trim($_POST['pasal_dilanggar'][$row]);
	$hukuman=trim($_POST['hukuman'][$row]);
	$lama=trim($_POST['lama'][$row]);
	$denda=trim($_POST['denda'][$row]);

	$temp['noktpel']=$noktpel;
	$temp['nama_pelaku']=$nama_pelaku;
	$temp['alamat']=$alamat;
	$temp['umur']=$umur;
	$temp['status_pelaku']=$status_pelaku;
	$temp['pasal_dilanggar']=$pasal_dilanggar;
	$temp['hukuman']=$hukuman;
	$temp['lama']=$lama;
	$temp['denda']=$denda;

	$_SESSION['temp_var'][]=$temp; 
}
?>
	
															<tbody>
																	<?php 
																	foreach ((array)$_SESSION['temp_var'] as $value) {?>
																		<tr>
																		<td><?php echo $value['noktpel'] ?></td>
																		<td><?php echo $value['nama_pelaku'] ?></td>
																		<td><?php echo $value['alamat'] ?></td>
																		</tr>
																<?php	}
																	?>
															</tbody>
		</table>
														</div>
														 
													</div>
								</div>
									</div>


								
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

</script>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Kapolsek</span>
						2016
						</span>

					
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>

		<script src="../../assets/js/jquery.2.1.1.min.js"></script>
<script src="../../assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../../assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../../assets/js/bootstrap.min.js"></script>

	
		<script src="../../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../../assets/js/jquery.ui.touch-punch.min.js"></script>
	
		<script src="../../assets/js/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/jquery.flot.min.js"></script>
		<script src="../../assets/js/jquery.flot.pie.min.js"></script>
		<script src="../../assets/js/jquery.flot.resize.min.js"></script>

		<script src="../../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../../assets/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/js/dataTables.colVis.min.js"></script>
		<!-- ace scripts -->
			<script src="../../assets/js/jquery.knob.min.js"></script>
		<script src="../../assets/js/jquery.autosize.min.js"></script>
		<script src="../../assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="../../assets/js/jquery.maskedinput.min.js"></script>
		<script src="../../assets/js/bootstrap-tag.min.js"></script>

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
	
	   var count=0;
        $(function(){
            $('#tambahtim').click(function(){
                count += 1;
                $('#tim').append(
                	'<div class="form-group">'
                       +'<label for="nama">No KTP pelaku #' + count + '</label>' 
				+ '<input id="noktpel_' + count + '" name="noktpel[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">Nama #' + count + '</label>' 
				+ '<input id="nama_pelaku_' + count + '" name="nama_pelaku[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">alamat #' + count + '</label>' 
				+ '<input id="alamat_' + count + '" name="alamat[]' + '" type="text" class="form-control" />' 
				+'</div>'
				+'<div class="form-group">'
                       +'<label for="nama">umur #' + count + '</label>' 
				+ '<input id="umur_' + count + '" name="umur[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">status pelaku #' + count + '</label>' 
				+ '<input id="status_pelaku_' + count + '" name="status_pelaku[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">Pasal Dilanggar #' + count + '</label>' 
				+ '<select id="pasal_dilanggar_' + count + '" name="pasal_dilanggar[]'+'"  class="chosen-select form-control">'
				+ '<optiongroup>'
				+ '<option value="0">Pilih Pasal</option>'
				<?php
					$tampil=mysqli_query($koneksi,"SELECT * FROM pasal ORDER BY nopasal");
					while($r=mysqli_fetch_array($tampil)){ ?>
				+ '	<option value="<?php echo $r['nopasal'] ?>" ><?php echo $r['ket_pasal'] ?></option>'
				<?php } ?>
				+ '</optiongroup>' 
				+ '</select>'
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">hukuman #' + count + '</label>' 
				+ '<input id="hukuman_' + count + '" name="hukuman[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">Lama #' + count + '</label>' 
				+ '<input id="lama_' + count + '" name="lama[]' + '" type="text" class="form-control" />' 
				+'</div>'

				+'<div class="form-group">'
                       +'<label for="nama">Denda #' + count + '</label>' 
				+ '<input id="denda_' + count + '" name="denda[]' + '" type="text" class="form-control" />' 
				+'</div>'

				
				
                    );
            });
        });

</script>
		
</html>