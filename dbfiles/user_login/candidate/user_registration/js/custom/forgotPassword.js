$(document)
	.ready(
		function() {
			var mobileNationality = null;
			EncryptData = function(text) {
				var encrypted = CryptoJS.AES.encrypt(text, 'starregkey');
				encrypted = encrypted.toString();
				return encrypted;
			}

			var timeoutMilliSeconds = 10000;
			var count = 120;
			var countForSubmit = 120;

			setTimeout(function() {
				if ($('#submitErrMsg').length)
					$('#submitErrMsg').hide();
			}, timeoutMilliSeconds);

			$('#otpSentStatus').hide();
			$('#errMsgFE').hide();
			$('#otpResendStatus').hide();

			$('#refreshCaptchaBtn').on('click', function() {
				var d = new Date();
				$('#captchaImg').attr('src', 'captcha/img?_d=' + d);
				$('#captcha-column').val('');
			});
			
			$('#emailId').keyup(function(){
			    this.value = this.value.replace(/[^a-zA-Z.0-9@_-]+/g,'');
			});

			function validateEmail(email) {
				var msgFE = '';
				if (mobileNationality === 'Indian' && !$('input[name = "otpType"]').is(':checked'))
					msgFE = "Please select option for password recovery!";
				if (email.length == 0 || email.length > 70)
					msgFE = 'Invalid email!';

				return msgFE;
			}

			function hasError(msgFE) {
				if (msgFE.length != 0) {
					$('#errMsgFE h4').html(msgFE);
					$('#errMsgFE').show().delay(timeoutMilliSeconds)
						.fadeOut();
					return true;
				}
				return false;
			}
			
			$('#emailId').blur(function(){
				mobileNationality = null;
				
				var token = $("meta[name='_csrf']").attr("content");
				var email = $('#emailId').val().trim();
				if(email!="") {
					$.ajax({
						type: 'POST',
						url: 'GetMobileNo',
						headers:{
							'X-CSRF-TOKEN' : token
						},
						data: ({
							 "email":email
		            		}
		            		),
						dataType: 'text',
						success: function(e, textStatus, xhr) {
							if (e === 'notNaidni') {
								mobileNationality = "Nepalese";
								$("#forgotModalOtpDiv").hide();
									return;
							}
							if (e === 'Naidni') {
								mobileNationality = "Indian";
								$("#forgotModalOtpDiv").show();
								return;
							}
							$('#errMsgFE h4').html(e);
							$('#errMsgFE').show().delay(
								timeoutMilliSeconds)
								.fadeOut();
						}, error: function(error) {
	//						alert(error)
							//checkSessionValidity("Something went wrong! Try again!");
							$("#errorModalMessage").html("Something went wrong while fetching your data! Try again!");
							$("#ErrorModalClose").attr('data-bs-dismiss', 'modal');
							$('#errorModal').modal("show");
						}
					});
				}
			    
			});
			
			function resendOTPProcess() {
			    $('#otpResendStatus').show();
			    $('#generateOTPBtn').prop('disabled', true);
			    var countInterval = setInterval(function() {
				count = count - 1;
				$('#resendCount').html(count);
				if(count <= 0) {
				    $('#otpResendStatus').hide();
				    $('#generateOTPBtn').prop('disabled', false);
				    count = 120;
				    clearInterval(countInterval);
				    return;
				}
			    }, 1000);
			}

			$('#generateOTPBtn').click(
				function() {
				    	if(count != 120) {
				    	    return;
				    	}
				    
					var email = $('#emailId').val().trim();

					var msgFE = validateEmail(email);

					if (hasError(msgFE))
						return;
					
					var otpTypeSelected = null;
					
					if(mobileNationality === 'Nepalese')
						otpTypeSelected = 'mail';
					else
						otpTypeSelected = $('input[name = "otpType"]:checked').val();
					var forgotPassword = {
						'emailId': email,
						'otpType': otpTypeSelected
					};
					
					var token = $("meta[name='_csrf']").attr("content");
					$.ajax({
						type: 'POST',
						url: 'sendOTP',
						headers:{
							'X-CSRF-TOKEN' : token
						},
						data: JSON.stringify(forgotPassword),
						contentType: 'application/json',
						dataType: 'text',
						success: function(e, textStatus, xhr) {
							const resp = e.split(",")
							if(!e.includes("registration has been closed"))
								e=resp[0];
							const remainingAttempts=resp[1];
							var appendMsg = "";
							if(remainingAttempts==17) {
								appendMsg = "<br>You have last 3 attempts remaining to generate OTP";
							} else if(remainingAttempts==18) {
								appendMsg = "<br>You have last 2 attempts remaining to generate OTP";
							} else if(remainingAttempts==19) {
								appendMsg = "<br>This is your last attempt to generate OTP";
							}
							if (e.includes('OTP Sent To Email!')) {
								if(mobileNationality != null && mobileNationality === 'Nepalese') {
									var respMsg = "OTP Sent To Email.";
									$('#otpSentStatus h4').html(respMsg+appendMsg);
								}
								else {
									//var respMsg = "OTP Sent To Email and Mobile.";
									var respMsg = "OTP Sent To Email.";
									$('#otpSentStatus h4').html(respMsg+appendMsg);
									
								}
								$('#otpSentStatus').show().delay(
										timeoutMilliSeconds).fadeOut();
									resendOTPProcess();
									return;
							}
							if (e.includes('OTP Sent To Mobile!')) {
								var respMsg = "OTP Sent.";
								$('#otpSentStatus h4').html(respMsg+appendMsg);
								$('#otpSentStatus').show().delay(
									timeoutMilliSeconds).fadeOut();
								resendOTPProcess();
								return;
							}
							$('#errMsgFE h4').html(e);
							$('#errMsgFE').show().delay(
								timeoutMilliSeconds)
								.fadeOut();
						},
						error: function(error) {
							//alert(error)
							//checkSessionValidity("Something went wrong! Try again!");
							$("#errorModalMessage").html("Something went wrong! Try again!");
							$("#ErrorModalClose").attr('data-bs-dismiss', 'modal');
							$('#errorModal').modal("show");
						}
					});
				});

			$('#forgotPasswordForm')
				.submit(
					function(event) {
						event.preventDefault();
						var email = $('#emailId').val().trim();
						var msgFE = validateEmail(email);

						if ($('#captcha-column').val().trim().length != 5)
							msgFE = 'Invalid Captcha!';

						if ($('#otp').val().trim().length != 6)
							msgFE = "Invalid otp";

						if (hasError(msgFE))
							return false;

						$('#otp').val(EncryptData($('#otp').val().trim()));
						$('#captcha-column').val(EncryptData($('#captcha-column').val().trim()));
						
						 $('#forgotSubmitBbtn').prop('disabled', true);
						    var countIntervalForSubmit = setInterval(function() {
						    	countForSubmit = countForSubmit - 1;
							if(countForSubmit <= 0) {
							    $('#forgotSubmitBbtn').prop('disabled', false);
							    countIntervalForSubmit = 120;
							    clearInterval(countIntervalForSubmit);
							    return;
							}
						    }, 1000);
						
						$(this).unbind('submit').submit();
					})
		});