<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords"
		content="indian air force,iaf,IAF,Air Force, Central airmen selecdtion board,airmen,casb,AFCAT,airforce test,air force entrance test,career airforce,careerairforce,cdac,iaf officer,join indian air force,airman">
	<meta name="description" content="Join Indian Air Force">
	<title>IAF</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="assets/css/mobile-menu.css" rel="stylesheet">
	<!-- font-awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Flat Icon -->
	<link href="assets/fonts/flaticon/flaticon.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Limelight|Rancho" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/w3.css">
	<link rel="stylesheet" href="assets/css/customcss.css" type="text/css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/iaf.png">
	<style type="text/css">
		
		.modal-content {
			padding: 0;
		}

		.modal-header {
			background: #111;
		}

		.modal-backdrop {
			position: unset;
		}

		.modal-body {
			overflow-y: scroll;
			font-size: 18px;
		}

		.modal-dialog {
			width: 50%
		}

		.marquee span {
			display: inline-block;
			white-space: nowrap;
			padding-left: 100%;
			will-change: transform;
			/* show the marquee just outside the paragraph */
			animation: marquee 95s linear infinite;
		}

		.marquee span:hover {
			animation-play-state: paused
		}

		/* Make it move */
		@keyframes marquee {
			0% {
				transform: translate(0, 0);
			}

			100% {
				transform: translate(-100%, 0);
			}
		}

		/* @keyframes marquee { 
	0% { transform: translate(0, 0); }
	100%{ transform: translate(-100%, 0); }
} */
		@media (max-width :768px) {
			.modal-dialog {
				width: 75%;
				margin-left: auto;
				margin-right: auto;
			}
		}

		/* Respect user preferences about animations */
		@media (prefers-reduced-motion : reduce) {
			.marquee {
				white-space: normal
			}

			.marquee span {
				animation: none;
				padding-left: 0;
			}
		}

		h4 {
			font-weight: 700;
			
		}

		@media (max-width :768px) {
			.w3-modal-content {
				margin-top: 40%;
			}
		}

		ul.circle {
			list-style-type: circle !important;
		}

		/* This will style any <img> element in .parent div */
		.parent video {
			width: 100%;
		}
	</style>
</head>

