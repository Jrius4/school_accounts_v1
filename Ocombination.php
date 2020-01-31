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
	<!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
	<!-- mCustomScrollbar CSS
         ============================================ -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- normalize CSS
         ============================================ -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
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

		<?php include('adminnav.php'); ?>

		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>O-Level</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Subjects</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Assign subjects to students</span> </li>
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
						<div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>S.3 &amp;  <span class="basic-ds-n">S.4</span></h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
							 <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad">
							
						<div class="admin-pro-accordion-wrap mg-b-15">
 <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "combination=exists") == true){
                    echo "<p style='color : red; font-size:20px;'>Subject already assigned to class.</p>";
                }else if(strpos($fullUrl, "combination=success") == true){
                    echo "<p style='color : green; font-size:20px;'>Successfully added subject to  class</p>";
                }else if(strpos($fullUrl, "combination=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/updates34.php" method="post">
										
									<div id="form" class="panel-collapse panel-ic collapse in">
										<div class="form admin-panel-content animated bounce">
											<p>Student Name</p>
											<div class="">
												<div class="chosen-select-single mg-b-20">
													<select name="studentid" class="select2_demo_3 form-control">
														<option>Select</option>
															<?php
											 $sql1 = "SELECT tbls34.id,tbls34.FullName,tbls34.RollNo,tblclasses.ClassName FROM tbls34 join tblclasses on tblclasses.id=tbls34.ClassId WHERE tbls34.Subject1Id=0;";
                        $result1 = mysqli_query($conn,$sql1);
        
        $count1 = mysqli_num_rows($result1);
                        if($count1 >= 1){
							while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row1['id'] ?>"><?php echo $row1['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No. ".$row1['RollNo']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row1['ClassName']; ?></option>
														<?php
							}
                        }else{
                            
                        }
											?>
													</select>
												</div>
												 </div>
											<p>Subject One</p>
											<div class="chosen-select-single mg-b-20">
													<select name="subjectid1" class="select2_demo_3 form-control" required>
														<option value="">Select</option>
															<?php
											 $sql = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=0";
                        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
                        if($count >= 1){
							 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['SubjectName']; ?></option>
														<?php
							 }
                        }else{
                            echo "0 subjects added";  
                        }
											?>
													</select>
												</div>
											<p>Subject Two</p>
											<div class="chosen-select-single mg-b-20">
													<select name="subjectid2" class="select2_demo_3 form-control" required>
														<option value="">Select</option>
															<?php
											 $sql2 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=0";
                        $result2 = mysqli_query($conn,$sql2);
        $count2 = mysqli_num_rows($result2);
                        if($count2 >= 1){
							 while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row2['id'] ?>"><?php echo $row2['SubjectName']; ?></option>
														<?php
							 }
                        }else{
                            echo "0 subjects added";  
                        }
											?>
													</select>
												</div>
											<p>Subject Three</p>
											<div class="chosen-select-single mg-b-20">
													<select name="subjectid3" class="select2_demo_3 form-control" required>
														<option value="">Select</option>
															<?php
											 $sql3 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=0";
                        $result3 = mysqli_query($conn,$sql3);
        $count3 = mysqli_num_rows($result3);
                        if($count3 >= 1){
							 while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row3['id'] ?>"><?php echo $row3['SubjectName']; ?></option>
														<?php
							 }
                        }else{
                            echo "0 subjects added";  
                        }
											?>
													</select>
												</div>
											<p></p>
											<div class="">
												<div class="login-horizental login-btn-inner">
													<button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Set Combination</button>
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
						</div>
					</div>
					</div>
					<div class="col-lg-3">
						
						
						</div>
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
	<!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
	<!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
		<!-- main JS
         ============================================ -->
		<script src="js/main.js"></script>
</body>

</html>