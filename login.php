<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SuperheroAdmin - Bootstrap Admin Template</title>
	
	<!-- bootstrap -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />

	<!-- libraries -->
	<link href="css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
	<link rel="stylesheet" type="text/css" href="css/compiled/elements.css">
	<link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- this page specific styles -->

	<!-- google font libraries -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
		<link href="css/libs/font-awesome-ie7.css" type="text/css" rel="stylesheet" />
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49262924-1', 'phoonio.com');
	  ga('send', 'pageview');

	</script>
</head>
<body id="login-page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="login-box">
					<div class="row">
						<div class="col-xs-12 clearfix" id="login-box-header">
							<div class="login-box-header-red"></div>
							<div class="login-box-header-green"></div>
							<div class="login-box-header-yellow"></div>
							<div class="login-box-header-purple"></div>
							<div class="login-box-header-blue"></div>
							<div class="login-box-header-gray"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div id="login-box-inner">
								<!-- <img src="img/logo-login.png" alt="SuperheroAdmin" class="img-responsive" id="login-logo"/> -->
								<div id="login-logo">
									<img src="img/logo-login.png" alt=""/> 
									Ingresar
								</div>
								
								<form role="form" action="js/code/login_verification.php" method="POST">
									<div class="input-group input-group-lg">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="email" placeholder="Email address" name="email">
									</div>
									<div class="input-group input-group-lg">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" placeholder="Password" name="password">
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="check_box"> Remember me
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">


											
											<button type="button" class="btn btn-info col-xs-6" onclick=" location.href='registrar.php' ">Registrate</button>
											<button type="submit" class="btn btn-success col-xs-6 ">Ingresa</button>
										</div>
										
									</div>
									<div class="row">
									<br>

										<a href="#" id="login-forget-link" class="col-xs-12 ">
											Olvidaste tu contraseña?
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- global scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<!-- this page specific scripts -->

	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	
</body>

