<?php
include_once 'includes/db.php';
session_start();
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
										<h2>Manage Added Subjects to classes</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Subjects</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Manage subject and class combinations</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->
<!--		for a level-->
		<?php
		if ( isset( $_GET[ 'acid' ] ) ) {
			$acid2 = intval( $_GET[ 'acid' ] );
			$status2 = 1;
			$sqlq2 = "update tblacombination set Status=$status2 where id=$acid2 ";
			mysqli_query( $conn, $sqlq2 );
		}

		// for Deactivate Subject
		if ( isset( $_GET[ 'did' ] ) ) {
			$did2 = intval( $_GET[ 'did' ] );
			$statuss2 = 0;
			$sqlq3 = "update tblacombination set Status=$statuss2 where id=$did2 ";
			mysqli_query( $conn, $sqlq3 );
		}
		?>
<!--		for s1 n 2-->
		<?php
		if ( isset( $_GET[ 'acid2' ] ) ) {
			$acid = intval( $_GET[ 'acid2' ] );
			$status = 1;
			$sql4 = "update tblsubjectcombination set Status=$status where id=$acid ";
			mysqli_query( $conn, $sql4 );
		}

		// for Deactivate Subject
		if ( isset( $_GET[ 'did2' ] ) ) {
			$did = intval( $_GET[ 'did2' ] );
			$statuss = 0;
			$sql1 = "update tblsubjectcombination set Status=$statuss where id=$did ";
			mysqli_query( $conn, $sql1 );
		}
		?>
		<!--		start of tab-->
		<div class="admintab-wrap mg-b-40">
			<ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
				<li class="active"><a data-toggle="tab" href="#Alevel"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>S.5 &amp; S.6</a>
				</li>
				<li><a data-toggle="tab" href="#Tabs4s3"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>S.4 &amp; S.3</a>
				</li>
				<li><a data-toggle="tab" href="#Tabs2s1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>S.2 &amp; S.1</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="Alevel" class="tab-pane in active animated flipInX custon-tab-style1">
					<!--										start of a level data-->

					<!-- Static Table Start -->
		<div class="data-table-area mg-b-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="sparkline13-list shadow-reset">
							<div class="sparkline13-hd">
								<div class="main-sparkline13-hd">
									<h1>View <span class="table-project-n">Combinations</span></h1>
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
												<th>Combination</th>
												<th>Subject one</th>
												<th>Subject two</th>
												<th>Subject three</th>
												<th>Subsidiary</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$sql2 = "SELECT tblacombination.id,tblacombination.CombName,tblacombination.Subsidiary,tblacombination.Status,tblsubjects.SubjectName FROM tblacombination join tblsubjects on tblsubjects.id = tblacombination.SubjectId1;";
												$result2 = mysqli_query($conn,$sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)){
												echo "<tr>"
												?>
											<td>
												<?php echo $row2['CombName'] ?>
											</td>
											<td>
												<?php echo $row2['SubjectName'] ?>
											</td>
											<td>
												<?php echo $row2['SubjectName'] ?>
											</td>
											<td>
												<?php echo $row2['SubjectName'] ?>
											</td>
											<td>
												<?php echo $row2['SubjectName'] ?>
											</td>
											<td>
												<?php if($row2['Status']==1){
													echo 'Active';
												}else{
													echo 'Inactive';
												} ?>
											</td>
											<td class="datatable-ct">
												<?php if($row2['Status']=='0')
												{ ?>
												<a href="managecombination.php?acid=<?php echo $row2['id'] ?>" style="color: #4E52F3"> <i class="fa fa-check" title="Activate Record"></i></a>
												<?php
												} else {
													?>
												<a href="managecombination.php?did=<?php echo $row2['id'] ?>" style="color: #4E52F3"> <i class="fa fa-times" title="Deactivate Record"></i></a>
												<?php
												}
												?>
											</td>
											<?php
											echo "</tr>";
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
					
					<!--										end of a level data-->
				</div>
				<div id="Tabs4s3" class="tab-pane animated flipInX custon-tab-style1">
					<!--										start of s3 n s4 data-->

					<!-- Static Table Start -->
		<div class="data-table-area mg-b-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="sparkline13-list shadow-reset">
							<div class="sparkline13-hd">
								<div class="main-sparkline13-hd">
									<h1>View <span class="table-project-n">Combination</span> Info</h1>
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
												<th>Student</th>
												<th>Class</th>
												<th>Subject</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$sql = "SELECT tblsubjectcombination.id, tblsubjectcombination.Status, tblclasses.NickName,tblsubjects.SubjectCode FROM tblsubjectcombination join tblclasses on tblclasses.id = tblsubjectcombination.ClassId join tblsubjects on tblsubjects.id = tblsubjectcombination.SubjectId";
												$result = mysqli_query($conn,$sql);
												 while ( $row = mysqli_fetch_assoc($result)){
												echo "<tr>"
												?>
											<td>
												<?php echo $row['NickName'] ?>
											</td>
											<td>
												<?php echo $row['NickName'] ?>
											</td>
											<td>
												<?php echo $row['SubjectCode'] ?>
											</td>
											<td>
												<?php if($row['Status']==1){
													echo 'Active';
												}else{
													echo 'Inactive';
												} ?>
											</td>
											<td class="datatable-ct">
												<?php if($row['Status']=='0')
												{ ?>
												<a href="managecombination.php?acid1=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-check" title="Activate Record"></i></a>
												<?php
												} else {
													?>
												<a href="managecombination.php?did1=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-times" title="Deactivate Record"></i></a>
												<?php
												}
												?>
											</td>
											<?php
											"</tr>";
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
					
					<!--										end of s3 n s4 data-->
				</div>
				<div id="Tabs2s1" class="tab-pane animated flipInX custon-tab-style1">
					<!--										start of s1 n s2 data-->

					<!-- Static Table Start -->
		<div class="data-table-area mg-b-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="sparkline13-list shadow-reset">
							<div class="sparkline13-hd">
								<div class="main-sparkline13-hd">
									<h1>View <span class="table-project-n">Combination</span> Info</h1>
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
												<th>Class</th>
												<th>Subject</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$sql = "SELECT tblsubjectcombination.id, tblsubjectcombination.Status, tblclasses.ClassName,tblsubjects.SubjectName FROM tblsubjectcombination join tblclasses on tblclasses.id = tblsubjectcombination.ClassId join tblsubjects on tblsubjects.id = tblsubjectcombination.SubjectId WHERE tblsubjectcombination.ClassId=1 OR tblsubjectcombination.ClassId=2";
												$result = mysqli_query($conn,$sql);
												 while ( $row = mysqli_fetch_assoc($result)){
												echo "<tr>"
												?>
											<td>
												<?php echo $row['ClassName'] ?>
											</td>
											<td>
												<?php echo $row['SubjectName'] ?>
											</td>
											<td>
												<?php if($row['Status']==1){
													echo 'Active';
												}else{
													echo 'Inactive';
												} ?>
											</td>
											<td class="datatable-ct">
												<?php if($row['Status']=='0')
												{ ?>
												<a href="managecombination.php?acid2=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-check" title="Activate Record"></i></a>
												<?php
												} else {
													?>
												<a href="managecombination.php?did2=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-times" title="Deactivate Record"></i></a>
												<?php
												}
												?>
											</td>
											<?php
											"</tr>";
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
					
					<!--										end of a level data-->
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