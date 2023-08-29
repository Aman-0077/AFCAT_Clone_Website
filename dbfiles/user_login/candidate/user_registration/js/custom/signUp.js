var countForSubmit = 120;

$(document).ready(function() {
	
	var timeoutMilliSeconds = 10000;
	countForSubmit = 120;
	
	if($("#successModalSignUp").length){
		//console.log("Inside success");
			$('#successModalSignUp').modal('show');
		}
	$('#successModalSignUp').modal('show');
		//console.log("OUTSIDE  success  $(#successModalSignUp).length"+$("#successModalSignUp").length);
	
	$('#genderSelect').val('0');
	$('#Cid').val('');
	if($("#errorMessage").length){
		//console.log("Inside success");
		$("#error").show().delay(7000).fadeOut();
	}
	
	
	EncryptData = function(text) {
		var encrypted = CryptoJS.AES.encrypt(text, 'starregkey');
		encrypted = encrypted.toString();
		return encrypted;
	}
	
});

var count = 120;

$('#mobileNumber').keyup(function(){
	onlyNum(this);
});

$('#emailOtp').keyup(function(){
	onlyNum(this);
});

$('#mobileOtp').keyup(function(){
	onlyNum(this);
});

$('#candidateName').keyup(function(){
	nameValidation(this);
});

$("#emailID").keyup(function() {
	this.value = this.value.toLocaleLowerCase();
});

/*$('#parentName').keyup(function(){
	nameValidation(this);
});

$('#motherName').keyup(function(){
	nameValidation(this);
});*/

$("#generateOtp").off().on('click',function (event) {
    if (($("#emailID").val().match(/^[a-zA-Z0-9._]+@[a-zA-Z.]+[a-zA-Z]{2,6}$/))) {
        if ($("#selectCountryCode").children("option:selected").val()==="91" && $("#mobileNumber").val().length !== 10) {
            $("#errorModalMessage").html("Mobile number should be 10 digits only");
            $('#errorModal').modal("show");
            event.stopImmediatePropagation();
            event.preventDefault();
            return false;
        }
        
       // let msg= "The EmailId and Mobile number for OTP are " + $("#emailID").val() + " & " + $("#mobileNumber").val() + ". Press Ok to continue or cancel to change.";
       let msg = "The OTP will be sent to <b>"+ $("#emailID").val() + "</b> & <b>" + $("#mobileNumber").val()+ "</b>. Please confirm and press Ok to continue or Cancel to change. <br><br>" +
       		"<small><b>NOTE:</b>The Selection Test for Agniveervayu is only for <b>unmarried MALE and FEMALE citizens of India.</b>" +
       		"</small>" ;
       $("#confirmModalClose").html("Cancel")
        if($("#selectedCountryCode").text()==="977") {
        	msg="The OTP will be sent to " + $("#emailID").val() +". Please confirm and press Ok to continue or Cancel to change.";
        }
        if ($("#emailID").val() !== "") {
            isConfirm(msg);
        }
        else {
            if ($("#emailID").val() == "")
                $("#errorModalMessage").html("Please fill emailid field completely");
            $('#errorModal').modal("show");
        }

    } else {
        $("#errorModalMessage").html("Enter Proper Email Id");
        $('#errorModal').modal("show");
    }
});

function isConfirm(msg){
    $("#confirmModal").modal('show');
    $("#confirmModalMessage").html(msg);
    $("#confirmModalOk").off().on("click", function(){
    $("#confirmModal").modal('hide');
//        resendOTPProcess();
       $.ajax({
			type : 'GET',
			url : 'sendOtp',
			//,
			data : { "emailId" : $("#emailID").val(), "mobileNo" : $("#mobileNumber").val(), "mobileCode" : $("#selectCountryCode").children("option:selected").val()},
			contentType : 'application/json',
			processData : true,
			success : function(data, xhr, text) {
				if(data.localeCompare("true")==0)
				{
					
    				var emaiId=$("#emailID").val();
    				var mobile=$("#mobileNumber").val();
					$("#successModalMessage").html("OTP Sent successfully to email ID "+emaiId+" and mobile "+mobile);
					if($('#selectedCountryCode').text()==="+977") {
						$("#successModalMessage").html("OTP Sent successfully to email ID "+emaiId);
					}
					$("#successModalOk").attr('data-bs-dismiss', 'modal');
					$('#successModal').modal("show");
					resendOTPProcess();
				}
				else
				{
					$("#errorModalMessage").html(data);
					$('#errorModal').modal("show");
				}
			},
			error : function(error,request)
			{
				$("#errorModalMessage").html("Some error occcured. Please try again!");
				$('#errorModal').modal("show");
			}	
			});
        
        
    });

    $("#confirmModalClose").on("click", function(){
        $("#confirmModal").modal('hide');
        return false;
    });
}

function resendOTPProcess() {
    $('#otpResendStatus').show();
    $('#generateOtp').prop('disabled', true);
    var countInterval = setInterval(function () {
        count = count - 1;
        $('#resendCount').html(count);
        if (count <= 0) {
            $('#otpResendStatus').hide();//div for counter
            $('#generateOtp').prop('disabled', false);
            count = 120;
            clearInterval(countInterval);
            return;
        }
    }, 1000);
}

