<?php include_once 'includes/db.php' ;
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

		<?php include('studentnav.php'); ?>

		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>
										<?php
											$c=$_SESSION['class'];
											if($c==5 || $c==6){
															$id=$_SESSION['ARid'];
															$sql="SELECT tblastudents.RollNo,tblacombination.CombName,tblstreams.StreamName,tblastudents.profilepic,tblclasses.ClassName FROM tblastudents join tblacombination on tblacombination.id=tblastudents.CombinationId join tblstreams on tblstreams.id=tblastudents.StreamId join tblclasses on tblclasses.id=tblastudents.ClassId WHERE tblastudents.RollNo='$id'";
		$result=mysqli_query($conn,$sql);
															$row=mysqli_fetch_assoc($result);
												?>
											<img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" width="100px" height="auto">
											<?php
															echo $row['RollNo']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['CombName']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['ClassName']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['StreamName'];
														}else if($c==4 || $c==3){
												$id1=$_SESSION['S34id'];
		$sql1="SELECT tbls34.RollNo,tbls34.profilepic,tblstreams.StreamName,tblclasses.ClassName FROM tbls34 join tblstreams on tblstreams.id=tbls34.StreamId join tblclasses on tblclasses.id=tbls34.ClassId WHERE tbls34.RollNo='$id1';";
		$result1=mysqli_query($conn,$sql1);
		$row1=mysqli_fetch_assoc($result1);
																?>
											<img src="uploads/<?php echo $row1['profilepic'] ?>" alt="image" width="100px" height="auto">
											<?php
															echo $row1['RollNo']."&nbsp;&nbsp;&nbsp;&nbsp;".$row1['ClassName']."&nbsp;&nbsp;&nbsp;&nbsp;".$row1['StreamName'];
}else if($c==2 || $c==1){
												$id2=$_SESSION['S21id'];
		$sql2="SELECT tbls21.RollNo,tbls21.profilepic,tblstreams.StreamName,tblclasses.ClassName FROM tbls21 join tblstreams on tblstreams.id=tbls21.StreamId join tblclasses on tblclasses.id=tbls21.ClassId WHERE tbls21.RollNo='$id2';";
		$result2=mysqli_query($conn,$sql2);
		$row2=mysqli_fetch_assoc($result2);
												?>
											<img src="uploads/<?php echo $row2['profilepic'] ?>" alt="image" width="100px" height="auto">
											<?php
															echo $row2['RollNo']."&nbsp;&nbsp;&nbsp;&nbsp;".$row2['ClassName']."&nbsp;&nbsp;&nbsp;&nbsp;".$row2['StreamName'];				
	}
											?>
										</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Results</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">E.O.T</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<!-- Static Table Start -->
		<div class="data-table-area mg-b-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="sparkline13-list shadow-reset">
							<div class="sparkline13-hd">
								<div class="main-sparkline13-hd">
									<h1>End of <span class="table-project-n"> Term</span> </h1>
									<div class="sparkline13-outline-icon">
										<span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
										<span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
									</div>
								</div>
							</div>
							<div class="sparkline13-graph">
								<div class="datatable-dashv1-list custom-datatable-overright">
									<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
										<thead>
											<tr>
												<th>Year</th>
												<th>Class</th>
												<th>Subject</th>
												<th>Paper</th>
												<th>Marks</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											if($c==5 || $c==6){
												$sRoll=$_SESSION['ARid'];
												$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
												$count=mysqli_num_rows($result);
												if($count==0){
													?>
												<td colspan="5" style="font-size: 32px;">Please clear atleast half of the fees to view results</td>
											<?php
												}else{
													$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tblastudents WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
												$half=$money/2;
											if($paid < $half){
												?>
												<td colspan="5" style="font-size: 22px;">Please clear atleast half of the fees (<?php echo $half; ?>) UGX to view results. Current paid amount is <?php echo $paid; ?> UGX</td>
											<?php
											}else{
											$id=$_SESSION['ARid'];
												$sql = "SELECT tblresulteot.Marks,tblresulteot.Year,tblclasses.ClassName,tblsubjects.SubjectName,tblpapers.PaperName FROM tblresulteot join tblclasses on tblclasses.id=tblresulteot.ClassId join tblsubjects on tblsubjects.id=tblresulteot.SubjectId join tblpapers on tblpapers.id=tblresulteot.PaperId WHERE tblresulteot.StudentRoll='$id' AND tblresulteot.Term=2 ORDER BY tblresulteot.id DESC";
												$result = mysqli_query($conn,$sql);
												 while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                   ?>
											<tr>
											<td><?php echo $row['Year'] ?></td>
											<td><?php echo $row['ClassName'] ?></td>
											<td><?php echo $row['SubjectName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
												</tr>
											<?php
												 }
											}
												}
											}else if($c==4 || $c==3){
												$sRoll=$_SESSION['S34id'];
												$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
												$count=mysqli_num_rows($result);
												if($count==0){
													?>
												<td colspan="5" style="font-size: 32px;">Please clear atleast half of the fees to view results</td>
											<?php
												}else{
													$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tbls34 WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
												$half=$money/2;
											if($paid < $half){
												?>
												<td colspan="5" style="font-size: 22px;">Please clear atleast half of the fees (<?php echo $half; ?>) UGX to view results. Current paid amount is <?php echo $paid; ?> UGX</td>
											<?php
											}else{
												$id1=$_SESSION['S34id'];
												$sql3 = "SELECT tblresulteot.Marks,tblresulteot.Year,tblclasses.ClassName,tblsubjects.SubjectName,tblpapers.PaperName FROM tblresulteot join tblclasses on tblclasses.id=tblresulteot.ClassId join tblsubjects on tblsubjects.id=tblresulteot.SubjectId join tblpapers on tblpapers.id=tblresulteot.PaperId WHERE tblresulteot.StudentRoll='$id1' AND tblresulteot.Term=2 ORDER BY tblresulteot.id DESC";
												$result3 = mysqli_query($conn,$sql3);
												 while ( $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                                   ?>
											<tr>
											<td><?php echo $row3['Year'] ?></td>
											<td><?php echo $row3['ClassName'] ?></td>
											<td><?php echo $row3['SubjectName'] ?></td>
											<td><?php echo $row3['PaperName'] ?></td>
											<td><?php echo $row3['Marks'] ?></td>
												</tr>
											<?php
												 }
											}
												}
											}else if($c==2 || $c==1){
												$sRoll=$_SESSION['S21id'];
												$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
												$count=mysqli_num_rows($result);
												if($count==0){
													?>
												<td colspan="5" style="font-size: 32px;">Please clear atleast half of the fees to view results</td>
											<?php
												}else{
													$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tbls21 WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
												$half=$money/2;
											if($paid < $half){
												?>
												<td colspan="5" style="font-size: 22px;">Please clear atleast half of the fees (<?php echo $half; ?>) UGX to view results. Current paid amount is <?php echo $paid; ?> UGX</td>
											<?php
											}else{
												$id2=$_SESSION['S21id'];
												$sql4 = "SELECT tblresulteot.Marks,tblresulteot.Year,tblclasses.ClassName,tblsubjects.SubjectName,tblpapers.PaperName FROM tblresulteot join tblclasses on tblclasses.id=tblresulteot.ClassId join tblsubjects on tblsubjects.id=tblresulteot.SubjectId join tblpapers on tblpapers.id=tblresulteot.PaperId WHERE tblresulteot.StudentRoll='$id2' AND tblresulteot.Term=2 ORDER BY tblresulteot.id DESC";
												$result4 = mysqli_query($conn,$sql4);
												 while ( $row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                                   ?>
											<tr>
											<td><?php echo $row4['Year'] ?></td>
											<td><?php echo $row4['ClassName'] ?></td>
											<td><?php echo $row4['SubjectName'] ?></td>
											<td><?php echo $row4['PaperName'] ?></td>
											<td><?php echo $row4['Marks'] ?></td>
												</tr>
											<?php
												 }
											}
												}
											}
												
												?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Static Table End -->

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
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
	<!-- main JS
         ============================================ -->
	<script src="js/main.js"></script>
</body>


</html>