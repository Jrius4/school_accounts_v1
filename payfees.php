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
	<script>
		function getStudent(val) {
    $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'classid='+val,
    success: function(data){
        $("#studentid").html(data);
        
    }
    });
}
    </script>
</head>

<body class="darklayout">
	<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
	<!-- Header top area start-->
	<div class="wrapper-pro">

		<?php include('neutralnav.php'); ?>

		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>Fees</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Payments</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Pay Fees</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

			<!-- accordion start-->
		<div class="adminpro-accordion-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12"> </div>
				</div>
				<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">

							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/payfees.php" method="post" >
										<div id="form" class="panel-collapse panel-ic collapse in">
											<div class="form admin-panel-content animated bounce">
												<p>Class</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="classid" class=" form-control cid" required id="classid" onChange="getStudent(this.value);">
															<option value="">Select</option>
															<?php
															$sql2="SELECT id,ClassName FROM tblclasses;";
												$result2 = mysqli_query($conn,$sql2);
										while($row2 = mysqli_fetch_assoc($result2)){
															?>
															<option value="<?php echo $row2['id'] ?>"><?php echo $row2['ClassName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Student</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="studentid" id="studentid" class=" form-control stid" required>
															
														</select>
													</div>
													<p>Term</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="term" class=" form-control" required>
															<option value="">Select</option>
															<option value="1">Term 1</option>
															<option value="2">Term 2</option>
															<option value="3">Term 3</option>
														</select>
													</div>
												</div>
												<p>Fees Paid</p>
												<div class="">
													<input type="text" name="fees" class="form-control" required="required">
												</div>
													
												<p></p>
												<div class="">
													<div class="login-horizental login-btn-inner">
														<button class="btn btn-sm btn-primary login-submit-cs" name="submit" type="submit">Pay Fees</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<div class="panel panel-default">

										<div id="collapse2" class="panel-collapse panel-ic collapse">
											<div class="panel-body admin-panel-content animated bounce">

											</div>
										</div>
									</div>
									<div class="panel panel-default">

										<div id="collapse3" class="panel-collapse panel-ic collapse">
											<div class="panel-body admin-panel-content animated bounce">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">

						</div>
				</div>
			</div>
			<!-- accordion End-->

		
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