<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registration Form</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="../assets/css/style_av.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">

		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex  align-items-center auth login-bg">
					<div>
						<nav class=" p-0 fixed-top d-flex flex-row pt-2">

							

						</nav>
					</div>
					<div class="card login mt-4 col-lg-6 col-xl-5 col-xxl-4">
						<div class="card-body px-5 py-5">
							<h3 class="card-title text-center mb-3">AFCAT Registration Form</h3>
							<!-- <h3 class="card-title text-left mb-3">Create Account</h3> -->
							<center><div class="card login "
								style="border-radius: 0.55rem;box-shadow: 6px 4px 16px -11px rgb(0 0 0 / 50%);border: 1px solid #919191;">
								
								<div class="card-body p-3">
									<span class="notes" style="font-size: 0.85em"> <span class="fw-500">NOTE: The
											Registration is only for <b>unmarried
												MALE and FEMALE citizens of India.</b></span>
									</span>
								</div>
							</div></center>
							<form id="registrationForm" method="post" autocomplete="off"
								action="register_db.php">
								<input type="hidden"
									name="_csrf" value="25721494-1b02-4b07-b1d5-ef2be50adfda" />




								<div class="form-group">
									<label for="cname">Candidate Name <span
											style="color: red; font-size: 22px;">*</span></label> <input type="text"
										id="candidateName" required="required"
										placeholder="As Per 10th/Matriculation Passing Certificate" name="cname"
										autofocus="autofocus" minlength="2" maxlength="50" class="form-control p_input"
										onkeypress="clearErrorBoxes()" value="">
									<div id="candidateNameError" style="color: red;"></div>
								</div>
								<div class="form-group">
									<label for="fname">Father's Name <span
											style="color: red; font-size: 22px;">*</span></label> <input type="text"
										id="parentName" required="required"
										placeholder="As Per 10th/Matriculation Passing Certificate" name="fname"
										autofocus="autofocus" minlength="2" maxlength="50" class="form-control p_input"
										onkeypress="clearErrorBoxes()" th:field="*{parentName}">
									<label style="color: red; font-size: 13px;"
										th:if="${#fields.hasErrors('parentName')}" th:errors="*{parentName}"></label>
									<div id="parentNameError" style="color: red;"></div>
								</div>
								<div class="form-group">
									<label for="mname">Mother's Name <span
											style="color: red; font-size: 22px; ">*</span></label> <input type="text"
										id="motherName" required="required"
										placeholder="As Per 10th/Matriculation Passing Certificate" name="mname"
										autofocus="autofocus" minlength="2" maxlength="50" class="form-control p_input"
										onkeypress="clearErrorBoxes()" th:field="*{motherName}">
									<label style="color: red; font-size: 13px;"
										th:if="${#fields.hasErrors('motherName')}" th:errors="*{motherName}"></label>
									<div id="motherNameError" style="color: red;"></div>
								</div>

								<div class="form-group">
									<label for="gender">Gender <span
											style="color: red; font-size: 22px;">*</span></label> <select name="gender"
										class="form-control" id="genderSelect" th:field="*{gender}">
										<option value="0" disabled selected>--Select Gender--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Trans">Trans</option>
										<option value="Others">Others</option>
									</select>
									<div id="genderError" style="color: red;"></div>
								</div>

								<div class="form-group">
									<label for="dob">Date of Birth<span
											style="color: red; font-size: 22px; ">*</span></label> <input type="date"
										id="motherName" required="required"
										placeholder="As Per 10th/Matriculation Passing Certificate" name="dob"
										autofocus="autofocus" class="form-control p_input"
										onkeypress="clearErrorBoxes()">
									
								</div>

								<div class="form-group">
									<label for="mobile">Mobile Number <span
											style="color: red; font-size: 22px;">*</span></label>

									<input type="text" class="form-control mx-1" id="mobileNumber" name="mobile"
										aria-label="Amount (to the nearest dollar)"
										placeholder="Fill Your Own Mobile Number Only" maxlength="10"
										required="required" onkeypress="clearErrorBoxes()" value="">

								</div>

								<div class="form-group">
									<label for="email">Email ID <span
											style="color: red; font-size: 22px;">*</span></label> <input type="text"
										id="emailID" required="required" placeholder="Enter Email ID" name="email"
										autofocus="autofocus" onkeypress="clearErrorBoxes()"
										pattern="^[a-zA-Z0-9._]+@[a-zA-Z.]+[a-zA-Z]{2,6}$" maxlength="60"
										class="form-control p_input" value="">
									<div id="emailIdError" style="color: red;"></div>
								</div>

								<div class="form-group">
									<label for="pass">Password<span
											style="color: red; font-size: 22px;">*</span></label> <input type="password"
										id="pwd" required="required" placeholder="Create Your New Password" name="pass"
										autofocus="autofocus" onkeypress="clearErrorBoxes()"
										pattern="^[a-zA-Z0-9]+[a-zA-Z0-9]+[a-zA-Z0-9]$" maxlength="60"
										class="form-control p_input" value="">
									
								</div>


								<div class="row">

									<!-- <div class="col-lg-4  col-md-6 form-group">
										<button class="btn btn-danger enter-btn" id="reset">Reset</button>
									</div> -->

									<!-- <div class="col-lg-3 col-md-6 form-group">
										<a class="btn registerBtn btn-block enter-btn" href="login.html">Log in</a>
									</div> -->

									<!-- <div class="col-lg-2 col-md-6 form-group">
											<button type="button" class="btn btn-warning btn-icon-text">
											<i class="mdi mdi-reload btn-icon-prepend"></i>
										</button>
									</div> -->

									<center><div class="col-lg-12 col-md-12 form-group">
										<button class="btn btn-primary enter-btn text-center" style="width: 70%; padding: 10px 20px; font-weight: bold;"
											type="submit" id="signupSubmit">Register</button>
									</div></center>
								</div>
							


						</div>


						</form>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->

</body>

</html>