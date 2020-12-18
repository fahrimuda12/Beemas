<?php 
session_start();
include "../../include/koneksi.php";


$id=$_GET['id'];
$query=mysqli_query($koneksi,"SELECT * FROM pengaduan where id_pengaduan='$id'");
$data=mysqli_fetch_array($query);
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

			
				</ul>

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
							<li class="active">halaman pengolahan data pasal</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						


						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
						
							<form method="post" action="simpanedit.php" enctype="multipart/form-data">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Form Untuk edit data pasal</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													

													<div class="col-xs-12 col-sm-7">
													<input type="hidden" id="id" name="id" value="<?php echo $data['isi_laporan'] ?>" class="form-control"/>
														<div class="form-group">
															<label for="form-field-select-3">Keterangan pasal</label>

															<div>
																<input type="text" id="ket_pasal" name="ket_pasal" value="<?php echo $data['isi_laporan'] ?>" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">sanksi minimal</label>

															<div>
																<input type="text" id="sanksi_min" name="sanksi_min" value="<?php echo $data['sanksi_min'] ?>" class="form-control"/>
															</div>
														</div>

														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">sanksi maksimal</label>

															<div>
																<input type="text" id="sanksi_max" name="sanksi_max" value="<?php echo $data['sanksi_max'] ?>" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">denda minimal</label>

															<div>
																<input type="text" id="denda_min" name="denda_min" value="<?php echo $data['denda_min'] ?>" class="form-control"/>
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">denda maksimal</label>

															<div>
																<input type="text" id="denda_max" name="denda_max" value="<?php echo $data['denda_max'] ?>" class="form-control"/>
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
		
</html>