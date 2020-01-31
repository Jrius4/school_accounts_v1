<?php
include_once 'includes/db.php';
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
<h2>Report Card</h2>
</div>
</div>
<div class="col-lg-6">
<ul class="breadcome-menu">
<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
<li><a href="#">Student</a> <span class="bread-slash">/</span> </li>
<li><span class="bread-blod">Termly report cards</span> </li>
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
<li class="active"><a data-toggle="tab" href="#Alevel"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>Term 1</a>
</li>
<li><a data-toggle="tab" href="#Tabs4s3"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Term 2</a>
</li>
<li><a data-toggle="tab" href="#Tabs2s1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>Term 3</a>
</li>
</ul>
<div class="tab-content">
<div id="Alevel" class="tab-pane in active animated custon-tab-style1">
<!--										start of a level data-->
<div class="row">
<div class="col-lg-1">

</div>
<div class="col-lg-10">
<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset" style="background-color: white;color: black;" id="t1">

	<div class="panel-group adminpro-custon-design" id="accordion">
		<div class="panel panel-default">
			<div id="form" class="panel-collapse panel-ic collapse in">
				<div class="form admin-panel-content animated bounce">
					<!--												table start-->
					<!--												report header start-->
					<?php
					$date = date("d/m/y");
	$time = date("h : i a");
    $duedt = explode("/",$date);
    $week = mktime(0,0,0,$duedt[1],$duedt[0],$duedt[2]);
    $years = (int)date('Y',$week);
					
					$cid=$_SESSION['class'];
					$sql5="SELECT id FROM tbldeclare WHERE Year=$years AND Term=1 AND ClassId=$cid";
					$result5=mysqli_query($conn,$sql5);
					$count = mysqli_num_rows($result5);
					if($count == 1){
						?>
					<div class="col-lg-3">
						<img src="img/message/1.jpg" alt=""/>
					</div>
					<div class="col-lg-7">
						<p style="color: blue;font-size: 24px;font-weight: bold">FRIENDS ACADEMY KATENDE</p>
						<span style="font-size: 14px; color: black;">MIXED DAY AND BOARDING SECONDARY SCHOOL<br /> ARTS AND SCIENCES</span><br/>
						<span style="font-size: 14px; color: black;">P.O.Box 27625 Kampala</span><br/>
						<span style="font-size: 14px; color: black;">Tel:+256(0)312113547, 0712855644, 0788315945</span>
						<span style="font-size: 14px; color: black;">Website:www.friendsacademy.co.ug <br />
			Email:info@friendsacademy.co.ug</span>
					</div>
					<div class="col-lg-2" style="height: 150px;">
						<?php
						$sRoll = $_SESSION[ 'S34id' ];
						$sql = "SELECT tbls34.FullName,tbls34.Gender,tbls34.profilepic,tbls34.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tbls34 join tblclasses on tblclasses.id=tbls34.ClassId join tblstreams on tblstreams.id=tbls34.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE tbls34.RollNo='$sRoll';";
				$result = mysqli_query( $conn, $sql );
						$row = mysqli_fetch_assoc( $result );
						$count = mysqli_num_rows($result);
						?>
						<img src="uploads/<?php echo $row['profilepic']; ?>" style="height: 100px; width: 100px;"alt=""/>
					</div>
					<div class="col-lg-12">
						<br/>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Name: </span>
								<?php echo $row['FullName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Class: </span>
								<?php echo $row['ClassName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Stream: </span>
								<?php echo $row['StreamName']; ?>
							</p>
						</div>

					</div>
					<div class="col-lg-12">

						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Term: </span>one</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">ClassTeacher: </span>
								<?php 
								if($row['trgd'] == "Male"){
									echo "Mr. ".$row['tr'];
								}else{
								echo "Ms. ".$row['tr']; } ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Sex: </span>
								<?php 
			if($row['Gender'] == "Male"){
				echo "M";
			}else{
				echo "F";
			}	?>
							</p>
						</div>

					</div>

					<!--											report header end	-->
					<div class="sparkline10-graph" style="background-color: white;color: black;">
						<div class="static-table-list">
							<table border=1 class="table border-table">
								<thead>
									<tr>
										<th>Subject</th>
										<th>B.O.T</th>
										<th>M.T</th>
										<th>E.O.T</th>
										<th>Avg</th>
										<th>Grade</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<tbody>
									<!--																			1st subject-->
									<tr>
										<?php
										$date = date( "d/m/y" );
										$time = date( "h : i a" );
										$duedt = explode( "/", $date );
										$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
										$years = ( int )date( 'Y', $week );

										$avga=array();
										$agg=array();
										$ss=array();
										$sql3 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=1;";
										$result3 = mysqli_query( $conn, $sql3 );
										while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
											?>
										<td style="color: black;">
											<?php
											echo $row3[ 'SubjectName' ];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very&nbsp;Good";
												}else if($m == "C3"){
													echo "Quite&nbsp;Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average&nbsp;Work";
												}else if($m == "P7"){
												echo "Double&nbsp;efforts";
												}else if($m == "P8"){
												echo "More&nbsp;effort";
												}else if($m == "F9"){
												echo "Tripple&nbsp;Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain&nbsp;this";
												}else if($m == "D2"){
													echo "Very&nbsp;promising";
												}else if($m == "C3"){
													echo "Quite&nbsp;promising";
												}else if($m == "C4"){
													echo "Not&nbsp;bad";
												}else if($m == "C5"){
													echo "Tighten&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Read&nbsp;More";
												}else if($m == "P8"){
												echo "Work&nbsp;harder";
												}else if($m == "F9"){
												echo "Pull&nbsp;up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}else{
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}
											?>
										</td>
									</tr>
									<?php } ?>

<!--																		optional subjects-->
									<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject1Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very&nbsp;Good";
												}else if($m == "C3"){
													echo "Quite&nbsp;Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average&nbsp;Work";
												}else if($m == "P7"){
												echo "Double&nbsp;efforts";
												}else if($m == "P8"){
												echo "More&nbsp;effort";
												}else if($m == "F9"){
												echo "Tripple&nbsp;Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain&nbsp;this";
												}else if($m == "D2"){
													echo "Very&nbsp;promising";
												}else if($m == "C3"){
													echo "Quite&nbsp;promising";
												}else if($m == "C4"){
													echo "Not&nbsp;bad";
												}else if($m == "C5"){
													echo "Tighten&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Read&nbsp;More";
												}else if($m == "P8"){
												echo "Work&nbsp;harder";
												}else if($m == "F9"){
												echo "Pull&nbsp;up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject2Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);

											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very&nbsp;Good";
												}else if($m == "C3"){
													echo "Quite&nbsp;Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average&nbsp;Work";
												}else if($m == "P7"){
												echo "Double&nbsp;efforts";
												}else if($m == "P8"){
												echo "More&nbsp;effort";
												}else if($m == "F9"){
												echo "Tripple&nbsp;Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain&nbsp;this";
												}else if($m == "D2"){
													echo "Very&nbsp;promising";
												}else if($m == "C3"){
													echo "Quite&nbsp;promising";
												}else if($m == "C4"){
													echo "Not&nbsp;bad";
												}else if($m == "C5"){
													echo "Tighten&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Read&nbsp;More";
												}else if($m == "P8"){
												echo "Work&nbsp;harder";
												}else if($m == "F9"){
												echo "Pull&nbsp;up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject3Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){

											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very&nbsp;Good";
												}else if($m == "C3"){
													echo "Quite&nbsp;Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average&nbsp;Work";
												}else if($m == "P7"){
												echo "Double&nbsp;efforts";
												}else if($m == "P8"){
												echo "More&nbsp;effort";
												}else if($m == "F9"){
												echo "Tripple&nbsp;Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep&nbsp;it&nbsp;Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly&nbsp;Good";
												}else if($m == "C5"){
													echo "Fair&nbsp;Attempt";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Aim&nbsp;higher";
												}else if($m == "P8"){
												echo "Double&nbsp;effort";
												}else if($m == "F9"){
												echo "Still&nbsp;low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain&nbsp;this";
												}else if($m == "D2"){
													echo "Very&nbsp;promising";
												}else if($m == "C3"){
													echo "Quite&nbsp;promising";
												}else if($m == "C4"){
													echo "Not&nbsp;bad";
												}else if($m == "C5"){
													echo "Tighten&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;do&nbsp;better";
												}else if($m == "P7"){
												echo "Read&nbsp;More";
												}else if($m == "P8"){
												echo "Work&nbsp;harder";
												}else if($m == "F9"){
												echo "Pull&nbsp;up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}else{
												if($m == "D1"){
													echo "Very&nbsp;determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your&nbsp;getting&nbsp;there";
												}else if($m == "C4"){
													echo "ok&nbsp;marks";
												}else if($m == "C5"){
													echo "Buckle&nbsp;up";
												}else if($m == "C6"){
												echo "Can&nbsp;improve";
												}else if($m == "P7"){
												echo "Always&nbsp;consult";
												}else if($m == "P8"){
												echo "Pay&nbsp;more&nbsp;attention";
												}else if($m == "F9"){
												echo "Alot&nbsp;of&nbsp;energy&nbsp;needed";
												}
											}
											?>
										</td>
									</tr>
