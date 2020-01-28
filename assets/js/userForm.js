$(function(){
	$(document).on("change","#firstName",function(){
		firstNameVal();
	});
	$(document).on("change","#lastName",function(){
		lastNameVal();
	});
	$(document).on("change","#datepicker",function(){
		datepicker();
	});
	$(document).on("change","#address",function(){
		address();
	});
	$(document).on("change","#city",function(){
		city();
	});
	$(document).on("change","#state",function(){
		state();
	});
	$(document).on("change","#marriedStatus",function(){
		marriedStatus();
	});
	$(document).on("change","#idCardNumber",function(){
		idCardNumber();
	});
	$(document).on("change","#securityAns",function(){
		securityAns();
	});
})
function onSave(){
	flag=false;

	var firstNameVar = firstNameVal();
	if (firstNameVar) {
		var lastNameVar =lastNameVal();
		if (lastNameVar) {
			var datepickervar =datepicker();
			if (datepickervar) {
				var addressvar=address();
				if (addressvar) {
					var cityVar =city();
					if (cityVar) {
						var stateVar=state();
						if (stateVar) {
							var marriedStatusvar=marriedStatus();
							if (marriedStatusvar) {
								var idCardNumbervar =idCardNumber();
								if (idCardNumbervar) {
									var securityAnsvar =securityAns();
									if (securityAnsvar) {
										flag=true;
									}else{
										alert('please  Enter Valid Security Ans');
			$('#securityAns').focus();
		$('#securityAns').val('');
		$('#securityAns').css('border','1px solid red');
									}
								}else{
									alert('please  Enter Valid Id Card Number');
			$('#idCardNumber').focus();
		$('#idCardNumber').val('');
		$('#idCardNumber').css('border','1px solid red');
								}

							}else{
								alert('please Only Character In Marital Status you can use space to seperate');
			$('#marriedStatus').focus();
		$('#marriedStatus').val('');
		$('#marriedStatus').css('border','1px solid red');
							}

						}else{
							alert('please Only Character In State you can use space to seperate');
			$('#state').focus();
		$('#state').val('');
		$('#state').css('border','1px solid red');
						}
					}else{
						alert('please Only Character In City you can use space to seperate');
			$('#city').focus();
		$('#city').val('');
		$('#city').css('border','1px solid red');
					}
				}else{
					alert('please Only Character In address you can use space to seperate');
			$('#address').focus();
		$('#address').val('');
		$('#address').css('border','1px solid red');

				}
			}else{
				alert('please Enter Your Birth Date');
		$('#datepicker').focus();
		$('#datepicker').css('border','1px solid red');

			}
		}else{
			alert('please Only Character In Last Name');
			$('#lastName').focus();
		$('#lastName').val('');
		$('#lastName').css('border','1px solid red');
		}
	}else{
		alert('please Only Character In First Name');
		$('#firstName').focus();
		$('#firstName').val('');
		$('#firstName').css('border','1px solid red');
	}
	return flag
}
//first name validetion 
 function firstNameVal(){
 	var firstName =$('#firstName').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (firstName.match(regExp)) {
 		$('#firstName').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //last name Validetion
 function lastNameVal(){
 	var lastNameVal =$('#lastName').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (lastNameVal.match(regExp)) {
 		$('#lastName').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //last name Validetion
 function datepicker(){
 	var datepickervar =new Date($('#datepicker').val());
 	if (datepickervar.getFullYear() && datepickervar.getMonth() && datepickervar.getDate()) {
 		$('#datepicker').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //Address Validetion
 function address(){
 	var address =$('#address').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (address.match(regExp)) {
 		$('#address').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //city Validetion
 function city(){
 	var city =$('#city').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (city.match(regExp)) {
 		$('#city').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //state Validetion
 function state(){
 	var state =$('#state').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (state.match(regExp)) {
 		$('#state').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //Marital Status Validetion 

 function marriedStatus(){
 	var marriedStatus =$('#marriedStatus').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (marriedStatus.match(regExp)) {
 		$('#marriedStatus').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //idCardNumber Validetion 
 function idCardNumber(){
 	var idCardNumber =$('#idCardNumber').val(),
 	 regExp =/^([A-Za-z0-9]{5,20})$/;
 	if (idCardNumber.match(regExp)) {
 		$('#idCardNumber').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 //Security Ans Validetion 
 function securityAns(){
 	var securityAns =$('#securityAns').val(),
 	 regExp =/^([A-Za-z0-9]{5,20})$/;
 	if (securityAns.match(regExp)) {
 		$('#securityAns').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }