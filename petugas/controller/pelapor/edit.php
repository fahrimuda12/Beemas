<?php 
session_start();
include "../../include/koneksi.php";
include "fungsi_thumb.php";

$acak=rand(1,99);

$id=$_GET['id'];
$query=mysqli_query($koneksi,"SELECT * FROM masyarakat where nik='$id'");
$data=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>BeeMas</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../assets/font-awesome/4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../../../assets/css/flaticon.css">

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
							<i class="flaticon-bee mr-"></i>
							BeeMas
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../../assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php echo $_SESSION['nama']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li class="divider"></li>
								<li>
									<a href="../../include/keluar.php">
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
						<a href="../../?view=beranda">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../?view=pelapor">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data pelapor </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../?view=pegawai">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Laporan </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../?view=data laporan">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data pasal </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../?view=laporan">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Laporan </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="../../?view=tanggapan">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Tanggapan </span>
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
							<li class="active">halaman pengolahan data kapolsek</li>
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
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<h4 class="blue bigger">Form Untuk edit data pelapor</h4>
											</div>
											<input type="hidden" id="id" name="id" value="<?php echo $data['nolaporan'] ?>">
											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-12">
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">NIK</label>
															<div>
																<input type="text" id="nik" name="nik" readonly placeholder="id" class="form-control"  value="<?php echo $data['nik'] ?>" />
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Nama</label>
															<div>
																<input type="text" id="nama" name="nama" placeholder="Silahkan Input Nama" class="form-control"  required value="<?php echo $data['nama'] ?>" />
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Username</label>
															<div>
																<input type="text" id="username" name="username" readonly class="form-control"  value="<?php echo $data['username'] ?>" />
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">Password</label>
															<div>
																<input type="password" id="password" name="password" placeholder="Silahkan Input Password" required class="form-control"  value="<?php echo $data['password'] ?>" />
															</div>
														</div>
														<div class="space-4"></div>
														<div class="form-group">
															<label for="form-field-select-3">No Hp</label>
															<div>
																<input type="text" id="hp" name="hp" required placeholder="Silahkan Input Nomor HP" value="<?php echo $data['telp'] ?>" class="form-control"/>
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
													Ubah
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
							<span class="blue bolder">Admin Buat</span>
						2020
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