<body onload="display_ct();indexActive()">
	<div id="main-wrapper">
		<div class="uc-mobile-menu-pusher">
			<div class="content-wrapper">
				<!-- Header Top -->
				<div id="iafname" class="container-fluid d-none d-md-flex d-lg-flex"
					style="background: linear-gradient(to bottom,#63A4FF,#83EAF1);">
					<div class="col-sm-8 col-md-8 ">
						<div class="navbar-header left-align left-padding" style="clear: both;">
							<a class="logo pull-left" href="index.php"><img src="img/iaf.png"
									style="height: 65px; margin-top: 5px;"></a>
							<span class="name pull-left">
								<h4 class="txt"
									style="color: #022261; text-weight: bold; margin-left: 15px; margin-top: 5px; font-weight: 700;">
									INDIAN AIR FORCE<br>भारतीय वायु सेना
								</h4>
							</span>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 ">
						<div class="navbar-header right-align" style="margin-left: 0px;">
							<div>

								<a class="logo pull-right" href="https://careerindianairforce.cdac.in/"><img
										src="img/logo/g20-logo.png"
										style="height: 56px; margin-top: 5px; margin-left: 10px;"></a>


								<a class="logo pull-right" href="https://careerindianairforce.cdac.in/"><img
										src="img/logo/75.png" style="height: 56px; margin-top: 5px;"></a>

								<!-- <span
					class="name pull-right">
					<h4 class="txt"
						style="color: #022261; text-weight: bold; margin-right: 15px; margin-top: 5px; font-weight: 700; text-align: right;">
						AGNIVEERVAYU<br> <span>अग्निवीरवायु</span>
					</h4>
				</span> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Header end -->
				<!-- .navbar-top -->
				<nav class="navbar navbar-expand navbar-dark navbar-default"
					style="border: 1px solid gray; padding-top: 2px; padding-bottom: 2px; background:#112;">
					<div class="container div-width">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="row d-flex d-lg-none" style="">
							<div class="col-sm-6 col-10 "
								style="color: white; padding-top: 10px; padding-left: 0px; clear: both;">
								<img style="display: inline; padding-left: 2px;" alt=""
									src="img/logo/rsz_1iaf-logo.png"> <b>IAF</b> - CASB
							</div>
							<div class="col-sm-6 col-2 " style="float: left;">
								<div class="navbar-header ">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
										<span class="icon-bar"></span> <span class="icon-bar"></span>
									</button>
								</div>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse justify-content-center" id="navbarNav"
							style="background:#112;">
							<ul class="navbar-nav" >
								<li class="nav-item"><a class="nav-link <?php echo $home; ?>" href="index.php" style="font-size:1em;">Home</a>
								</li>
								<!-- <li style="color: white !important;" class="nav-item dropdown"><a href="#"
										class="nav-link dropdown-toggle iafActive" data-bs-toggle="dropdown"
										aria-expanded="false" style="font-size:1em;">IAF</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="img/asc/asc1.php" >Rank
												Structure</a></li>
										<li><a class="dropdown-item" href="#">Training
												Institutes
											</a></li>
										<li><a class="dropdown-item" href="#">Gallantry
												Awards</a></li>
									</ul>
								</li> -->

								<li style="color: white !important;" class="nav-item dropdown"><a href="#"
										class="nav-link dropdown-toggle iafActive" data-bs-toggle="dropdown"
										aria-expanded="false" style="font-size:1em;">Career</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Overview</a></li>
										<li><a class="dropdown-item" href="#">Career - NDA
											</a></li>
										<li><a class="dropdown-item" href="#">Career - As per Branches</a></li>
										<li><a class="dropdown-item" href="#">Career - As per Qualification</a></li>

									</ul>
								</li>
								<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle casbActive"
										data-bs-toggle="dropdown" aria-expanded="false" style="font-size:1em;">AFCAT</a>
									<ul class="dropdown-menu">
										<li><a href="#">About</a></li>
										<li><a href="#">History of IAF</a></li>
										<li><a href="#">Marshal of IAF</a></li>
										<li><a href="#">Legends of IAF</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle casbActive"
										data-bs-toggle="dropdown" aria-expanded="false" style="font-size:1em;">Life in IAF</a>
									<ul class="dropdown-menu">
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Growth</a></li>
										<li><a href="#">Live It</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle airmanActive"
										data-bs-toggle="dropdown" aria-expanded="false" style="font-size:1em;">SELECTION</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Selection Process</a></li>
										<li><a class="dropdown-item" href="#">Eligibility Criteria</a></li>
										<li><a class="dropdown-item" href="#">Physical and Medical Standards</a></li>
										<li><a class="dropdown-item" href="#">Pay
												and Perks</a></li>
										<li><a class="dropdown-item" href="#">Guidelines for Candidates</a></li>
									</ul>
								</li>

								<!-- <li class="nav-item"><a class="nav-link contactActive" href="#" style="font-size:1em;">Training</a></li> -->

								<li class="nav-item dropdown"><a href="#"
										class="nav-link dropdown-toggle candidateActive" data-bs-toggle="dropdown"
										aria-expanded="false" style="font-size:1em;">CANDIDATE</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="dbfiles/admin_login/admin/adminlogin.php" target="_blank">Admin Login</a></li>
										<li><a class="dropdown-item" href="dbfiles/user_login/candidate/userlogin.php" target="_blank">Candidate Login</a></li>
										<li><a class="dropdown-item" href="dbfiles/user_login/candidate/user_registration/candidate/register.php" target="_blank">AFCAT 01/2023</a></li>
										<li><a class="dropdown-item" href="dbfiles/user_login/candidate/user_registration/candidate/register.php" target="_blank">AFCAT 02/2023</a></li>

										<li><a class="dropdown-item" href="dbfiles/user_login/candidate/user_registration/candidate/register.php" target="_blank">Agniveervayu
												Intake 02/2023</a></li>
										<li><a class="dropdown-item" href="#">Terms,
												Meaning and General Instructions</a></li>

										<li><a class="dropdown-item" href="#">Guidelines
												for Online Application</a></li>
										<li><a class="dropdown-item"   href="#">Mock Test</a></li>

										<li><a class="dropdown-item" href="#">E-Book</a></li>

										<li><a class="dropdown-item" href="#">Upload
												Documents</a></li>

										<li><a class="dropdown-item" href="#">Payment
												Option and Procedure</a></li>

										<li><a class="dropdown-item" href="#">List
												of Education Boards</a></li>
									</ul>
								</li>
								<!--  -->

								<!--  -->
								<!-- <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
					data-toggle="dropdown" aria-expanded="false">AGNIVEERVAYU (Sports)</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" target="_blank"
							th:href="@{/img/avsportsmen/avsportsmen_adv.pdf}">Advertisement for
								AGNIVEERVAYU (Sports) INTAKE 01/2023</a></li>
					</ul></li> -->

								<li class="nav-item"><a class="nav-link <?php echo $contact; ?>
				" href="contact.php" style="font-size:1em;">Contact</a></li>
								<li class="nav-item <?php echo $faq; ?>"><a class="nav-link" href="faq.php" style="font-size:1em;">FAQ</a></li>
								<li class="nav-item"><a class="nav-link" href="https://indianairforce.nic.in/"
										target="_blank" style="font-size:1em;">IAF Home</a></li>
							</ul>
						</div>
						<!-- .navbar-collapse -->
					</div>

				</nav>
				<!-- .container -->
				<script>
					function indexActive() {
						jQuery(".indexActive").addClass("active");
					}
					function contactActive() {
						jQuery(".contactActive").addClass("active");
					}
					function faqActive() {
						jQuery(".faqActive").addClass("active");
					}
					function websiteActive() {
						jQuery(".websiteActive").addClass("active");
					}
				</script>