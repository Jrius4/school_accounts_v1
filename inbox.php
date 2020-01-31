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

		<?php include('headmasternav.php'); ?>

		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 small-dn">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcome-list map-mg-t-40-gl shadow-reset">
							<div class="row">
								<div class="col-lg-6">
									<div class="breadcome-heading">
										<h2>Inbox</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><a href="#">Mailbox</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Inbox</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<!-- Mail start -->
		<div class="inbox-mailbox-area mg-b-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
									<div class="compose-email">
										<a href="compose-mail.php">Compose mail</a>
									</div>
									<ul class="nav nav-tabs">
										<li>
											<h4 class="Inbox-category-ad"><i class="fa fa-folder-o" aria-hidden="true"></i> Folder</h4>
										</li>
										<li class="active"><a data-toggle="tab" href="#inbox"><span class="inbox-icon"><i class="fa fa fa-inbox "></i></span> Inbox <span class="count-inbox">3</span></a>
										</li>
										<li><a href="compose-mail.php"><span class="inbox-icon"><i class="fa fa fa-inbox "></i></span> Compose Mail</a>
										</li>
									</ul>
								</div>
							</div>
									
									  <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h2>Inbox</h2>
                                            </div>
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar1">
                                                </div>
                                                <table id="table7" data-toggle="table" data-pagination="true" data-search="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="name">Name</th>
                                                            <th data-field="email">Title</th>
                                                            <th data-field="phone">Messages</th>
                                                            <th data-field="company">File</th>
                                                            <th data-field="complete">Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="new-email">
                                                            <td>Google</td>
                                                            <td>Account Security Alert</td>
                                                            <td>Your Google Account was just signed...</td>
                                                            <td><i class="fa fa-close"></i>
                                                            </td>
                                                            <td>10.00 pm</td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
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
	</div>


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
	<!-- map JS
		============================================ -->
	<script src="js/data-table/bootstrap-table.js"></script>
	<script src="js/data-table/tableExport.js"></script>
	<script src="js/data-table/data-table-active.js"></script>
	<script src="js/data-table/bootstrap-table-editable.js"></script>
	<script src="js/data-table/bootstrap-editable.js"></script>
	<script src="js/data-table/bootstrap-table-resizable.js"></script>
	<script src="js/data-table/colResizable-1.5.source.js"></script>
	<script src="js/data-table/bootstrap-table-export.js"></script>
	<!--  dropzone JS
		============================================ -->
	<script src="js/dropzone.js"></script>
	<!-- multiple email JS
		============================================ -->
	<script src="js/multiple-email/multiple-email-active.js"></script>
	<!-- summernote JS
		============================================ -->
	<script src="js/summernote.min.js"></script>
	<script src="js/summernote-active.js"></script>
	<!-- main JS
         ============================================ -->
	<script src="js/main.js"></script>
</body>

</html>