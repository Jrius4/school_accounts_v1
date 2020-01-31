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
										<h2>Create clases</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
										<li><span class="bread-blod">Manage clases</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcome End-->

		<!-- compose mail start -->
		<div class="inbox-mailbox-area mg-b-40">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
									<ul class="nav nav-tabs">
										<li>
											<h4 class="Inbox-category-ad"><i class="fa fa-folder-o" aria-hidden="true"></i> Folder</h4>
										</li>
										<li><a href="inbox.php"><span class="inbox-icon"><i class="fa fa fa-inbox "></i></span> Inbox <span class="count-inbox">3</span></a>
										</li>
										<li class="active"><a data-toggle="tab" href="#composemail"><span class="inbox-icon"><i class="fa fa fa-inbox "></i></span> Compose Mail</a>
										</li>

									</ul>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="tab-content">

									<div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
										<div class="view-mail-wrap">
											<div class="mail-title">
												<h2>Compose Mail</h2>
												<div class="view-mail-action">
													<a class="compose-discard-bt" href="inbox.php"><i class="fa fa-times"></i> Discard</a>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-lg-2">
															<div class="compose-email-to">
																<span>To :</span>
															</div>
														</div>
														<div class="col-lg-10">
															<div class="compose-multiple-email">
																<input type="email" name="recipient_email" id="recipient_email" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-lg-2">
															<div class="compose-email-to compose-subject-title">
																<span>Subject :</span>
															</div>
														</div>
														<div class="col-lg-10">
															<div class="compose-multiple-email compose-subject-email">
																<input type="text"/>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="text-editor-compose">
														<div id="summernote5">
															<div class="note-editable panel-body" contenteditable="true" style="height: 400px;">
																<h2 style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px;">
																	<span style="font-weight: 600;">Click here to type message</span>
																</h2>
															
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div id="dropzone1">
														<form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
															<div class="dz-message needsclick download-custom">
																<span class="adminpro-icon adminpro-cloud-computing-down download-icon"></span>
																<h2>Drop files here or click to upload.</h2>
																<p><span class="note needsclick"></span>
																</p>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="view-mail-reply-list">
														<ul class="view-mail-forword">
															<li><a href="#"><i class="fa fa-reply"></i> Send</a>
															</li>
															<li><a class="compose-discard-bt" href="#"><i class="fa fa-times"></i> Discard</a>
															</li>
															<li><a class="compose-draft-bt" href="#"><i class="fa fa-pencil"></i> Draft</a>
															</li>
														</ul>
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
	<!-- main JS
         ============================================ -->
	<script src="js/main.js"></script>
</body>

</html>