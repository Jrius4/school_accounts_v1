<?php
include_once 'includes/db.php';
session_start();
error_reporting( 0 );
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
<li class="active"><a data-toggle="tab" href="#AlevelT1"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>Term 1</a>
</li>
<li><a data-toggle="tab" href="#AlevelT2"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Term 2</a>
</li>
<li><a data-toggle="tab" href="#AlevelT3"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>Term 3</a>
</li>
</ul>
<div class="tab-content">
<div id="AlevelT1" class="tab-pane in active animated custon-tab-style1">
<!--										start of a level data-->
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
						<div class="col-lg-2">
							<?php
							$sRoll = $_SESSION[ 'ARid' ];
							$sql = "SELECT tblastudents.FullName,tblastudents.Gender,tblastudents.profilepic,tblastudents.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblastudents.CombinationId,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tblastudents join tblclasses on tblclasses.id=tblastudents.ClassId join tblstreams on tblstreams.id=tblastudents.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE RollNo='$sRoll';";
							$result = mysqli_query( $conn, $sql );
							$row = mysqli_fetch_assoc( $result );
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
											<th colspan=2>Subject</th>
											<th>B.O.T</th>
											<th>Paper Grade</th>
											<th>M.T</th>
											<th>Paper Grade</th>
											<th>E.O.T</th>
											<th>Paper Grade</th>
											<th>Subject Grade</th>
											<th>Teacher's comment</th>
										</tr>
									</thead>
									<tbody>
										<!--																			1st subject-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId1=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
											$gg=array();
											$avgs2=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs2==""){
													$pp1=0;
													$tp1=0;
												}else if($avgs2 >=0 && $avgs2 <=39){
											echo "F";
													$g='F';
													$pp1=0;
													$tp1=0;
											}else if($avgs2 >=40 && $avgs2 <=44){
											echo "O";
													$g='O';
													$pp1=0;
													$tp1=1;
											}else if($avgs2 >=45 && $avgs2 <=55){
											echo "E";
													$g='E';
													$pp1=1;
													$tp1=2;
											}else if($avgs2 >=56 && $avgs2 <=65){
											echo "D";
													$g='D';
													$pp1=1;
													$tp1=3;
											}else if($avgs2 >=66 && 
													 $avgs2 <=74){
											echo "C";
													$g='C';
													$pp1=1;
													$tp1=4;
											}else if($avgs2 >=75 && 
													 $avgs2 <=79){
											echo "B";
													$g='B';
													$pp1=1;
													$tp1=5;
											}else if($avgs2 >=80){
											echo "A";
													$g='A';
													$pp1=1;
													$tp1=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--1st subject end-->
										<!--second subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId2=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs1=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs1==""){
													$pp2=0;
													$tp2=0;
												}else if($avgs1 >=0 && $avgs1 <=39){
											echo "F";
													$g='F';
													$pp2=0;
													$tp2=0;
											}else if($avgs1 >=40 && $avgs1 <=44){
											echo "O";
													$g='O';
													$pp2=0;
													$tp2=1;
											}else if($avgs1 >=45 && $avgs1 <=55){
											echo "E";
													$g='E';
													$pp2=1;
													$tp2=2;
											}else if($avgs1 >=56 && $avgs1 <=65){
											echo "D";
													$g='D';
													$pp2=1;
													$tp2=3;
											}else if($avgs1 >=66 && 
													 $avgs1 <=74){
											echo "C";
													$g='C';
													$pp2=1;
													$tp2=4;
											}else if($avgs1 >=75 && 
													 $avgs1 <=79){
											echo "B";
													$g='B';
													$pp2=1;
													$tp2=5;
											}else if($avgs1 >=80){
											echo "A";
													$g='A';
													$pp2=1;
													$tp2=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			second subject end-->
										<!--																		THird subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId3=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=1;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=1;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=1;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs3=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs3==""){
													$pp3=0;
													$tp3=0;
												}else if($avgs3 >=0 && $avgs3 <=39){
											echo "F";
													$g='F';
													$pp3=0;
													$tp3=0;
											}else if($avgs3 >=40 && $avgs3 <=44){
											echo "O";
													$g='O';
													$pp3=0;
													$tp3=1;
											}else if($avgs3 >=45 && $avgs3 <=55){
											echo "E";
													$g='E';
													$pp3=1;
													$tp3=2;
											}else if($avgs3 >=56 && $avgs3 <=65){
											echo "D";
													$g='D';
													$pp3=1;
													$tp3=3;
											}else if($avgs3 >=66 && 
													 $avgs3 <=74){
											echo "C";
													$g='C';
													$pp3=1;
													$tp3=4;
											}else if($avgs3 >=75 && 
													 $avgs3 <=79){
											echo "B";
													$g='B';
													$pp3=1;
													$tp3=5;
											}else if($avg >=80){
											echo "A";
													$g='A';
													$pp3=1;
													$tp3=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}else if($cnt == 3){
												if($g == "A"){
												echo "Excellent Work";
												}else if($g == "B"){
												echo "Keep on with the smart work";
												}else if($g == "C"){
												echo "You can do it";
												}else if($g == "D"){
												echo "Never give up";
												}else if($g == "O"){
												echo "Read more";
												}else if($g == "E"){
												echo "Work harder than this";
												}else if($g == "F"){
												echo "Always consult";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			third subject end-->
										<!--																			subsidiary-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=2>
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.Subsidiary=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$paid1 = $paid[0];
//											bot paper1
												$sql5 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											mt paper 1
											$sql6 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											eot paper1
											$sql7 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
											$paid2 = $paid[1];
//											bot paper2
												$sql8 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											mt paper 2
											$sql9 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											eot paper2
											$sql10 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											total for bot
											$m1= $row5[ 'FinalMark' ];
											$m2= $row8[ 'FinalMark' ];
											$avg=$m1+$m2;
//											total for mt
											$m1= $row6[ 'FinalMark' ];
											$m2= $row9[ 'FinalMark' ];
											$avg2=$m1+$m2;
//											total for eot
											$m1= $row7[ 'FinalMark' ];
											$m2= $row10[ 'FinalMark' ];
											$avg3=$m1+$m2;
											$finalavg=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="2" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												if($finalavg >= 50){
													echo "1";
													$ss=1;
												}else{
													echo "0";
													$ss=0;
												}
												?>
											</td>
											<td rowspan="2" align="center" style="color: black;">
												<?php
												if($ss==1){
													echo "Good work done";
												}else{
													echo "Practise more";
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php
												echo $pa[ 1 ];
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			subsidiary end-->
										<!--																			Gp-->
										<tr>
											<td style="border-right: 0;color: black; padding-top: 30px;">
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.GP=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresult.Marks FROM tblresult WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk1=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresultmt.Marks FROM tblresultmt WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk2=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresulteot.Marks FROM tblresulteot WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk3=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td align="center" style="border-left: 0;border-bottom: 0;border-top: 0; color: black; font-size: 30px;">
												<?php
												$gpf=($mk1+$mk2+$mk3)/3;
												if($gpf>=50){
													echo "1";
													$gps=1;
												}else{
													echo "0";
													$gps=0;
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												if($gps==1){
													echo "Congratulations";
												}else{
													echo "Work smarter";
												}
												?>
											</td>
										</tr>
										<!--																			GP end-->
										<!--																			compiled report info-->
										<tr>
											<td colspan=3 style="color: black;">
												Principal Passes
											</td>
											<td colspan=3 style="color: black">
												Subsidiary
											</td>
											<td colspan=2 style="color: black;">
												Total Points
											</td>
											<td style="color: black; border-right: 0;border-bottom: 0;">
											</td>
											<td style="color: black;border-left: 0;border-bottom: 0;">
											</td>
										</tr>

										<tr>
											<td colspan=3 style="color: black;">
												<?php
												$tpp=$pp1+$pp2+$pp3;
													echo $tpp;
												?>
											</td>
											<td colspan=3 style="color: black">
												<?php
												$tts=$ss+$gps;
												echo $tts;
												?>
											</td>
											<td colspan=2 style="color: black;">
												<?php											
													$ttp=$tp1+$tp2+$tp3+$tts;
												echo $ttp;
												?>
											</td>
											<td style="color: black; border-right: 0;border-top: 0;">
											</td>
											<td style="color: black;border-left: 0;border-top: 0;">
											</td>
										</tr>
										
										<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td colspan="9" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
										<?php
											if($ttp >= 15){
												echo "Keep the good work up";
											}else if($ttp >=10 && $ttp <= 14){
												echo "Keep pushing, you will make it";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Settle for academics and get better results";
											}else if($ttp <= 6){
												echo "Consult your teachers always";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
											<?php
											if($ttp >= 15){
												echo "Continue achieving good grades, nice work";
											}else if($ttp >=10 && $ttp <= 14){
												echo "This is promising";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Tighten your stockings when it comes to  academics";
											}else if($ttp <= 6){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) :
										</td>
										<td colspan="3" style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tblastudents WHERE RollNo='$sRoll';";
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
										<td colspan="4" style="color: black; border-right: 0">
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
                              
<td colspan="11" align="center" style="color: black;"><a href="pdfa.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
										<!--																		compiled report info end-->
									</tbody>
								</table>

							</div>
						</div>

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
<div id="AlevelT2" class="tab-pane animated custon-tab-style1">
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
						<div class="col-lg-2">
							<?php
							$sRoll = $_SESSION[ 'ARid' ];
							$sql = "SELECT tblastudents.FullName,tblastudents.Gender,tblastudents.profilepic,tblastudents.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblastudents.CombinationId,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tblastudents join tblclasses on tblclasses.id=tblastudents.ClassId join tblstreams on tblstreams.id=tblastudents.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE RollNo='$sRoll';";
							$result = mysqli_query( $conn, $sql );
							$row = mysqli_fetch_assoc( $result );
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
								<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Term: </span>Two</p>
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
											<th colspan=2>Subject</th>
											<th>B.O.T</th>
											<th>Paper Grade</th>
											<th>M.T</th>
											<th>Paper Grade</th>
											<th>E.O.T</th>
											<th>Paper Grade</th>
											<th>Subject Grade</th>
											<th>Teacher's comment</th>
										</tr>
									</thead>
									<tbody>
										<!--																			1st subject-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId1=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
											$gg=array();
											$avgs2=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs2==""){
													$pp1=0;
													$tp1=0;
												}else if($avgs2 >=0 && $avgs2 <=39){
											echo "F";
													$g='F';
													$pp1=0;
													$tp1=0;
											}else if($avgs2 >=40 && $avgs2 <=44){
											echo "O";
													$g='O';
													$pp1=0;
													$tp1=1;
											}else if($avgs2 >=45 && $avgs2 <=55){
											echo "E";
													$g='E';
													$pp1=1;
													$tp1=2;
											}else if($avgs2 >=56 && $avgs2 <=65){
											echo "D";
													$g='D';
													$pp1=1;
													$tp1=3;
											}else if($avgs2 >=66 && 
													 $avgs2 <=74){
											echo "C";
													$g='C';
													$pp1=1;
													$tp1=4;
											}else if($avgs2 >=75 && 
													 $avgs2 <=79){
											echo "B";
													$g='B';
													$pp1=1;
													$tp1=5;
											}else if($avgs2 >=80){
											echo "A";
													$g='A';
													$pp1=1;
													$tp1=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--1st subject end-->
										<!--second subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId2=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs1=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs1==""){
													$pp2=0;
													$tp2=0;
												}else if($avgs1 >=0 && $avgs1 <=39){
											echo "F";
													$g='F';
													$pp2=0;
													$tp2=0;
											}else if($avgs1 >=40 && $avgs1 <=44){
											echo "O";
													$g='O';
													$pp2=0;
													$tp2=1;
											}else if($avgs1 >=45 && $avgs1 <=55){
											echo "E";
													$g='E';
													$pp2=1;
													$tp2=2;
											}else if($avgs1 >=56 && $avgs1 <=65){
											echo "D";
													$g='D';
													$pp2=1;
													$tp2=3;
											}else if($avgs1 >=66 && 
													 $avgs1 <=74){
											echo "C";
													$g='C';
													$pp2=1;
													$tp2=4;
											}else if($avgs1 >=75 && 
													 $avgs1 <=79){
											echo "B";
													$g='B';
													$pp2=1;
													$tp2=5;
											}else if($avgs1 >=80){
											echo "A";
													$g='A';
													$pp2=1;
													$tp2=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			second subject end-->
										<!--																		THird subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId3=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs3=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs3==""){
													$pp3=0;
													$tp3=0;
												}else if($avgs3 >=0 && $avgs3 <=39){
											echo "F";
													$g='F';
													$pp3=0;
													$tp3=0;
											}else if($avgs3 >=40 && $avgs3 <=44){
											echo "O";
													$g='O';
													$pp3=0;
													$tp3=1;
											}else if($avgs3 >=45 && $avgs3 <=55){
											echo "E";
													$g='E';
													$pp3=1;
													$tp3=2;
											}else if($avgs3 >=56 && $avgs3 <=65){
											echo "D";
													$g='D';
													$pp3=1;
													$tp3=3;
											}else if($avgs3 >=66 && 
													 $avgs3 <=74){
											echo "C";
													$g='C';
													$pp3=1;
													$tp3=4;
											}else if($avgs3 >=75 && 
													 $avgs3 <=79){
											echo "B";
													$g='B';
													$pp3=1;
													$tp3=5;
											}else if($avg >=80){
											echo "A";
													$g='A';
													$pp3=1;
													$tp3=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}else if($cnt == 3){
												if($g == "A"){
												echo "Excellent Work";
												}else if($g == "B"){
												echo "Keep on with the smart work";
												}else if($g == "C"){
												echo "You can do it";
												}else if($g == "D"){
												echo "Never give up";
												}else if($g == "O"){
												echo "Read more";
												}else if($g == "E"){
												echo "Work harder than this";
												}else if($g == "F"){
												echo "Always consult";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			third subject end-->
										<!--																			subsidiary-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=2>
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.Subsidiary=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$paid1 = $paid[0];
//											bot paper1
												$sql5 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											mt paper 1
											$sql6 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											eot paper1
											$sql7 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
											$paid2 = $paid[1];
//											bot paper2
												$sql8 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											mt paper 2
											$sql9 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											eot paper2
											$sql10 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											total for bot
											$m1= $row5[ 'FinalMark' ];
											$m2= $row8[ 'FinalMark' ];
											$avg=$m1+$m2;
//											total for mt
											$m1= $row6[ 'FinalMark' ];
											$m2= $row9[ 'FinalMark' ];
											$avg2=$m1+$m2;
//											total for eot
											$m1= $row7[ 'FinalMark' ];
											$m2= $row10[ 'FinalMark' ];
											$avg3=$m1+$m2;
											$finalavg=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="2" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												if($finalavg >= 50){
													echo "1";
													$ss=1;
												}else{
													echo "0";
													$ss=0;
												}
												?>
											</td>
											<td rowspan="2" align="center" style="color: black;">
												<?php
												if($ss==1){
													echo "Good work done";
												}else{
													echo "Practise more";
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php
												echo $pa[ 1 ];
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			subsidiary end-->
										<!--																			Gp-->
										<tr>
											<td style="border-right: 0;color: black; padding-top: 30px;">
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.GP=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresult.Marks FROM tblresult WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk1=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresultmt.Marks FROM tblresultmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk2=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresulteot.Marks FROM tblresulteot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk3=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td align="center" style="border-left: 0;border-bottom: 0;border-top: 0; color: black; font-size: 30px;">
												<?php
												$gpf=($mk1+$mk2+$mk3)/3;
												if($gpf>=50){
													echo "1";
													$gps=1;
												}else{
													echo "0";
													$gps=0;
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												if($gps==1){
													echo "Congratulations";
												}else{
													echo "Work smarter";
												}
												?>
											</td>
										</tr>
										<!--																			GP end-->
										<!--																			compiled report info-->
										<tr>
											<td colspan=3 style="color: black;">
												Principal Passes
											</td>
											<td colspan=3 style="color: black">
												Subsidiary
											</td>
											<td colspan=2 style="color: black;">
												Total Points
											</td>
											<td style="color: black; border-right: 0;border-bottom: 0;">
											</td>
											<td style="color: black;border-left: 0;border-bottom: 0;">
											</td>
										</tr>

										<tr>
											<td colspan=3 style="color: black;">
												<?php
												$tpp=$pp1+$pp2+$pp3;
													echo $tpp;
												?>
											</td>
											<td colspan=3 style="color: black">
												<?php
												$tts=$ss+$gps;
												echo $tts;
												?>
											</td>
											<td colspan=2 style="color: black;">
												<?php											
													$ttp=$tp1+$tp2+$tp3+$tts;
												echo $ttp;
												?>
											</td>
											<td style="color: black; border-right: 0;border-top: 0;">
											</td>
											<td style="color: black;border-left: 0;border-top: 0;">
											</td>
										</tr>
										
										<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td colspan="9" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
										<?php
											if($ttp >= 15){
												echo "Keep the good work up";
											}else if($ttp >=10 && $ttp <= 14){
												echo "Keep pushing, you will make it";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Settle for academics and get better results";
											}else if($ttp <= 6){
												echo "Consult your teachers always";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
											<?php
											if($ttp >= 15){
												echo "Continue achieving good grades, nice work";
											}else if($ttp >=10 && $ttp <= 14){
												echo "This is promising";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Tighten your stockings when it comes to  academics";
											}else if($ttp <= 6){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) :
										</td>
										<td colspan="3" style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tblastudents WHERE RollNo='$sRoll';";
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
										<td colspan="4" style="color: black; border-right: 0">
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
                              
<td colspan="11" align="center" style="color: black;"><a href="pdfa2.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
										<!--																		compiled report info end-->
									</tbody>
								</table>

							</div>
						</div>

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
<div id="AlevelT3" class="tab-pane animated custon-tab-style1">
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
						<div class="col-lg-2">
							<?php
							$sRoll = $_SESSION[ 'ARid' ];
							$sql = "SELECT tblastudents.FullName,tblastudents.Gender,tblastudents.profilepic,tblastudents.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblastudents.CombinationId,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tblastudents join tblclasses on tblclasses.id=tblastudents.ClassId join tblstreams on tblstreams.id=tblastudents.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE RollNo='$sRoll';";
							$result = mysqli_query( $conn, $sql );
							$row = mysqli_fetch_assoc( $result );
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
								<p style="color: black;"><span style="font-size: 16px;font-weight: bold">Term: </span>Three</p>
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
											<th colspan=2>Subject</th>
											<th>B.O.T</th>
											<th>Paper Grade</th>
											<th>M.T</th>
											<th>Paper Grade</th>
											<th>E.O.T</th>
											<th>Paper Grade</th>
											<th>Subject Grade</th>
											<th>Teacher's comment</th>
										</tr>
									</thead>
									<tbody>
										<!--																			1st subject-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId1=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
											$gg=array();
											$avgs2=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs2==""){
													$pp1=0;
													$tp1=0;
												}else if($avgs2 >=0 && $avgs2 <=39){
											echo "F";
													$g='F';
													$pp1=0;
													$tp1=0;
											}else if($avgs2 >=40 && $avgs2 <=44){
											echo "O";
													$g='O';
													$pp1=0;
													$tp1=1;
											}else if($avgs2 >=45 && $avgs2 <=55){
											echo "E";
													$g='E';
													$pp1=1;
													$tp1=2;
											}else if($avgs2 >=56 && $avgs2 <=65){
											echo "D";
													$g='D';
													$pp1=1;
													$tp1=3;
											}else if($avgs2 >=66 && 
													 $avgs2 <=74){
											echo "C";
													$g='C';
													$pp1=1;
													$tp1=4;
											}else if($avgs2 >=75 && 
													 $avgs2 <=79){
											echo "B";
													$g='B';
													$pp1=1;
													$tp1=5;
											}else if($avgs2 >=80){
											echo "A";
													$g='A';
													$pp1=1;
													$tp1=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--1st subject end-->
										<!--second subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId2=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0; border-top: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs1=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs1==""){
													$pp2=0;
													$tp2=0;
												}else if($avgs1 >=0 && $avgs1 <=39){
											echo "F";
													$g='F';
													$pp2=0;
													$tp2=0;
											}else if($avgs1 >=40 && $avgs1 <=44){
											echo "O";
													$g='O';
													$pp2=0;
													$tp2=1;
											}else if($avgs1 >=45 && $avgs1 <=55){
											echo "E";
													$g='E';
													$pp2=1;
													$tp2=2;
											}else if($avgs1 >=56 && $avgs1 <=65){
											echo "D";
													$g='D';
													$pp2=1;
													$tp2=3;
											}else if($avgs1 >=66 && 
													 $avgs1 <=74){
											echo "C";
													$g='C';
													$pp2=1;
													$tp2=4;
											}else if($avgs1 >=75 && 
													 $avgs1 <=79){
											echo "B";
													$g='B';
													$pp2=1;
													$tp2=5;
											}else if($avgs1 >=80){
											echo "A";
													$g='A';
													$pp2=1;
													$tp2=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			second subject end-->
										<!--																		THird subject-->
											<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=3>
												<?php
												$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId3=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												echo $row3[ 'SubjectName' ];
												?>
											</td>
											<td style="border-bottom: 0;color: black">
												<?php
												$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$date = date( "d/m/y" );
												$time = date( "h : i a" );
												$duedt = explode( "/", $date );
												$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
												$years = ( int )date( 'Y', $week );
											

//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=3;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=3;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=3;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
//											eot end
//											paper 3 end
//											total for bot
											$m1= $row5[ 'fn1' ];
											$m2= $row8[ 'fn1' ];
											$m3= $row11[ 'fn1' ];
											$avg=$m1+$m2+$m3;
//											total for mt
											$m1= $row6[ 'fn1' ];
											$m2= $row9[ 'fn1' ];
											$m3= $row12[ 'fn1' ];
											$avg2=$m1+$m2+$m3;
//											total for eot
											$m1= $row7[ 'fn1' ];
											$m2= $row10[ 'fn1' ];
											$m3= $row13[ 'fn1' ];
											$avg3=$m1+$m2+$m3;
												$avgs3=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="3" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												
												if($avgs3==""){
													$pp3=0;
													$tp3=0;
												}else if($avgs3 >=0 && $avgs3 <=39){
											echo "F";
													$g='F';
													$pp3=0;
													$tp3=0;
											}else if($avgs3 >=40 && $avgs3 <=44){
											echo "O";
													$g='O';
													$pp3=0;
													$tp3=1;
											}else if($avgs3 >=45 && $avgs3 <=55){
											echo "E";
													$g='E';
													$pp3=1;
													$tp3=2;
											}else if($avgs3 >=56 && $avgs3 <=65){
											echo "D";
													$g='D';
													$pp3=1;
													$tp3=3;
											}else if($avgs3 >=66 && 
													 $avgs3 <=74){
											echo "C";
													$g='C';
													$pp3=1;
													$tp3=4;
											}else if($avgs3 >=75 && 
													 $avgs3 <=79){
											echo "B";
													$g='B';
													$pp3=1;
													$tp3=5;
											}else if($avg >=80){
											echo "A";
													$g='A';
													$pp3=1;
													$tp3=6;
											}
												?>
											</td>
											<td rowspan="3" style="color: black; border-bottom: 0">
												<?php
												$gg[]=$g;
											$tmp = array_count_values($gg);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												echo "Keep this up";
												}else if($g == "B"){
												echo "Good work";
												}else if($g == "C"){
												echo "Fairly good work";
												}else if($g == "D"){
												echo "You can do better";
												}else if($g == "O"){
												echo "Aim higher";
												}else if($g == "E"){
												echo "Work more harder";
												}else if($g == "F"){
												echo "Tripple your effort";
												}
												}else if($cnt == 2){
												if($g == "A"){
												echo "Very impressive work";
												}else if($g == "B"){
												echo "Determined student";
												}else if($g == "C"){
												echo "You are getting there";
												}else if($g == "D"){
												echo "average performance";
												}else if($g == "O"){
												echo "You can achieve more";
												}else if($g == "E"){
												echo "Concentrate on studies";
												}else if($g == "F"){
												echo "Pull up";
												}
												}else if($cnt == 3){
												if($g == "A"){
												echo "Excellent Work";
												}else if($g == "B"){
												echo "Keep on with the smart work";
												}else if($g == "C"){
												echo "You can do it";
												}else if($g == "D"){
												echo "Never give up";
												}else if($g == "O"){
												echo "Read more";
												}else if($g == "E"){
												echo "Work harder than this";
												}else if($g == "F"){
												echo "Always consult";
												}
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0 ;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[1]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-top: 0;color: black;" valign=middle>
												<?php echo $pa[2]; ?>
											</td>
											<td style="color: black;">
												<?php
												echo $row11[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row12[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row13[ 'fn1' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			third subject end-->
										<!--																			subsidiary-->
										<tr>
											<td style="border-right: 0;color: black;padding: 70px 0px 15px 2px;" rowspan=2>
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.Subsidiary=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												echo $pa[ 0 ];
												?>
											</td>
											<?php
												$paid1 = $paid[0];
//											bot paper1
												$sql5 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
//											mt paper 1
											$sql6 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
//											eot paper1
											$sql7 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
											$paid2 = $paid[1];
//											bot paper2
												$sql8 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
//											mt paper 2
											$sql9 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
//											eot paper2
											$sql10 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid2";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
//											total for bot
											$m1= $row5[ 'FinalMark' ];
											$m2= $row8[ 'FinalMark' ];
											$avg=$m1+$m2;
//											total for mt
											$m1= $row6[ 'FinalMark' ];
											$m2= $row9[ 'FinalMark' ];
											$avg2=$m1+$m2;
//											total for eot
											$m1= $row7[ 'FinalMark' ];
											$m2= $row10[ 'FinalMark' ];
											$avg3=$m1+$m2;
											$finalavg=($avg+$avg2+$avg3)/3;
												?>
											<td style="color: black;">
												<?php
												echo $row5[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row6[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row7[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
											<td rowspan="2" align="center" style="border-left: 0;border-bottom: 0; border-top: 0;color: black; font-size: 30px;">
												<?php
												if($finalavg >= 50){
													echo "1";
													$ss=1;
												}else{
													echo "0";
													$ss=0;
												}
												?>
											</td>
											<td rowspan="2" align="center" style="color: black;">
												<?php
												if($ss==1){
													echo "Good work done";
												}else{
													echo "Practise more";
												}
												?>
											</td>
										</tr>
										<tr>
											<td style="border-left: 0;border-bottom: 0;border-top: 0;color: black;" valign=middle>
												<?php
												echo $pa[ 1 ];
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row8[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg==""){

												}else if($avg >=0 && $avg <=39){
											echo "F9";
											}else if($avg >=40 && $avg <=44){
											echo "P8";
											}else if($avg >=45 && $avg <=49){
											echo "P7";
											}else if($avg >=50 && $avg <=54){
											echo "C6";
											}else if($avg >=55 && $avg <=59){
											echo "C5";
											}else if($avg >=60 && $avg <=65){
											echo "C4";
											}else if($avg >=66 && 
													 $avg <=74){
											echo "C3";
											}else if($avg >=75 && 
													 $avg <=79){
											echo "D2";
											}else if($avg >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row9[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg2==""){

												}else if($avg2 >=0 && $avg2 <=39){
											echo "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											echo "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											echo "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											echo "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											echo "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											echo "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											echo "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											echo "D2";
											}else if($avg2 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												echo $row10[ 'FinalMark' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												if($avg3==""){

												}else if($avg3 >=0 && $avg3 <=39){
											echo "F9";
											}else if($avg3 >=40 && $avg3 <=44){
											echo "P8";
											}else if($avg3 >=45 && $avg3 <=49){
											echo "P7";
											}else if($avg3 >=50 && $avg3 <=54){
											echo "C6";
											}else if($avg3 >=55 && $avg3 <=59){
											echo "C5";
											}else if($avg3 >=60 && $avg3 <=65){
											echo "C4";
											}else if($avg3 >=66 && 
													 $avg3 <=74){
											echo "C3";
											}else if($avg3 >=75 && 
													 $avg3 <=79){
											echo "D2";
											}else if($avg3 >=80){
											echo "D1";
											}
												?>
											</td>
										</tr>
										<!--																			subsidiary end-->
										<!--																			Gp-->
										<tr>
											<td style="border-right: 0;color: black; padding-top: 30px;">
												<?php
											$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.GP=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												echo $row9['SubjectCode'] ;
												?>
											</td>
											<td style="border-left: 0;border-bottom: 0; color: black">
												<?php
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresult.Marks FROM tblresult WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk1=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresultmt.Marks FROM tblresultmt WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk2=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td style="color: black;">
												<?php
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresulteot.Marks FROM tblresulteot WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												echo $row5[ 'Marks' ];
												$mk3=$row5[ 'Marks' ];
												?>
											</td>
											<td style="color: black;">
												<?php
												$avg6 = $row5[ 'Marks' ];
												if($avg6==""){

												}else if($avg6 >=0 && $avg6 <=39){
											echo "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											echo "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											echo "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											echo "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											echo "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											echo "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											echo "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											echo "D2";
											}else if($avg6 >=80){
											echo "D1";
											}
												?>
											</td>
											<td align="center" style="border-left: 0;border-bottom: 0;border-top: 0; color: black; font-size: 30px;">
												<?php
												$gpf=($mk1+$mk2+$mk3)/3;
												if($gpf>=50){
													echo "1";
													$gps=1;
												}else{
													echo "0";
													$gps=0;
												}
												?>
											</td>
											<td style="color: black;">
												<?php
												if($gps==1){
													echo "Congratulations";
												}else{
													echo "Work smarter";
												}
												?>
											</td>
										</tr>
										<!--																			GP end-->
										<!--																			compiled report info-->
										<tr>
											<td colspan=3 style="color: black;">
												Principal Passes
											</td>
											<td colspan=3 style="color: black">
												Subsidiary
											</td>
											<td colspan=2 style="color: black;">
												Total Points
											</td>
											<td style="color: black; border-right: 0;border-bottom: 0;">
											</td>
											<td style="color: black;border-left: 0;border-bottom: 0;">
											</td>
										</tr>

										<tr>
											<td colspan=3 style="color: black;">
												<?php
												$tpp=$pp1+$pp2+$pp3;
													echo $tpp;
												?>
											</td>
											<td colspan=3 style="color: black">
												<?php
												$tts=$ss+$gps;
												echo $tts;
												?>
											</td>
											<td colspan=2 style="color: black;">
												<?php											
													$ttp=$tp1+$tp2+$tp3+$tts;
												echo $ttp;
												?>
											</td>
											<td style="color: black; border-right: 0;border-top: 0;">
											</td>
											<td style="color: black;border-left: 0;border-top: 0;">
											</td>
										</tr>
										
										<tr>
										<td colspan="2" style="border-right: 0">
											`
										</td>
										<td colspan="9" style="color: black; border-left: 0">

										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Class Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
										<?php
											if($ttp >= 15){
												echo "Keep the good work up";
											}else if($ttp >=10 && $ttp <= 14){
												echo "Keep pushing, you will make it";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Settle for academics and get better results";
											}else if($ttp <= 6){
												echo "Consult your teachers always";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="4" style="color: black; border-right: 0">
											Head Teacher's comment :
										</td>
										<td colspan="7" style="color: black; border-left: 0;">
											<?php
											if($ttp >= 15){
												echo "Continue achieving good grades, nice work";
											}else if($ttp >=10 && $ttp <= 14){
												echo "This is promising";
											}else if($ttp >=7 && $ttp <= 9){
												echo "Tighten your stockings when it comes to  academics";
											}else if($ttp <= 6){
												echo "Alot more effort and seriousness is needed";
											}
											?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="color: black; border-right: 0">
											Unpaid fees(ugx) :
										</td>
										<td colspan="3" style="color: black; border-left: 0">
											<?php
											$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tblastudents WHERE RollNo='$sRoll';";
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
										<td colspan="4" style="color: black; border-right: 0">
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
                              
<td colspan="11" align="center" style="color: black;"><a href="pdfa3.php"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" ></i></a></td>
                                                             </tr>
										<!--																		compiled report info end-->
									</tbody>
								</table>

							</div>
						</div>

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
</body>

</html>