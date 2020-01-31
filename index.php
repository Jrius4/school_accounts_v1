<?php include_once 'includes/db.php';
session_start();
error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Friends academy katende</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- adminpro icon CSS
		============================================ -->
	<link rel="stylesheet" href="css/adminpro-custon-icon.css">
	<!-- meanmenu icon CSS
		============================================ -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- form CSS
		============================================ -->
	<link rel="stylesheet" href="css/form.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- modernizr JS
		============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="darklayout">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Header top area start-->
	<div class="wrapper-pro">
		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>WELCOME TO FRIENDS ACADEMY KATENDE</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li>Home<span class="bread-slash">/</span>
										</li>
										<li>Login</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->
		<!--            Mobile view start-->
		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 des-none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="breadcome-heading">
										<h2>FRIENDS ACADEMY KATENDE</h2>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span>
										</li>
										<li><span class="bread-blod">Login</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->
		<!--            mobile view end-->
		<!-- login Start-->
		<div class="login-form-area mg-t-30 mg-b-1000">
			<div class="form admin-panel-content animated bounce tab-pane fade in animated zoomInDown shadow-reset active">
				<div class="row">
					<div class="col-lg-2">

					</div>
					
					<div class="col-lg-4">
						<div class="login-bg">
							<div class="row">
								<div class="col-lg-12">
									<div class="logo">
										<a href="#"><img src="img/logo/log.png" alt="" />
                                                </a>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="login-title">
										<h1>Student/Parent</h1>
										
									    <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "roll=notexist") == true){
                    echo "<p style='color : red; font-size:20px;'>Invalid login details !</p>";
                }else if(strpos($fullUrl, "roll=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
									</div>
								</div>
							</div>
							<form method="post" action="includes/find_result.php" class="adminpro-form">
							<div class="row">
								<div class="col-lg-4">
									<div class="login-input-head">
										<p>Class.</p>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="login-input-area">
											<div class="chosen-select-single mg-b-20">
														<select name="classid" class=" form-control" required>
															<option value="">Select</option>
															<?php
															$sql="SELECT ClassName,id FROM tblclasses;";
															$result=mysqli_query($conn,$sql);
															while($row=mysqli_fetch_assoc($result)){
																?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['ClassName'] ?></option>
															<?php
															}
															?>
														</select>
													</div>
										</div>
								</div>
								
								<div class="col-lg-4">
									<div class="login-input-head">
										<p>Roll No.</p>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="login-input-area">
										<input type="text" autocomplete="off" name="rollno"/>
										<i class="fa fa-credit-card login-user" aria-hidden="true"></i>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="forgot-password">
												<a href="#"></a>
											</div>
										</div>
									</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="login-keep-me">
													<label class="checkbox">
                                                            <input type="checkbox" name="remember" ><i></i>Remember Me
                                                        </label>
												
												</div>
											</div>
										</div>
								</div>
								
								<div class="col-lg-4">

								</div>
								<div class="col-lg-8">
									<div class="login-button-pro">
										<button type="submit" name="Rsubmit" class="login-button login-button-lg">Search Result</button>
									</div>
								</div>
							</div>
							</form>
						</div>

					</div>

					
						<div class="col-lg-4">
							<div class="login-bg">
								<div class="row">
									<div class="col-lg-12">
										<div class="logo">
											<a href="#"><img src="img/logo/log.png" alt="" />
                                                </a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="login-title">
											<h1>Administration</h1>
											  <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "signin=invalidusername") == true){
                    echo "<p style='color : red; font-size:20px;'>Invalid login details !</p>";
                }else if(strpos($fullUrl, "signin=invalidpassword") == true){
                    echo "<p style='color : red; font-size:20px;'>Invalid Password !</p>";
                }else if(strpos($fullUrl, "signin=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
										</div>
									</div>
								</div>
								<form class="adminpro-form" method="POST" action="includes/getuser.php">
								<div class="row">
									<div class="col-lg-4">
										<div class="login-input-head">
											<p>UserName</p>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="login-input-area">
											<input type="text" name="username"/>
											<i class="fa fa-user login-user" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="login-input-head">
											<p>Password</p>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="login-input-area">
											<input type="password" name="userpassword"/>
											<i class="fa fa-lock login-user"></i>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="forgot-password">
													<a href="#">Forgot password?</a>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="login-keep-me">
													<label class="checkbox">
                                                            <input type="checkbox" name="remember" ><i></i>Keep me logged in
                                                        </label>
												
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">

									</div>
									<div class="col-lg-8">
										<div class="login-button-pro">
											<button name="adminsubmit" class="login-button login-button-lg">Log in</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="col-lg-2">
					</div>
				</div>
			</div>
		</div>
		<!-- login End-->
	</div>
	</div>
	<!-- Footer Start-->
		<div class="container-fluid" style="margin-top: 20px;">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-copy-right">
						<p>Copyright &#169; 2019 Ntechnology All rights reserved. Developed by <a href="https://Ntechnology.co.ug"><span style="color: aqua">Ntechnology</span></a>.</p>
					</div>
				</div>
			</div>
	<!-- Footer End-->
	<!-- jquery
		============================================ -->
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="js/bootstrap.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="js/jquery.meanmenu.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sticky JS
		============================================ -->
	<script src="js/jquery.sticky.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- form validate JS
		============================================ -->
	<script src="js/jquery.form.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/form-active.js"></script>
	<!-- main JS
		============================================ -->
	<script src="js/main.js"></script>
</body>

</html>