<!--																		end of optional subjects-->
									<!--1st subject end-->
									<!--																			compiled report info-->
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Aggregate in best 8
										</td>
										<td style="color: black; border-left: 0">
											<?php
//																				create a method to sort the array
											sort($agg);
											$agg=array_slice($agg,0,8);
											$arrs = array_sum($agg);
											echo $arrs;
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Division
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
											if($arrs < 32){
												echo "I";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "II";
											}else if($arrs >= 51){
												echo "III";
											}
											?>
										</td>
									</tr>

									<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td style="color: black; border-left: 0;border-right: 0">

										</td>
										<td colspan="2" style="color: black; border-right: 0;border-left: 0;">

										</td>
										<td colspan="2" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
										<?php
											if($arrs < 32){
												echo "Maximize the good grades in all subjects";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Settle for academics and get better results";
											}else if($arrs >= 51){
												echo "Consult your teachers always";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
											<?php
											if($arrs < 32){
												echo "This is promising";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Get more serious on your academics";
											}else if($arrs >= 51){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) :
										</td>
										<td style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tbls34 WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
											$bal=$money-$paid;
											if($bal <= 0){
												echo "0";
											}else{
												echo $bal;
											}
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Next Term Begins on :
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
										$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											echo $row['nxtdate'];
											?>
										</td>
										
									</tr>
									
									<tr>
                              
<td colspan="7" align="center" style="color: black;"><a href="pdfs34.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
									<!--																		compiled report info end-->
								</tbody>
							</table>

						</div>
					</div>

					<?php
					}else{
						?>
					<h3>Please be patient as Results are <span style="color: red">NOT</span> yet published</h3>
					<?php
					}
					?>
					<!--												table end-->
				</div>
			</div>
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
<div class="col-lg-1">

