$(document).ready(function() {

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
	
	/*$('#refreshCaptchaBtn').on('click', function() {
		var d = new Date();
		$('#captchaImg').attr('src', 'captcha/img?_d=' + d);
		$('#captcha-column').val('');
	});*/

	$('#Cid').blur(function() {
		var captcha = $("#Cid").val();
		if(captcha === "" || captcha.trim() === "" || captcha ===  null){
		$("#captchaError").find("span").remove();	
				$('#captchaError').append("<span style='color: red;'>"+"Captcha cannot be blank!"+"</span>");
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
		var key = "starregkey";
		var captcha = $('#Cid').val();
		captcha = EncryptData(captcha, key);
		$('#Cid').val(captcha);

		var password = $('#password').val();
		password = EncryptData(password, key);
		$('#password').val(password);

		$(this).unbind('submit').submit();
	})
})

function validateLoginInputs() {

			var username = $("#username").val();
			var password = $("#password").val();
			var captcha = $("#Cid").val();	
			if (username=== "" || username.trim() === "" || username === null) {
				$("#emailError").html("Email Id cannot be blank").css("color", "red");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#username").first().focus().offset().top-300}, 1000);
				return false;
			}
			if (/^[a-zA-Z0-9._]+@[a-zA-Z.]+[a-zA-Z]{2,6}$/.test(username) == false) {
				$("#emailError").html("Enter valid Email Id").css("color", "red");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#username").first().focus().offset().top-300}, 1000);
				return false;
			}
			if (password ==="" || password.trim() ==="" || password === null) {
				$("#passwordError").html("Password cannot be blank").css("color", "red");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#password").first().focus().offset().top-300}, 1000);
				return false;
			}
		
			if(captcha === "" || captcha.trim() === "" || captcha ===  null){
				$("#captchaError").find("span").remove();	
				$('#captchaError').append("<span style='color: red;'>"+"Captcha cannot be blank!"+"</span>");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#Cid").first().focus().offset().top-300}, 1000);				
				return false;
			}
			if(captcha.trim().length != 5){
				$("#captchaError").find("span").remove();	
				$('#captchaError').append("<span style='color: red;'>"+"Captcha does not match!"+"</span>");
				$([ document.documentElement, document.body ]).animate({scrollTop : $("#Cid").first().focus().offset().top-300}, 1000);						
				return false;
			}
			return true;
	}

function clearErrorBoxes() {
	$("#emailError").empty();
	$("#passwordError").empty();
	$("#captchaError").empty();	
}
