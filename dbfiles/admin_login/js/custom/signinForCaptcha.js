$(document).ready(function() {
	$("#loader").fadeOut("slow");
	$('#userForm').bind('copy paste cut',function(e) {
        clearErrorBoxes();
	});

	$(document).ajaxStart(function() {
		$("#loader").hide();

	}).ajaxStop(function() {
		$("#loader").hide();
	});

	EncryptData = function(text, secret) {
		var encrypted = CryptoJS.AES.encrypt(text, secret);
		encrypted = encrypted.toString();
		return encrypted;
	}

	$('#refreshCaptchaButton').on('click', function() {
		var d = new Date();
		$('#captchaImage').attr('src', 'captcha/img?_d=' + d);
		$('#Cid').val('');
	});

	$('#Cid').blur(function() {
		var captcha = $("#Cid").val();
		if(captcha === "" || captcha.trim() === "" || captcha ===  null){
			$("#captchaError").find("span").remove();	
			$('#captchaError').append("<span style='color: red;'>"+"Captcha cannot be blank!"+"</span>");
			$("#Cid").addClass("invalidInput");
			$([ document.documentElement, document.body ]).animate({scrollTop : $("#Cid").first().focus().offset().top-300}, 1000);				
		}else{
		$.ajax({
			type : 'GET',
			url : 'captcha/validate?Ctext=' + $(Cid).val(),
			contentType : 'text',
			dataType : 'text',
			success : function(e, textStatus, xhr) {
				if (e == 'true') {
					$("#captchaError").find("span").remove();												
					$('#loginSubmit').attr('disabled', false);
				} else {
				    $("#captchaError").find("span").remove();	
				    $('#captchaError').append("<span style='color: red;'>"+"Captcha does not match!"+"</span>");
					$('#loginSubmit').attr('disabled', true);
				}
			},
			error : function(error) {
				$('#loginSubmit').attr('disabled', true)
			}
		})
		}
		
	})
	
	$("#userForm,#adminUserForm").submit(function(event) {
		event.preventDefault();

		if(!validateLoginInputs()){	
			return ;	
		}
		if ($('#Cid').val() === "") {
			$('#captchaError').show()
			$('#submit').attr('disabled', true)
			return false;
		}
		var key = "afcatregkey";
		var captcha = $('#Cid').val();
		captcha = EncryptData(captcha, key);
		$('#Cid').val(captcha);

		var password = $('#password').val();
		password = EncryptData(password, key);
		$('#password').val(password);
		storePasswordInsession();
		$("#loader").show();
		$(this).unbind('submit').submit();
	})
})


function storePasswordInsession() {
	var key = "afcatregkey";
	var password = $('#password').val();
	//password = EncryptData(password, key);
	password= password.toString();
	var dataToSend = {					
		password:password
	};
	
	
	
	
	
	$.ajax({
				type: "POST",
			    url: 'StoreEncryptedPwdInSession',
				headers:{
					'X-CSRF-TOKEN' : $("meta[name='_csrf']").attr("content")
				},
				async: false,
				data:dataToSend,
			    dataType: 'json',
		}).done(function (responseData, textStatus, request) {
			
			if(responseData === "success")
	            	{
	            		return true;
	            		
	            	}
	            	else 
	            		{
	            		 $('#errorModalMessage').html('Some error occured. Please try again!');
						 $("#ErrorModalClose").attr('data-dismiss', 'modal');
		           		 $('#errorModal').modal('show');
						 return false;
	            		}
	            	
				
		}).fail(function(e){
			 $("#errorModalMessage").html("Something went wrong! Try again!");
			 $("#ErrorModalClose").attr('data-dismiss', 'modal');
			 $('#errorModal').modal("show");
		});
	
	
}


function validateLoginInputs() {

			var username = $("#username").val();
			var password = $("#password").val();
			var captcha = $("#Cid").val();	
			if (username=== "" || username.trim() === "" || username === null) {
				$("#emailError").html("Please enter email Id").css("color", "red");
				$("#username").addClass("invalidInput");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#username").first().focus().offset().top-300}, 1000);
				return false;
			}
			if (/^[a-zA-Z0-9._]+@[a-zA-Z.]+[a-zA-Z]{2,6}$/.test(username) == false) {
				$("#emailError").html("Please enter valid Email Id").css("color", "red");
				$("#username").addClass("invalidInput");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#username").first().focus().offset().top-300}, 1000);
				return false;
			}
			if (password ==="" || password.trim() ==="" || password === null) {
				$("#passwordError").html("Please enter password properly").css("color", "red");
				$("#password").addClass("invalidInput");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#password").first().focus().offset().top-300}, 1000);
				return false;
			}
		
			if(captcha === "" || captcha.trim() === "" || captcha ===  null){
				$("#captchaError").find("span").remove();	
				$('#captchaError').append("<span style='color: red;'>"+"Please enter captcha properly"+"</span>");
				$("#Cid").addClass("invalidInput");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#Cid").first().focus().offset().top-300}, 1000);				
				return false;
			}
			if(captcha.trim().length != 5){
				$("#captchaError").find("span").remove();	
				$('#captchaError').append("<span style='color: red;'>"+"Captcha does not match!"+"</span>");
				$("#Cid").addClass("invalidInput");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#Cid").first().focus().offset().top-300}, 1000);						
				return false;
			}
			return true;
	}

function clearErrorBoxes() {
	$("#emailError").empty();
	$("#passwordError").empty();
	$("#captchaError").empty();	
	
	$("#username").removeClass("invalidInput");
	$("#password").removeClass("invalidInput");
	$("#Cid").removeClass("invalidInput");
}