$("#registrationForm").submit(function (event) {
//    console.log("submit hit");
    event.preventDefault();
    //console.log("check valid "+checkValid());
    if (checkValidData() !== true) {
        return;
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
	
	$('#signupSubmit').prop('disabled', true);
    var countIntervalForSubmit = setInterval(function() {
    	countForSubmit = countForSubmit - 1;
	if(countForSubmit <= 0) {
	    $('#signupSubmit').prop('disabled', false);
	    countIntervalForSubmit = 120;
	    clearInterval(countIntervalForSubmit);
	    return;
	}
    }, 1000);
    
    $(this).unbind('submit').submit();

});

$('#refreshCaptchaButton').on('click', function() {
	var d = new Date();
	$('#captchaImage').attr('src', 'captcha/img?_d=' + d);
	$('#Cid').val('');
});


function checkValidData() {
	let candidateName = $("#candidateName").val();
//    let parentName = $("#parentName").val();
//    let motherName = $("#motherName").val();
    let emailId = $("#emailID").val();
    let selectedNationality = $("#selectedNationality").children("option:selected").val();
//    let selectedGender = $("#genderSelect").children("option:selected").val()
    let mobileNumber = $("#mobileNumber").val();
    let emailOtp = $("#emailOtp").val();
    let mobileOtp= $("#mobileOtp").val();
    let cid = $("#Cid").val();
    
    if (candidateName === "" || candidateName.trim() === "" || candidateName === null || candidateName.match(/^ *$/) !== null || candidateName.length<2) {
    	
        $("#candidateNameError").html("Please enter name properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#candidateName").first().focus().offset().top - 300}, 1000);
        $("#nameError").show().delay(7000).fadeOut();
        return false;
    }

	if(candidateName.toLowerCase() === candidateName.replace(/\s+/g, " ").toLowerCase()){}
	else{
		$("#candidateNameError").html("Multiple spaces in candidate's name are not allowed.").css("color", "red");
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#candidateName").first().focus().offset().top - 300
		}, 50);
		//$("#nameError").addClass("invalidInput");
		// $("#candidateNameAVError").show().delay(7000).fadeOut();
		return false;
	}
	if((!candidateName.match(/^(?!.*\.{2})[a-zA-Z\s.]+\.?$/)))    {
         $("#candidateNameError").html("Please enter name properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#candidateName").first().focus().offset().top - 300}, 1000);
        $("#nameError").show().delay(7000).fadeOut();
        return false;
    }

	if((!candidateName.match(/^[a-zA-Z]+[ ]?[.]?[ ]?[a-zA-Z]*/)))    {
         $("#candidateNameError").html("Please enter name properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#candidateName").first().focus().offset().top - 300}, 1000);
        $("#nameError").show().delay(7000).fadeOut();
        return false;
    }
    /*if (parentName === "" || parentName.trim() === "" || parentName === null || parentName.match(/^ *$/) !== null || parentName.length<2) {
        $("#parentNameError").html("Please enter father's name properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#parentName").first().focus().offset().top - 300}, 1000);
        return false;
    }
    if (motherName === "" || motherName.trim() === "" || motherName === null || motherName.match(/^ *$/) !== null || motherName.length<2) {
        $("#motherNameError").html("Please enter mother's 	name properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#motherName").first().focus().offset().top - 300}, 1000);
        $("#motherError").show().delay(7000).fadeOut();
        return false;
    }*/
    
    if (emailId === "" || emailId.trim() === "" || emailId === null || emailId.match(/^ *$/) !== null) {
        $("#emailError").html("Please enter email properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#emailID").first().focus().offset().top - 300}, 1000);
         $("#emailIdError").show().delay(7000).fadeOut();
        return false;
    }

    /*if (selectedNationality) {
        $("#nationalityError").html("Please select nationality").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#nationalityError").first().focus().offset().top - 300}, 1000);
        $("#nationalityError").show().delay(7000).fadeOut();
        return false;
    }*/
    
    /*if (selectedGender=="0") {
        //console.log("Gender "+!$('input:radio[name="gender"]').is(":checked"))
        $("#genderError").html("Please select gender").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#mobileNumber").first().focus().offset().top - 300}, 1000);
         $("#genderError").show().delay(7000).fadeOut();
        return false;
    }*/
    
    if (mobileNumber === "" || mobileNumber.trim() === "" || mobileNumber === null || mobileNumber.match(/^ *$/) !== null || mobileNumber.length != 10) {
        $("#mobileError").html("Please enter mobile number properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#mobilecolumn").first().focus().offset().top - 300}, 1000);
        $("#mobileNumberError").show().delay(7000).fadeOut();
        return false;
    }
    
    if (emailOtp === "" || emailOtp.trim() === "" || emailOtp === null || emailOtp.match(/^ *$/) !== null) {
        $("#emailOtpError").html("Please enter email OTP properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#emailOtp").first().focus().offset().top - 300}, 1000);
        $("#emailOtpError").show().delay(7000).fadeOut();
        return false;
    }

    if (mobileOtp !== null && mobileOtp !== "" && mobileOtp.match(/^ *$/) !== null) {
        $("#mobileOtpError").html("Please enter mob OTP properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#mobileOtp").first().focus().offset().top - 300}, 1000);
        $("#mobileOtpError").show().delay(7000).fadeOut();
        return false;
    }
    
    if (cid === "" || cid.trim() === "" || cid === null || cid.match(/^ *$/) !== null || cid.trim().length != 5) {
        $("#captchaError").html("Please enter captcha properly").css("color", "red");
        $([document.documentElement, document.body]).animate({scrollTop: $("#Cid").first().focus().offset().top - 300}, 1000);
        $("#captchaError").show().delay(7000).fadeOut();
        return false;
    }
    
    return true;
}

function clearErrorBoxes() {
	$("#candidateNameError").empty();
//    $("#parentNameError").empty();
//    $("#motherNameError").empty();
    $("#emailIdError").empty();
    $("#nationalityError").empty();
//    $("#genderError").empty();
    $("#mobileNumberError").empty();
    $("#emailOtpError").empty();
    $("#mobileOtpError").empty();
    $("#captchaError").empty();
	
}