</div>
</div>
<!--										end of a level data-->
</div>
<div id="Tabs4s3" class="tab-pane animated custon-tab-style1">
<!--										start of s.4 n s.3 data-->
<div class="row">
<div class="col-lg-1">

</div>
<div class="col-lg-10">
<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset" style="background-color: white;color: black;">

	<div class="panel-group adminpro-custon-design" id="accordion">
		<div class="panel panel-default">
			<div id="form" class="panel-collapse panel-ic collapse in">
				<div class="form admin-panel-content animated bounce">
					<!--												table start-->
					<!--												report header start-->
					<?php
					$date = date("d/m/y");
	$time = date("h : i a");
    $duedt = explode("/",$date);
    $week = mktime(0,0,0,$duedt[1],$duedt[0],$duedt[2]);
    $years = (int)date('Y',$week);
					
					$sql5="SELECT id FROM tbldeclare WHERE Year=$years AND Term=2 AND (ClassId=3 OR ClassId=4)";
					$result5=mysqli_query($conn,$sql5);
					$count = mysqli_num_rows($result5);
					if($count == 1){
						?>
					<div class="col-lg-3">
						<img src="img/message/1.jpg" alt=""/>
					</div>
					<div class="col-lg-7">
						<p style="color: blue;font-size: 24px;font-weight: bold">FRIENDS ACADEMY KATENDE</p>
						<span style="font-size: 14px; color: black;">MIXED DAY AND BOARDING SECONDARY SCHOOL<br /> ARTS AND SCIENCES</span><br/>
						<span style="font-size: 14px; color: black;">P.O.Box 27625 Kampala</span><br/>
						<span style="font-size: 14px; color: black;">Tel:+256(0)312113547, 0712855644, 0788315945</span>
						<span style="font-size: 14px; color: black;">Website:www.friendsacademy.co.ug <br />
			Email:info@friendsacademy.co.ug</span>
					</div>
					<div class="col-lg-2" style="height: 150px;">
						<?php
						$sRoll = $_SESSION[ 'S34id' ];
						$sql = "SELECT tbls34.FullName,tbls34.Gender,tbls34.profilepic,tbls34.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tbls34 join tblclasses on tblclasses.id=tbls34.ClassId join tblstreams on tblstreams.id=tbls34.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE tbls34.RollNo='$sRoll';";
				$result = mysqli_query( $conn, $sql );
						$row = mysqli_fetch_assoc( $result );
						$count = mysqli_num_rows($result);
						?>
						<img src="uploads/<?php echo $row['profilepic']; ?>" style="height: 100px; width: 100px;" alt=""/>
					</div>
					<div class="col-lg-12">
						<br/>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Name: </span>
								<?php echo $row['FullName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Class: </span>
								<?php echo $row['ClassName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Stream: </span>
								<?php echo $row['StreamName']; ?>
							</p>
						</div>

					</div>
					<div class="col-lg-12">

						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Term: </span>two</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">ClassTeacher: </span>
								<?php 
								if($row['trgd'] == "Male"){
									echo "Mr. ".$row['tr'];
								}else{
								echo "Ms. ".$row['tr']; } ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Sex: </span>
								<?php 
			if($row['Gender'] == "Male"){
				echo "M";
			}else{
				echo "F";
			}	?>
							</p>
						</div>

					</div>

					<!--											report header end	-->
					<div class="sparkline10-graph" style="background-color: white;color: black;">
						<div class="static-table-list">
							<table border=1 class="table border-table">
								<thead>
									<tr>
										<th>Subject</th>
										<th>B.O.T</th>
										<th>M.T</th>
										<th>E.O.T</th>
										<th>Avg</th>
										<th>Grade</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<tbody>
									<!--																			1st subject-->
									<tr>
										<?php
										$date = date( "d/m/y" );
										$time = date( "h : i a" );
										$duedt = explode( "/", $date );
										$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
										$years = ( int )date( 'Y', $week );

										$avga=array();
										$agg=array();
										$ss=array();
										$sql3 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=1;";
										$result3 = mysqli_query( $conn, $sql3 );
										while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
											?>
										<td style="color: black;">
											<?php
											echo $row3[ 'SubjectName' ];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}
											?>
										</td>
									</tr>
									<?php } ?>

<!--																		optional subjects-->
									<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject1Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject2Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);

											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject3Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=2;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){

											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}
											?>
										</td>
									</tr>
