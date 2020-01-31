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
										<h2>Manage Paper Percentages in a subject</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Paper Percentage</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Manage</span> </li>
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
									<h1>View <span class="table-project-n">Percentage</span> Info</h1>
									<div class="sparkline13-outline-icon">
										<span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
										<span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
									</div>
								</div>
							</div>
							<div class="sparkline13-graph">
											<?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl, "paper=greaterthan100") == true){
                    echo "<p style='color : red; font-size:20px;'>Total Percentage for both papers is greater than 100. it should equal 100</p>";
                }else if(strpos($fullUrl, "paper=lessthan100") == true){
                    echo "<p style='color : red; font-size:20px;'>Total Percentage for both papers is less than 100. it should equal 100</p>";
                }else if(strpos($fullUrl, "paper=success") == true){
                    echo "<p style='color : green; font-size:20px;'>Successfully set paper percentage for this subject</p>";
                }else if(strpos($fullUrl, "paper=notset") == true){
                    echo "<p style='color : red; font-size:20px;'>Fatal Error. Contact system administrator for assistance</p>";
                }
                ?>
								<div class="datatable-dashv1-list custom-datatable-overright">
									<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
										<thead>
											<tr>
												<th>Subject</th>
												<th>Paper</th>
												<th>Percentage</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$tid=$_SESSION['pptid'];
												$sql = "SELECT tblSubjects.SubjectName,tblpapers.PaperName,tblsetpp.id,tblsetpp.Percentage FROM tblsetpp join tblsubjects on tblsubjects.id=tblsetpp.SubjectId inner join tblpapers on tblpapers.id=tblsetpp.PaperId inner join teachersubjectcombination on teachersubjectcombination.SubjectId=tblsetpp.SubjectId WHERE teachersubjectcombination.TeacherId=$tid";
												$result = mysqli_query($conn,$sql);
												 while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo   "<tr>".
                                    "<td>".$row['SubjectName']."</td>".
										"<td>".$row['PaperName']."</td>".
										"<td>".$row['Percentage']."</td>".
										"<td class='datatable-ct'>"
										?>
											<a href="editpaperpercentage.php?perid=<?php echo $row['id']; ?>" style='color: #4E52F3'><i class="fa fa-edit" title="Edit Record"></i> </a>
                                  <?php echo "</td>"."</tr>";
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