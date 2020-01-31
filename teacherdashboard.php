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
	<!-- animate CSS
         ============================================ -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- mCustomScrollbar CSS
         ============================================ -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- normalize CSS
         ============================================ -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- accordions CSS
         ============================================ -->
	<link rel="stylesheet" href="css/accordions.css">
	<!-- tabs CSS
		============================================ -->
	<link rel="stylesheet" href="css/tabs.css">
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

		<?php include('teachernav.php'); ?>

		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>Dashboard</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">dashboard</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<!-- system analysis	 Start -->
		<div class="income-order-visit-user-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
					<a href="showadminstudents.php">
						<div class="income-dashone-total shadow-reset nt-mg-b-30">
							<div class="income-title">
								<div class="main-income-head">
									<h2>Users</h2>
									<div class="main-income-phara">
										<p>View</p>
									</div>
								</div>
							</div>
							<div class="income-dashone-pro">
								<div class="income-rate-total">
									<div class="price-adminpro-rate">
										<h3><span class="counter">
											<?php
											 $sql1 = "SELECT id FROM tblstudents";
                        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $count1 = mysqli_num_rows($result1);
                        if($count1 >= 1){
                        echo $count1;
                        }else{
                            echo "0";  
                        }
											?>
											</span></h3>
									</div>
									<div class="price-graph">
										<span id="sparkline1"></span>
									</div>
								</div>
								<div class="income-range">
									<p>Registered Students</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						</a>	
					</div>
					<div class="col-lg-3">
						<a href="managesubjects.php">
						<div class="income-dashone-total shadow-reset nt-mg-b-30">
							<div class="income-title">
								<div class="main-income-head">
									<h2>Subjects</h2>
									<div class="main-income-phara order-cl">
										<p>View</p>
									</div>
								</div>
							</div>
							<div class="income-dashone-pro">
								<div class="income-rate-total">
									<div class="price-adminpro-rate">
										<h3><span class="counter">
											<?php
											 $sql1 = "SELECT id FROM tblsubjects WHERE Level='A-Level';";
                        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $count1 = mysqli_num_rows($result1);
                        if($count1 >= 1){
                        echo $count1;
                        }else{
                            echo "0";  
                        }
											?>
											</span></h3>
									</div>
									<div class="price-graph">
										<span id="sparkline6"></span>
									</div>
								</div>
								<div class="income-range order-cl">
									<p>A-Level Subjects</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
							</a>
					</div>
					<div class="col-lg-3">
						<a href="managesubjects.php">
						<div class="income-dashone-total shadow-reset nt-mg-b-30">
							<div class="income-title">
								<div class="main-income-head">
									<h2>Subjects</h2>
									<div class="main-income-phara low-value-cl">
										<p>View</p>
									</div>
								</div>
							</div>
							<div class="income-dashone-pro">
								<div class="income-rate-total">
									<div class="price-adminpro-rate">
										<h3><span class="counter">
											<?php
											 $sql1 = "SELECT id FROM tblsubjects WHERE Level='O-Level';";
                        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $count1 = mysqli_num_rows($result1);
                        if($count1 >= 1){
                        echo $count1;
                        }else{
                            echo "0";  
                        }
											?>
											</span></h3>
									</div>
									<div class="price-graph">
										<span id="sparkline5"></span>
									</div>
								</div>
								<div class="income-range low-value-cl">
									<p>O-Level Subjects</p></span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3">
						<a href="manageclasses.php">
						<div class="income-dashone-total shadow-reset nt-mg-b-30">
							<div class="income-title">
								<div class="main-income-head">
									<h2>Classes</h2>
									<div class="main-income-phara visitor-cl">
										<p>View</p>
									</div>
								</div>
							</div>
							<div class="income-dashone-pro">
								<div class="income-rate-total">
									<div class="price-adminpro-rate">
										<h3><span class="counter">
											<?php
											 $sql1 = "SELECT id FROM tblclasses";
                        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $count1 = mysqli_num_rows($result1);
                        if($count1 >= 1){
                        echo $count1;
                        }else{
                            echo "0";  
                        }
											?>
											</span></h3>
									</div>
									<div class="price-graph">
										<span id="sparkline2"></span>
									</div>
								</div>
								<div class="income-range visitor-cl">
									<p>Total Created</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- system analysis end -->
	
		<!-- wrapper-pro End-->
	</div>



	<!-- jquery
         ============================================ -->
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<!-- bootstrap JS
         ============================================ -->
	<script src="js/bootstrap.min.js"></script>
	<!-- meanmenu JS
         ============================================ -->
	<script src="js/jquery.meanmenu.js"></script>
	<!-- sticky JS
         ============================================ -->
	<script src="js/jquery.sticky.js"></script>
	<!-- mCustomScrollbar JS
         ============================================ -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- scrollUp JS
         ============================================ -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- main JS
         ============================================ -->
	<script src="js/main.js"></script>
</body>

</html>