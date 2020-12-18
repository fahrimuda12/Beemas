<!DOCTYPE html>
<html lang="en">
  <head>
    <title class="flaticon-bee mr-1">BeeMas</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico" />
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/aos.css">

    <link rel="stylesheet" href="../assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    <link rel="stylesheet" href="../assets/css/modul.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/util.css">
	
  </head>
  <body>
    <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-3 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html"><span class="flaticon-bee mr-1"></span>BeeMass</a>
    			</div>
	    		<div class="col-lg-9 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text d-flex align-items-center">
						    	<span>profesorrob01@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text d-flex align-items-center">
						    	<span>Hubungi: + 62 6578 98</span>
						    </div>
					    </div>
					    <div class="col-xl topper d-flex align-items-center align-items-stretch py-md-4">
					    	<p class="mb-0 d-flex d-block">
					    		<a href="#join_form" class="btn btn-primary d-flex align-items-center justify-content-center" id="join_pop">
								<img class="nav-user-photo" src="../assets/images/avatars/avatar2.png" alt="Jason's Photo" />
					    			<span><?php echo $_SESSION['nama']; ?></span>
					    		</a>
					    	</p>
						</div>
						<div class="col-md-1 d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center">
								<a href="include/logout.php"><span class="icon-sign-out"></span></a>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<!-- popup form #2 -->
	<form method="post" action="config/cek_daftar.php" name="form1">     
		 <a href="#x" class="overlay" id="join_form"></a>
            <div class="popup">
				<div class="wrap-login100 col-l-55 p-r-55 p-t-65 p-b-54">
						<span class="login100-form-title p-b-49">
						Login
						</span>
						<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
							<span class="label-input100">Username</span>
								<input class="input100" type="text" name="username" placeholder="Type your username">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<span class="label-input100">Password</span>
								<input class="input100" type="password" name="pass" placeholder="Type your password">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>
						<div class="text-right p-t-8 p-b-31">
							<a href="#">
							Forgot password?
							</a>
						</div>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									Login
								</button>
							</div>
						</div>
						<div class="txt1 text-center p-t-54 p-b-20">
							<span>
							Or Sign Up Using
							</span>
						</div>
					<a class="close" href="#close"></a>
				</div>
            </div>
	</form>
	

	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
		  
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="?view=index" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="?view=lapor" class="nav-link">Lapor</a></li>
	        	<li class="nav-item"><a href="?view=status" class="nav-link">Status</a></li>
	        	<li class="nav-item"><a href="?view=info" class="nav-link">Info</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->