<!--																		end of optional subjects-->
									<!--1st subject end-->
									<!--																			compiled report info-->
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Aggregate in best 8
										</td>
										<td style="color: black; border-left: 0">
											<?php
//																				create a method to sort the array
											sort($agg);
											$agg=array_slice($agg,0,8);
											$arrs = array_sum($agg);
											echo $arrs;
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Division
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
											if($arrs < 32){
												echo "I";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "II";
											}else if($arrs >= 51){
												echo "III";
											}
											?>
										</td>
									</tr>

									<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td style="color: black; border-left: 0;border-right: 0">

										</td>
										<td colspan="2" style="color: black; border-right: 0;border-left: 0;">

										</td>
										<td colspan="2" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
										<?php
											if($arrs < 32){
												echo "Maximize the good grades in all subjects";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Settle for academics and get better results";
											}else if($arrs >= 51){
												echo "Consult your teachers always";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
											<?php
											if($arrs < 32){
												echo "This is promising";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Get more serious on your academics";
											}else if($arrs >= 51){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) for this term :
										</td>
										<td style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tbls34 WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
											$bal=$money-$paid;
											if($bal <= 0){
												echo "0";
											}else{
												echo $bal;
											}
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Next Term Begins on :
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
										$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											echo $row['nxtdate'];
											?>
										</td>
									</tr>
									<tr>
                              
<td colspan="7" align="center" style="color: black;"><a href="pdf2t34.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
									<!--																		compiled report info end-->
								</tbody>
							</table>

						</div>
					</div>

					<?php
					}else{
						?>
					<h3>Please be patient as Results are <span style="color: red">NOT</span> yet published</h3>
					<?php
					}
					?>
					<!--												table end-->
				</div>
			</div>
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
<div class="col-lg-1">

