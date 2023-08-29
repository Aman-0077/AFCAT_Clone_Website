<!doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="_csrf" content="52d9dc2e-aa1f-453d-b673-94817a6cf04c" />
<meta name=" X-CSRF-TOKEN" content="X-CSRF-TOKEN" />
<meta http-equiv="Cache-Control"
	content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<title>IAF : User-Login</title>
<!-- Favicon -->
<link rel="shortcut icon" href="logo/iaf.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<!-- Typography CSS -->
<link rel="stylesheet" href="../assets/css/typography.css">
<!-- Style CSS -->
<link rel="stylesheet" href="../assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../assets/css/clouds.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="../assets/css/custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
	<!-- loader Start -->

	<!-- loader END -->
	<!-- Sign in Start -->
	<section class="sign-in-page" id="container">

		<div class="container p-0" id="sign-in-page-box">
			<div class="bgGray form-container sign-in-container">
				<div class="sign-in-page-data">
					<div class="mobileView bg-primary p-3">
						<img src="https://afcat.cdac.in/afcatreg/images/2.webp" class="img-fluid logo" alt="logo">
						<h1 class="font-weight-700 mb-0 text-white">AFCAT</h1>
					</div>
					<div class="sign-in-from w-100 m-auto">
						<h1 class="mb-3 text-center">User Login</h1>





<?php 
	  if(isset($_REQUEST['f'])){
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error !!!</strong> &nbsp;&nbsp;Check your Email or Password and try again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>	
<?php } ?>





						<!-- F O R M -->
						<form class="mt-4" action="../../login_user.php" id="userForm"
							method="post" autocomplete="off"><input type="hidden" name="_csrf" value="52d9dc2e-aa1f-453d-b673-94817a6cf04c"/>
							<div class="form-row">
								<div class="col-sm">
									
								</div>
							</div>

							<div class="form-row">
								<div class="col-sm">
									
								</div>
							</div>

							<div class="form-group">
								<label for="ID">Email ID</label> <input maxlength="50"
									type="text" class="form-control mb-0" id="username"
									autofocus="autofocus" onkeypress="clearErrorBoxes()"
									placeholder="Enter email ID" name="ID">
								<div id="emailError"></div>
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<div class="input-group">
									<input type="password" class="form-control mb-0" id="password"
										maxlength="20" onkeypress="clearErrorBoxes()"
										placeholder="Enter password" name="pass">
									<div class="input-group-append">
										<button class="btn btn-sm show-password" type="button" aria-label="show-password"
											style="background: #ffffffbf; color: black; border: 1px solid #3b3b3b59; border-radius: 0 5px 5px 0;">
											<i class="fa-solid fa-eye" id="showPass" onclick="myFunction()"
												aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div id="passwordError"></div>
							</div><br><br>
							<div class="row">
								
								<div class="col-6 d-flex align-items-center">
									<a href="#"
										class="float-right fw-600">Forgot password?</a>
								</div>
								<div class="col-6 mx-auto sign-info pt-1">
									<button type="submit" class="btn btn-info mb-2"
										id="loginSubmit" style=" background-color:blue;font-weight: bold;">Login</button>
								</div>

								


							</div>
							<!-- <div class="row mt-4">
								<p class="col-12 text-dark fw-600">Note: It is advised to
									check your SPAM folder along with your INBOX for one time
									registration password.</p>
							</div> -->
						</form>
					</div>

				</div>

			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-right">
						<img src="https://afcat.cdac.in/afcatreg/images/2.webp" class="img-fluid" alt="logo">
						<h1 class="text-white font-weight-600 mb-3">Indian Air Force</h1>
					<br>
						<div>	<p>Don't have an Account?</p>
							<a class="btn-block"
								href="user_registration/candidate/register.php"
								><button class="btn btn-primary mt-2"
									id="mockBtn" style=" background-color:blue;font-weight: bold;">Register Now</button></a>
						</div>
						<footer class="iq-footer"
	style="position: inherit; margin-left: 0; box-shadow: none">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
			COPYRIGHT &#169; 2023 |	 DESIGNED AND DEVELOPED BY: <a class="fw-600"  href="#" style="color: rgb(41, 41, 228);">AFCAT</a>
			</div>
		</div>
	</div>
</footer>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Sign in END -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../js/custom/signinForCaptcha.js"></script>
	<!-- <script th:src="@{/assets/js/clouds.js}"></script> -->
	
	<!-- Counterup JavaScript -->
	
	<!-- Wow JavaScript -->
	
	<!-- Slick JavaScript -->
	
	<!-- Select2 JavaScript -->
	
	<!-- Magnific Popup JavaScript -->
	
	<!-- Smooth Scrollbar JavaScript -->
	
	<!-- lottie JavaScript -->
	
	<!-- Chart Custom JavaScript -->
	
	 
	 
	
</body>
<script type="text/javascript">
	function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
			document.getElementById("showPass").className = ("fa fa-eye-slash")
		} else {
			x.type = "password";
			document.getElementById("showPass").className = ("fa fa-eye")
		}
	}
</script>

<!-- Mirrored from afcat.cdac.in/afcatreg/candidate/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 15:58:28 GMT -->
</html>
