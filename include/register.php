<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeMas</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/register2.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form"  action="../config/cek_daftar.php">
                <h2>Form Pendaftaran</h2>
                <div class="form-group-1">
                    <input type="number" name="nik" id="nik" placeholder="NIK" required min="0"/>
                    <input type="text" name="nama" id="nama" placeholder="Nama" required />
                    <input type="text" name="username" id="username" placeholder="Username" required />
                    <input type="password" name="password" id="password" placeholder="Password" class="form-password" required />
                    <input type="checkbox" name="form-checkbox" id="form-checkbox" class="form-checkbox" />
                    <label for="form-checkbox" class="label-form-checkbox"><span><span></span></span>Lihat Password </label>
                    <input type="number" name="hp" id="hp" placeholder="Nomor Hp" required />
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Daftar Sekarang" />
                    <a   href="../" class="submit"></a>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/vendor/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){		
				$('.form-checkbox').click(function(){
					if($(this).is(':checked')){
						$('.form-password').attr('type','text');
					}else{
						$('.form-password').attr('type','password');
					}
				});
			});
    </script>
</body>
</html>