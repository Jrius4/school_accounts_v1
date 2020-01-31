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
function getStream56(val) {
    $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'stream='+val,
    success: function(data){
        $("#streamid").html(data);
        
    }
    });
}
    </script>
	<script>
function getStream45(val) {
    $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'stream45='+val,
    success: function(data){
        $("#streamid45").html(data);
        
    }
    });
}
    </script>
	<script>
function getStream21(val) {
    $.ajax({
    type: "POST",
    url: "get_student.php",
    data:'stream21='+val,
    success: function(data){
        $("#streamid21").html(data);
        
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
										<h2>Add Student</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Student</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">add students</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<!--		start of tab-->
		<div class="admintab-wrap mg-b-40">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
			<ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
				<li class="active"><a data-toggle="tab" href="#Alevel"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>S.5 &amp; S.6</a>
				</li>
				<li><a data-toggle="tab" href="#Tabs4s3"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>S.4 &amp; S.3</a>
				</li>
				<li><a data-toggle="tab" href="#Tabs2s1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>S.2 &amp; S.1</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="Alevel" class="tab-pane in active animated custon-tab-style1">
					<!--										start of a level data-->
				<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">
			<?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "add=success") == true){
                    echo "<p style='color : green; font-size:20px;'>Successfully registered student</p>";
                }else if(strpos($fullUrl, "add=fileError2") == true){
                    echo "<p style='color : red; font-size:20px;'>Failed to upload admission form, try again.</p>";
                }else if(strpos($fullUrl, "add=fileError1") == true){
                    echo "<p style='color : red; font-size:20px;'>Failed to upload medical form, try again.</p>";
                }else if(strpos($fullUrl, "add=fileError") == true){
                    echo "<p style='color : red; font-size:20px;'>Failed to upload profile picture, try again.</p>";
                }else if(strpos($fullUrl, "add=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/addAlevel.php" method="post" enctype="multipart/form-data">
										
										<div id="form" class="panel-collapse panel-ic collapse in">
											<div class="form admin-panel-content animated bounce">
												<p>Full Names</p>
												<div class="">
													<input type="text" name="fullname" class="form-control" required="required">
												</div>
												<p>Roll Number</p>
												<div class="">
													<?php
													global $value2;
													$q ="SELECT id from tblstudents;";
													 $resultq = mysqli_query($conn,$q);
        $countq = mysqli_num_rows($resultq);
			if($countq >= 0){
        $value2 = $countq + 1;
        $value2 = "A" . sprintf('%06s', $value2);
        $value = $value2;
			}
													?>
													<input type="text" value="<?php echo $value ?>" class="form-control" disabled> 
													<input type="hidden"  name="rollno" value="<?php echo $value ?>" class="form-control"> 
												</div>
												<p>Class</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="classid" class=" form-control" required onChange="getStream56(this.value);">
															<option value="">Select</option>
															<?php
										$sql = "SELECT id,ClassName from tblclasses where Level='A-Level';";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
										?>
															<option value="<?php echo $row['id'] ?>"><?php echo $row['ClassName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Stream</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="streamid" id="streamid" class=" form-control" required>
														</select>
													</div>
												</div>
												<p>Combination</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="combinationid" class=" form-control" required>
															<option value="">Select</option>
															<?php
										$sql = "SELECT id,CombName from tblacombination;";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
										?>
															<option value="<?php echo $row['id'] ?>"><?php echo $row['CombName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Gender</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="gender" class=" form-control" required>
															<option value="">Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
												<p>Fees to be paid</p>
												<div class="">
													<input type="text" name="fees" class="form-control" required="required">
													<span class="help-block">Eg- 500000,1000000 etc</span>
												</div>
												<p>Image</p>
												<div class="">
													<input type="file" name="profilepic" class="form-control" required="required" id="success"> </div>
												<p>Medical form</p>
												<div class="">
													<input type="file" name="medicalform" class="form-control" required="required" id="success"> </div>
												<p>Admission form</p>
												<div class="">
													<input type="file" name="admissionform" class="form-control" required="required" id="success"> </div>
												<p></p>
												<div class="">
													<div class="login-horizental login-btn-inner">
														<button class="btn btn-sm btn-primary login-submit-cs" name="s56submit" type="submit">Add Student</button>
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
					<!--										end of a level data-->
				</div>
				<div id="Tabs4s3" class="tab-pane animated custon-tab-style1">
					<!--										start of s.4 n s.3 data-->

					<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">

							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/adds34.php" method="post" enctype="multipart/form-data">
										
										<div id="form" class="panel-collapse panel-ic collapse in">
											<div class="form admin-panel-content animated bounce">
												<p>Full Names</p>
												<div class="">
													<input type="text" name="fullname" class="form-control" required="required">
												</div>
												<p>Roll Number</p>
												<div class="">
													<?php
													global $value2;
													$q ="SELECT id from tblstudents;";
													 $resultq = mysqli_query($conn,$q);
        $countq = mysqli_num_rows($resultq);
			if($countq >= 0){
        $value2 = $countq + 1;
        $value2 = "O" . sprintf('%06s', $value2);
        $value = $value2;
			}
													?>
													<input type="text" value="<?php echo $value ?>" class="form-control" disabled> 
													<input type="hidden"  name="rollno" value="<?php echo $value ?>" class="form-control"> 
												</div>
												<p>Class</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="classid" class=" form-control" required onChange="getStream45(this.value);">
															<option value="">Select</option>
															<?php
										$sql = "SELECT id,ClassName from tblclasses where ClassName='senior three' OR ClassName='senior four';";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
										?>
															<option value="<?php echo $row['id'] ?>"><?php echo $row['ClassName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Stream</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="streamid" id="streamid45" class=" form-control" required>
														</select>
													</div>
												</div>
												<p>Subject One</p>
											<div class="chosen-select-single mg-b-20">
													<select name="subjectid1" class="select2_demo_3 form-control" required>
														<option value="">Select</option>
															<?php
											 $sql = "SELECT id,SubjectCode FROM tblsubjects WHERE Level='O-Level' AND compulsory=0";
                        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
                        if($count >= 1){
							 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['SubjectCode']; ?></option>
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
											 $sql = "SELECT id,SubjectCode FROM tblsubjects WHERE Level='O-Level'  AND compulsory=0";
                        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
                        if($count >= 1){
							 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['SubjectCode']; ?></option>
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
											 $sql = "SELECT id,SubjectCode FROM tblsubjects WHERE Level='O-Level' AND compulsory=0";
                        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
                        if($count >= 1){
							 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['SubjectCode']; ?></option>
														<?php
							 }
                        }else{
                            echo "0 subjects added";  
                        }
											?>
													</select>
												</div>
												<p>Gender</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="gender" class=" form-control" required>
															<option value="">Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
												<p>Fees to be paid</p>
												<div class="">
													<input type="text" name="fees" class="form-control" required="required">
													<span class="help-block">Eg- 500000,1000000 etc</span>
												</div>
												<p>Image</p>
												<div class="">
													<input type="file" name="profilepic" class="form-control" required="required" id="success"> </div>
												<p>Medical form</p>
												<div class="">
													<input type="file" name="medicalform" class="form-control" required="required" id="success"> </div>
												<p>Admission form</p>
												<div class="">
													<input type="file" name="admissionform" class="form-control" required="required" id="success"> </div>
												<p></p>
												<div class="">
													<div class="login-horizental login-btn-inner">
														<button class="btn btn-sm btn-primary login-submit-cs" name="s34submit" type="submit">Add Student</button>
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
					<!--										end of s.4 n s.3data-->
				</div>
				<div id="Tabs2s1" class="tab-pane animated custon-tab-style1">
					<!--										start of s2 n s1 data-->

						<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">

							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<form action="includes/adds21.php" method="post" enctype="multipart/form-data">
										
										<div id="form" class="panel-collapse panel-ic collapse in">
											<div class="form admin-panel-content animated bounce">
												<p>Full Names</p>
												<div class="">
													<input type="text" name="fullname" class="form-control" required="required">
												</div>
												<p>Roll Number</p>
												<div class="">
													<?php
													global $value2;
													$q ="SELECT id from tblstudents;";
													 $resultq = mysqli_query($conn,$q);
        $countq = mysqli_num_rows($resultq);
			if($countq >= 0){
        $value2 = $countq + 1;
        $value2 = "O" . sprintf('%06s', $value2);
        $value = $value2;
			}
													?>
													<input type="text" value="<?php echo $value ?>" class="form-control" disabled> 
													<input type="hidden"  name="rollno" value="<?php echo $value ?>" class="form-control"> 
												</div>
												<p>Class</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="classid" id="classid" class=" form-control" required onChange="getStream21(this.value);">
															<option value="">Select</option>
															<?php
										$sql = "SELECT id,ClassName from tblclasses where ClassName='senior two' OR ClassName='senior one';";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
										?>
															<option value="<?php echo $row['id'] ?>"><?php echo $row['ClassName'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<p>Stream</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="streamid" id="streamid21" class=" form-control" required>
														</select>
													</div>
												</div>
												
												<p>Gender</p>
												<div class="">
													<div class="chosen-select-single mg-b-20">
														<select name="gender" class=" form-control" required>
															<option value="">Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
												<p>Fees to be paid</p>
												<div class="">
													<input type="text" name="fees" class="form-control" required="required">
													<span class="help-block">Eg- 500000,1000000 etc</span>
												</div>
												<p>Image</p>
												<div class="">
													<input type="file" name="profilepic" class="form-control" required="required" id="success"> </div>
												<p>Medical form</p>
												<div class="">
													<input type="file" name="medicalform" class="form-control" required="required" id="success"> </div>
												<p>Admission form</p>
												<div class="">
													<input type="file" name="admissionform" class="form-control" required="required" id="success"> </div>
												<p></p>
												<div class="">
													<div class="login-horizental login-btn-inner">
														<button class="btn btn-sm btn-primary login-submit-cs" name="s21submit" type="submit">Add Student</button>
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
					
					<!--										end of s2 n s1 data-->
				</div>
			</div>
			</div>
			</div>
		</div>
		</div>
		<!--		end of tab-->

		
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