</div>
</div>
<!--										end of s.4 n s.3data-->
</div>
<div id="Tabs2s1" class="tab-pane animated custon-tab-style1">
<!--										start of s2 n s1 data-->

<div class="row">
<div class="col-lg-1">

</div>
<div class="col-lg-10">
<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset" style="background-color: white;color: black;">

	<div class="panel-group adminpro-custon-design" id="accordion">
		<div class="panel panel-default">
			<div id="form" class="panel-collapse panel-ic collapse in">
				<div class="form admin-panel-content animated bounce">
					<!--												table start-->
					<!--												report header start-->
					<?php
					$date = date("d/m/y");
	$time = date("h : i a");
    $duedt = explode("/",$date);
    $week = mktime(0,0,0,$duedt[1],$duedt[0],$duedt[2]);
    $years = (int)date('Y',$week);
					
					$sql5="SELECT id FROM tbldeclare WHERE Year=$years AND Term=3 AND (ClassId=3 OR ClassId=4)";
					$result5=mysqli_query($conn,$sql5);
					$count = mysqli_num_rows($result5);
					if($count == 1){
						?>
					<div class="col-lg-3">
						<img src="img/message/1.jpg" alt=""/>
					</div>
					<div class="col-lg-7">
						<p style="color: blue;font-size: 24px;font-weight: bold">FRIENDS ACADEMY KATENDE</p>
						<span style="font-size: 14px; color: black;">MIXED DAY AND BOARDING SECONDARY SCHOOL<br /> ARTS AND SCIENCES</span><br/>
						<span style="font-size: 14px; color: black;">P.O.Box 27625 Kampala</span><br/>
						<span style="font-size: 14px; color: black;">Tel:+256(0)312113547, 0712855644, 0788315945</span>
						<span style="font-size: 14px; color: black;">Website:www.friendsacademy.co.ug <br />
			Email:info@friendsacademy.co.ug</span>
					</div>
					<div class="col-lg-2" style="height: 150px;">
						<?php
						$sRoll = $_SESSION[ 'S34id' ];
						$sql = "SELECT tbls34.FullName,tbls34.Gender,tbls34.profilepic,tbls34.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tbls34 join tblclasses on tblclasses.id=tbls34.ClassId join tblstreams on tblstreams.id=tbls34.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE tbls34.RollNo='$sRoll';";
				$result = mysqli_query( $conn, $sql );
						$row = mysqli_fetch_assoc( $result );
						$count = mysqli_num_rows($result);
						?>
						<img src="uploads/<?php echo $row['profilepic']; ?>" style="height: 100px; width: 100px;" alt=""/>
					</div>
					<div class="col-lg-12">
						<br/>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Name: </span>
								<?php echo $row['FullName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Class: </span>
								<?php echo $row['ClassName']; ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Stream: </span>
								<?php echo $row['StreamName']; ?>
							</p>
						</div>

					</div>
					<div class="col-lg-12">

						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Term: </span>one</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">ClassTeacher: </span>
								<?php 
								if($row['trgd'] == "Male"){
									echo "Mr. ".$row['tr'];
								}else{
								echo "Ms. ".$row['tr']; } ?>
							</p>
						</div>
						<div class="col-lg-4">
							<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Sex: </span>
								<?php 
			if($row['Gender'] == "Male"){
				echo "M";
			}else{
				echo "F";
			}	?>
							</p>
						</div>

					</div>

					<!--											report header end	-->
					<div class="sparkline10-graph" style="background-color: white;color: black;">
						<div class="static-table-list">
							<table border=1 class="table border-table">
								<thead>
									<tr>
										<th>Subject</th>
										<th>B.O.T</th>
										<th>M.T</th>
										<th>E.O.T</th>
										<th>Avg</th>
										<th>Grade</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<tbody>
									<!--																			1st subject-->
									<tr>
										<?php
										$date = date( "d/m/y" );
										$time = date( "h : i a" );
										$duedt = explode( "/", $date );
										$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
										$years = ( int )date( 'Y', $week );

										$avga=array();
										$agg=array();
										$ss=array();
										$sql3 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level' AND compulsory=1;";
										$result3 = mysqli_query( $conn, $sql3 );
										while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
											?>
										<td style="color: black;">
											<?php
											echo $row3[ 'SubjectName' ];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}
											?>
										</td>
									</tr>
									<?php } ?>

