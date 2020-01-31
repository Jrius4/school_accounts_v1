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
        data:'classid1='+val,
        success: function(data){
            $("#subject").html(data);
            
        }
        });
}
    </script>
	 <script>
function getPaper(value) {
    $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'subjectid='+value,
    success: function(data){
        $("#papers").html(data);
        
    }
    });
	 $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'subjectid1='+value,
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
										<h2>Third Term</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">End of Term</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">
 <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "marks=alreadyexist") == true){
                    echo "<p style='color : red; font-size:20px;'>This students marks already exist, go to Manage marks to edit</p>";
                }else if(strpos($fullUrl, "marks=ttpernotset") == true){
                    echo "<p style='color : red; font-size:20px;'>Paper Percentage for this subject is not set. Go to Paper Percentage to set.</p>";
                }else if(strpos($fullUrl, "marks=success") == true){
                    echo "<p style='color : green; font-size:20px;'>Successfully entered students marks</p>";
                }else if(strpos($fullUrl, "marks=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/teacher3eot.php" method="post">
										
										<div id="form" class="panel-collapse panel-ic collapse in">
											<div class="form admin-panel-content animated bounce">
													<?php
												$ses=$_SESSION['teachername'];
										$sql = "SELECT id from tblteachers where UserName='$ses';";
										$result = mysqli_query($conn,$sql);
										$row = mysqli_fetch_assoc($result);
												$id=$row['id'];
												$_SESSION['tid']=$row['id'];
										?>
												<p>Class</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="classids" id="classid" class="clid form-control" onChange="getStudent(this.value);" required>
															<option>Select</option>
														<?php
															$sql2="SELECT tblclasses.ClassName,tblclasses.id FROM teacherclasscombination join tblclasses on tblclasses.id=teacherclasscombination.ClassId WHERE teacherclasscombination.TeacherId=$id AND Status=1;";
												$result2 = mysqli_query($conn,$sql2);
										while($row2 = mysqli_fetch_assoc($result2)){
															?>
															<option value="<?php echo $row2['id'] ?>"><?php echo $row2['ClassName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Subject</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="subjectid" id="subject" class="form-control" required onChange="getPaper(this.value);">
														
														</select>
													</div>
												</div>
												<p>Student</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														  <select name="studentid" class="form-control stid" id="studentid" required onChange="getresult(this.value);">
                                                    </select>
													</div>
												</div>
												
												<p>Papers</p>
												<div id="papers" class="">
													
												</div>
												<p></p>
												<div class="">
													<div class="login-horizental login-btn-inner">
														<button class="btn btn-sm btn-primary login-submit-cs" name="submit" type="submit">Add Marks</button>
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

	 <!-- Footer Start-->
  <div class="container-fluid" style="margin-top: 20px;">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-copy-right">
						<p style="margin-left: 200px;"><a href="https://Ntechnology.co.ug">Copyright &#169; 2019 Ntechnology All rights reserved. Developed by <span style="color: aqua">Ntechnology</span></a>.</p>
					</div>
				</div>
			</div>
    <!-- Footer End-->
	
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