	
	function onlyAlpha(inputField){
	  	  if(/[^a-zA-Z ]+/g.test(inputField.value))
	  		inputField.value = inputField.value.replace(/[^a-zA-Z ]+/g,'');
	}
	
	function onlyNum(inputField){	
		if(/\D/g.test(inputField.value)){
			inputField.value = inputField.value.replace(/\D/g,'');
		}
	}
	function isValidOrg(inputField){
		  if(/[^[a-zA-Z0-9 &-.()]+/g.test(inputField.value))
			inputField.value = inputField.value.replace(/[^[a-zA-Z0-9 &-.()]+/g,'');
	}
	
	function onlyAlphaNum(inputField){
	  	  if(/[^a-zA-Z0-9 ]+/g.test(inputField.value))
	  		inputField.value = inputField.value.replace(/[^a-zA-Z0-9 ]+/g,'');
	}	
	
	function specialAlpha(inputField){
		  if(/[^a-zA-Z0-9 ,.-]+/g.test(inputField.value))
			inputField.value = inputField.value.replace(/[^a-zA-Z0-9 ,.-]+/g,'');
	}
	
	function nameValidation(inputField){
	  	  if(/[^a-zA-Z .]+/g.test(inputField.value))
	  		inputField.value = inputField.value.replace(/[^a-zA-Z .]+/g,'');
	}
	
	function captcha(inputField, button){
		if ($(inputField).val().length == 5) {
        	$(button).prop('disabled',false);
        	$(button).show();
        }
        else
        {
        	$(button).prop('disabled',true);
        	$(button).hide();
        }
    }
		function onlyAlphaNumWithSomeSpecialChar(inputField){
		if (/[^a-zA-Z0-9 ,.()/&-]+/g.test(inputField.value)) 
		inputField.value = inputField.value.replace(/[^a-zA-Z0-9 ,.()/&-]+/g, '');
	  	 
	}
	function chestWaistValidate(inputField){
		
		if(/^[1-9]{1}[0-9]{1}(\.\d{0,1})?$/.test(inputField.value))
		{
			console.log("inside if");
		}
		else
		{
			//console.log("inside else");
			inputField.value = inputField.value='';
		}
			
	}
	
	function heightValidate(inputField){
		
		if(/^[1-9]{1}[0-9]{2}(\.\d{0,1})?$/.test(inputField.value))
		{
			console.log("inside if");
		}
		else
		{
			console.log("inside else");
			inputField.value = inputField.value='';
		}
			
	}
	
	function stringTrim(inputField)
	{
		
	return inputField.replace('/\s+/g',' ').trim();
		
	}
	
	function checkEmptyString(inputField){
		if (inputField.length === 0)
			return false;
		return true;
	}
	
	function onlyAlphaNumWithSomeSpecialCharForDOB(inputField){
		if (/[^a-zA-Z0-9,/.:,-]+/g.test(inputField.value)) 
		inputField.value = inputField.value.replace(/[^a-zA-Z0-9,/.:,-]+/g, '');
	  	 //[^a-zA-Z0-9 ,.//-,|:]
	}
	
	function isValidWitnessName(inputField) {
	  if(/[^a-zA-Z .]+/g.test(inputField.value))
			inputField.value = inputField.value.replace(/[^a-zA-Z .]+/g,'');
	
}
	
//	^(?=.*[a-zA-Z])
	function isValidCombinedAddress(inputField){
		
		if (/[^a-zA-Z0-9 ,&.()/-]+/g.test(inputField.value)) 
		inputField.value = inputField.value.replace(/[^a-zA-Z0-9 ,&.()/-]+/g, '');
	}
	
	function isValidPeriodOfStay(inputField){
		
		if (/[^a-zA-Z0-9 ,/.&,()_-]+/g.test(inputField.value)) 
		inputField.value = inputField.value.replace(/[^a-zA-Z0-9 ,/.&,()_-]+/g, '');
	}
	
	function isValidDistOfNRS(inputField){
		
		//if (/[^[0-9]{1,3}[.]{0,1}[0-9]{0,1}]+/g.test(inputField.value)) 
		//inputField.value = inputField.value.replace(/[^[0-9]{1,3}[.]{0,1}[0-9]{0,1}]+/g, '');
		
		
		if(/^[0-9]{1,3}[.]{0,1}[0-9]{0,1}$/.test(inputField.value))
		{
			console.log("inside if");
		}
		else
		{
			//console.log("inside else");
			inputField.value = inputField.value='';
		}
		
	}
	
	