<!--																		optional subjects-->
									<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject1Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject2Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);

											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){
											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}
											?>
										</td>
									</tr>
										<tr>
										<?php
										$sql3 = "SELECT tblsubjects.id,tblsubjects.SubjectName FROM tblsubjects join tbls34 on tbls34.Subject3Id=tblsubjects.id WHERE tbls34.RollNo='$sRoll';";
										$result3 = mysqli_query( $conn, $sql3 );
										$row3 = mysqli_fetch_assoc( $result3 ); 
											?>
										<td style="color: black;">
											<?php
											echo $row3['SubjectName'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$si =$row3[ 'id' ];

											$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3 AND Year=$years;";
											$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
											echo $row['fn'];

											?>
										</td>

										<td style="color: black;">
											<?php
											$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
											echo $row5['fn1'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=3;";
											$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
											echo $row6['fn2'];
											?>
										</td>

										<td style="color: black;">
											<?php
											$s1=$row['fn'];
											$s2= $row5['fn1'];
											$s3= $row6['fn2'];
											$avg = ($s1+$s2+$s3)/3;
											$avg = round($avg,0);
											echo $avg;
											?>
										</td>
										<td style="color: black;">
											<?php
											if($avg >=0 && $avg <=39){

											echo "F9";
												$m="F9";
												$a=9;
											}else if($avg >=40 && $avg <=44){
											echo "P8";
												$m="P8";
												$a=8;
											}else if($avg >=45 && $avg <=49){
											echo "P7";
												$m="P7";
												$a=7;
											}else if($avg >=50 && $avg <=54){
											echo "C6";
												$m="C6";
												$a=6;
											}else if($avg >=55 && $avg <=59){
											echo "C5";
												$m="C5";
												$a=5;
											}else if($avg >=60 && $avg <=65){
											echo "C4";
												$m="C4";
												$a=4;
											}else if($avg >=66 && $avg <=74){
											echo "C3";
												$m="C3";
												$a=3;
											}else if($avg >=75 && $avg <=79){
											echo "D2";
												$m="D2";
												$a=2;
											}else if($avg >=80){
											echo "D1";
												$m="D1";
												$a=1;
											}
											?>
										</td>
										<td style="color: black;">
											<?php
											$avga[]=$m;
											$agg[]=$a;
											$tmp = array_count_values($avga);
											$cnt = $tmp[$m];
											if($cnt == 1){
												if($m == "D1"){
													echo "Excellent";
												}else if($m == "D2"){
													echo "Very Good";
												}else if($m == "C3"){
													echo "Quite Good";
												}else if($m == "C4"){
													echo "Good";
												}else if($m == "C5"){
													echo "Promising";
												}else if($m == "C6"){
												echo "Average Work";
												}else if($m == "P7"){
												echo "Double efforts";
												}else if($m == "P8"){
												echo "More effort";
												}else if($m == "F9"){
												echo "Tripple Effort";
												}
											}else if($cnt == 2){
												if($m == "D1"){
													echo "Keep it Up";
												}else if($m == "D2"){
													echo "Satisfactory";
												}else if($m == "C3"){
													echo "Impressive";
												}else if($m == "C4"){
													echo "Fairly Good";
												}else if($m == "C5"){
													echo "Fair Attempt";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Aim higher";
												}else if($m == "P8"){
												echo "Double effort";
												}else if($m == "F9"){
												echo "Still low";
												}
											}else if($cnt == 3){
												if($m == "D1"){
													echo "Maintain this";
												}else if($m == "D2"){
													echo "Very promising";
												}else if($m == "C3"){
													echo "Quite promising";
												}else if($m == "C4"){
													echo "Not bad";
												}else if($m == "C5"){
													echo "Tighten up";
												}else if($m == "C6"){
												echo "Can do better";
												}else if($m == "P7"){
												echo "Read More";
												}else if($m == "P8"){
												echo "Work harder";
												}else if($m == "F9"){
												echo "Pull up";
												}
											}else if($cnt == 4){
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}else{
												if($m == "D1"){
													echo "Very determined";
												}else if($m == "D2"){
													echo "Awesome";
												}else if($m == "C3"){
													echo "Your getting there";
												}else if($m == "C4"){
													echo "ok marks";
												}else if($m == "C5"){
													echo "Buckle up";
												}else if($m == "C6"){
												echo "Can improve";
												}else if($m == "P7"){
												echo "Always consult";
												}else if($m == "P8"){
												echo "Pay more attention";
												}else if($m == "F9"){
												echo "Alot of energy needed";
												}
											}
											?>
										</td>
									</tr>
<!--																		end of optional subjects-->
									<!--1st subject end-->
									<!--																			compiled report info-->
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Aggregate in best 8
										</td>
										<td style="color: black; border-left: 0">
											<?php
//																				create a method to sort the array
											sort($agg);
											$agg=array_slice($agg,0,8);
											$arrs = array_sum($agg);
											echo $arrs;
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Division
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
											if($arrs < 32){
												echo "I";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "II";
											}else if($arrs >= 51){
												echo "III";
											}
											?>
										</td>
									</tr>

									<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td style="color: black; border-left: 0;border-right: 0">

										</td>
										<td colspan="2" style="color: black; border-right: 0;border-left: 0;">

										</td>
										<td colspan="2" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
										<?php
											if($arrs < 32){
												if($cid==3){
													echo "Promoted to Senior Four";
												}else if($cid==4){
													echo "Promoted to Senior Five";
												}
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Parent expected to contact and report to school to discuss poor performance";
											}else if($arrs >= 51){
												if($cid==3){
													echo "Advised to repeat Senior Three";
												}else if($cid==4){
													echo "Advised to repeat Senior Four";
												}
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="5" style="color: black; border-left: 0;border-right: 0">
											<?php
											if($arrs < 32){
												echo "Congratulations on your promotion";
											}else if($arrs >= 33 && $arrs <= 50){
												echo "Get more serious on your academics";
											}else if($arrs >= 51){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) for this term:
										</td>
										<td style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tbls34 WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
											$bal=$money-$paid;
											if($bal <= 0){
												echo "0";
											}else{
												echo $bal;
											}
											?>
										</td>
										<td colspan="2" style="color: black; border-right: 0">
											Next Term Begins on :
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
										$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											echo $row['nxtdate'];
											?>
										</td>
										<td colspan="2" style="color: black; border-left: 0">
											<?php
										$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											echo $row['nxtdate'];
											?>
										</td>
									</tr>
									<tr>
                              
<td colspan="7" align="center" style="color: black;"><a href="pdf3t34.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
									<!--																		compiled report info end-->
									
								</tbody>
							</table>

						</div>
					</div>

					<?php
					}else{
						?>
					<h3>Please be patient as Results are <span style="color: red">NOT</span> yet published</h3>
					<?php
					}
					?>
					<!--												table end-->
				</div>
			</div>
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
<div class="col-lg-1">

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
	<script>
            $(function($) {

            });


            function CallPrint(strid) {
var restorepage = document.body.innerHTML;
				var printcontent = document.getElementById(strid).innerHTML;
				document.body.innerHTML = printcontent;
				window.print();
				document.body.innerHTML = restorepage;
}
</script>
</body>

</html>