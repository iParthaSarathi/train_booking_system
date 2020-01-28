$(function(){
	timer();
$(document).on("keyup","#paymentCardNumber",function(){
		detectCardType();
	});
$(document).on("blur","#expDate",function(){
		dateValidate();
	});
$(document).on("click",".sentOtp",function(){
	sentOtp();
	});
	$(document).on("keyup","#enterAmount",function(){
		enterAmount();
	});
	$(document).on("blur","#enterCvv",function(){
		entercvv();
	});
	$(document).on("blur","#otpForWallet",function(){
		addMoneyOn();
	});
	$(document).on("blur","#datepickerpmn",function(){
		datepickerpmn();
	});
	$(document).on("blur","#enterNoOfMale",function(){
	enterNoOfMale();
	});
});
flag=false;
function detectCardType() {
    var electron= /^(4026|417500|4405|4508|4844|4913|4917)\d+$/,
        maestro= /^(5018|5020|5038|5612|5893|6304|6759|6761|6762|6763|0604|6390)\d+$/,
        dankort= /^(5019)\d+$/,
        interpayment= /^(636)\d+$/,
        unionpay= /^(62|88)\d+$/,
        visa= /^4[0-9]{12}(?:[0-9]{3})?$/,
        mastercard= /^5[1-5][0-9]{14}$/,
        amex= /^3[47][0-9]{13}$/,
        diners= /^3(?:0[0-5]|[68][0-9])[0-9]{11}$/,
        discover= /^6(?:011|5[0-9]{2})[0-9]{12}$/,
        jcb= /^(?:2131|1800|35\d{3})\d{11}$/ ;

        var paymentCardNumber=$("#paymentCardNumber").val();

        var regExp =/^[0-9]+$/,
	 paymentCardNumber=$("#paymentCardNumber").val();
	 if (paymentCardNumber.match(regExp)) {
	 	if (paymentCardNumber.match(electron)) {
        	$("#paymentCardType").val("Electron");
        	flag=true;
        }else if (paymentCardNumber.match(visa)) {
        	$("#paymentCardType").val("Visa");
 
			 flag=true;      
			  }else if (paymentCardNumber.match(maestro)) {
        	$("#paymentCardType").val("maestro");
 
			 flag=true;     
			   }else if (paymentCardNumber.match(dankort)) {
        	$("#paymentCardType").val("dankort");
 
			 flag=true;     
			   }else if (paymentCardNumber.match(interpayment)) {
        	$("#paymentCardType").val("interpayment");
 
			 flag=true;      
			  }else if (paymentCardNumber.match(unionpay)) {
        	$("#paymentCardType").val("unionpay");
 
              flag=true;       
              }else if (paymentCardNumber.match(mastercard)) {
        	$("#paymentCardType").val("mastercard");
 
			 flag=true;      
			  }else if (paymentCardNumber.match(amex)) {
        	$("#paymentCardType").val("amex");
 
			 flag=true;      
			  }else if (paymentCardNumber.match(diners)) {
        	$("#paymentCardType").val("diners");
 
			 flag=true;    
			    }else if (paymentCardNumber.match(discover)) {
        	$("#paymentCardType").val("discover");
 
			 flag=true;     
			   }else if (paymentCardNumber.match(jcb)) {
        	$("#paymentCardType").val("jcb");
 
			 flag=true;     
			   }else{
        	$("#paymentCardType").val("");
        	$("#expDate").val('');
        	flag=false;
        } 
	 }else{
	 	$("#paymentCardNumber").val('');
	 	$("#paymentCardType").val("");
	 	flag=true
	 }
            
        return flag;   
    
}
function updateVal(){
	var firstNameVar = firstNameVal();
	if (firstNameVar) {
		var lastNameVar =lastNameVal();
		if (lastNameVar) {
			var addressvar = address();
			if (addressvar) {
				var cityvar = city();
			if (cityvar) {
				var statevar = state();
			if (statevar) {
				var workvar = work();
			if (workvar) {
				var marriedStatusvar = marriedStatus();
			if (marriedStatusvar) {
				var secQusAnsvar = secQusAns();
			if (secQusAnsvar) {
				flag=true;
		}else{
			alert('please Only Character In secQusAns');
			$('#secQusAns').focus();
		$('#secQusAns').val('');
		$('#secQusAns').css('border','1px solid red');
		}
				
		}else{
			alert('please Only Character In Marital Status');
			$('#marriedStatus').focus();
		$('#marriedStatus').val('');
		$('#marriedStatus').css('border','1px solid red');
		}		
		}else{
			alert('please Only Character In work');
			$('#work').focus();
		$('#work').val('');
		$('#work').css('border','1px solid red');
		}		
		}else{
			alert('please Only Character In state');
			$('#state').focus();
		$('#state').val('');
		$('#state').css('border','1px solid red');
		}
		}else{
			alert('please Only Character In city');
			$('#city').focus();
		$('#city').val('');
		$('#city').css('border','1px solid red');
		}
		}else{
			alert('please Only Character In address');
			$('#address').focus();
		$('#address').val('');
		$('#address').css('border','1px solid red');
		}

		}else{
			alert('please Only Character In Last Name');
			$('#lastname').focus();
		$('#lastname').val('');
		$('#lastname').css('border','1px solid red');
		}
	}else{
		alert('please Only Character In First Name');
		$('#firstName').focus();
		$('#firstName').val('');
		$('#firstName').css('border','1px solid red');
	}
	detectCardType();
	var dateValidatevar=dateValidate();
	if (!dateValidatevar) {
		alert("Please Enter Card Number and valid  expiry date eg:11/11");
		$("#expDate").css('border','1px solid red')

	}
	return flag;
}

function addCard(){
	detectCardType();
	var dateValidatevar=dateValidate();
	if (!dateValidatevar) {
		alert("Please Enter Card Number and valid  expiry date eg:11/11");
		$("#expDate").css('border','1px solid red')

	}
	return flag;

}

function dateValidate(){
	//var re = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;
	var date= $("#expDate").val();
	var year =new Date().getFullYear().toString().substr(-2);
	 var a = parseInt(year, 10);
    var b = parseInt(8, 10);
    var paymentCardNumber=$("#paymentCardNumber").val();
    if (paymentCardNumber!='') {
if(date.charAt(2)=="/" && date.length==5){
		if (date.charAt(3)+date.charAt(4) >=year && date.charAt(3)+date.charAt(4) <=a+b ) {
			if (date.charAt(0)+date.charAt(1) >=1 && date.charAt(0)+date.charAt(1) <=12 ) {
				flag=true
		}else{
		$("#expDate").val("");
		flag=false;
		}
		}else{
		$("#expDate").val("");
		flag=false;
		}
		 
	}else{
		$("#expDate").val("");
		flag=false;
	}
    }else{
    	flag=true;
    }
	
	return flag;
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
 	var lastNameVal =$('#lastname').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (lastNameVal.match(regExp)) {
 		$('#lastname').css('border','1px solid green');
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
  //work Validetion
 function work(){
 	var work =$('#work').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (work.match(regExp)) {
 		$('#work').css('border','1px solid green');
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
 //Security Ans Validetion 
 function secQusAns(){
 	var secQusAns =$('#secQusAns').val(),
 	 regExp =/^([A-Za-z0-9]{5,20})$/;
 	if (secQusAns.match(regExp) && secQusAns!="") {
 		$('#secQusAns').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag

 }
 function addMoneyOn(){
 	flag=false;
 	var enterAmountVar= enterAmount();
 	if (enterAmountVar) {
 		var entercvvVar=entercvv();
 		if (entercvvVar) {
 			var matchHdotpVar=matchHdotp();
 			if(matchHdotpVar){
 				flag=true;
 			}else{
 				flag=false;
 			}
 		}else{
 		flaf=false;
 	}

 	}else{
 		flag= false;
 	}
 	return flag;
 }
 function enterAmount(){
 	var enterAmount=$("#enterAmount").val();
 	regExp =/^[0-9]+$/;
 	if (enterAmount.match(regExp)) {
 		$('#enterAmount').css('border','1px solid green');
 		flag=true;
 	}else{
 		$("#enterAmount").val("");
 		$("#enterAmount").focus();
 		$('#enterAmount').css('border','1px solid red');
 		flag =false;
 	}
 	return  flag;
 }

 function entercvv(){
 	var entercvv=$("#enterCvv").val();
 	regExp =/^([0-9]{3,3})$/;
 	if (entercvv.match(regExp)) {
 		$('#enterCvv').css('border','1px solid green');
 		flag=true;
 	}else{
 		$("#enterCvv").val("");
 		$('#enterCvv').css('border','1px solid red');
 		$("#enterCvv").focus();
 		flag=false;
 	}
 	return  flag;
 }
 function sentOtp(){
 	$.ajax({
        url: 'send_mail',
        method: 'POST',
        timeout: 1000,
        dataType: "json",
        async: false,
        success: function(msg){
        	 var otpMatch=(JSON.stringify(msg.data));
        	 var replace=otpMatch.replace(/\"/g, "");
                if(msg.sent){
                	 $("#storeOtp").val(replace)
                    $('#feedback').html("<label style='color:green;'>OTP Sent Successfully To Your Provided Mail ,Please Enter The Otp</label>").delay(5000).hide('slow');
                       
                        }
                        else{
                            $('#feedback').html("<label style='color:red;'>There Is An error, Please Check your Connection Or Contact Us</label>").delay(5000).hide('slow');
                        }
                       
               }
         });
 }
 function matchHdotp(){
 	var hisval=$("#storeOtp").val();
 	var otpForWallet=$("#otpForWallet").val();
 	if(otpForWallet!=''){
 		if(hisval==otpForWallet){
 		flag=true;

 	}else{
 		$("#otpForWallet").val('');
    	$("#otpForWallet").focus();
    	$("#otpForWallet").css('border','1px solid red');
    	flag =false;

 	}
 	}else{
 		$('#feedback').html("<label style='color:red;'>Please Enter Otp That Sended To Your Provided Email,or create new one</label>").delay(5000).hide('slow');
 		$("#otpForWallet").val('');
 		$("#otpForWallet").css('border','1px solid red');
 		flag=false;
 	}
 	
 	return flag;

 }

 function timer(){

 	var start = new Date;

setInterval(function() {
	var currentTime = new Date ( );
  	var currentHours = currentTime.getHours ( );
  	var currentMinutes = currentTime.getMinutes ( );
  	var currentSeconds = currentTime.getSeconds ( );

  	// Pad the minutes and seconds with leading zeros, if required
  	currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  	currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  	// Choose either "AM" or "PM" as appropriate
  	var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  	// Convert the hours component to 12-hour format if needed
  	currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  	// Convert an hours component of "0" to "12"
  	currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  	// Compose the string for display
  	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    $('.clock').text(currentTimeString);
}, 1000)
 }


function ConfPayment(){
	flag=false;
	var enterNameVar=enterName();
	if (enterNameVar) {
		var enterageVar=enterage();
	if (enterage) {
		var enterCardNumberVar=enterCardNumber();
	if (enterCardNumberVar) {
		var enterContactVar=enterContact();
	if (enterContactVar) {
		var fromStation=$("#fromStation").val();
		var toStation=$("#toStation").val();
		if(fromStation!=toStation){
			var enterNoOfMale=parseInt($('#enterNoOfMale').val(),10);
			var enterNoOfFeMale=parseInt($('#enterNoOfFeMale').val(),10);
			var enterNoOfChild=parseInt($('#enterNoOfChild').val(),10);
			var enterNoSeniorCitizen=parseInt($('#enterNoSeniorCitizen').val(),10);

	        var hiddNoOfMale=$('#tPrice').val();
	var calcu=(enterNoOfMale+enterNoOfFeMale+enterNoOfChild+enterNoSeniorCitizen)*hiddNoOfMale;
	var priceTicket=$('#priceTicket').val();
	$('#priceTicket').val(calcu);
		}else{
			alert("To and Form Destination Can't Be same");
			flag=false;
		}


	}else{
		alert('please Only number  In  Id Pnone');
		$('#enterContact').focus();
		$('#enterContact').val('');
		$('#enterContact').css('border','1px solid red');
		flag=false;
	}

	}else{
		alert('please Only number and Character In  Id Card');
		$('#enterCardNumber').focus();
		$('#enterCardNumber').val('');
		$('#enterCardNumber').css('border','1px solid red');
		flag=false;
	}
	}else{
		alert('please Only number In  age');
		$('#enterage').focus();
		$('#enterage').val('');
		$('#enterage').css('border','1px solid red');
		flag=false;
	}

	}else{
		alert('please Only Character In  Name');
		$('#enterName').focus();
		$('#enterName').val('');
		$('#enterName').css('border','1px solid red');
		flag=false;
	}
	return flag;
}
function enterName(){
	var firstName =$('#enterName').val(),
 	 regExp =/^[a-zA-Z\s]+$/;
 	if (firstName.match(regExp)) {
 		$('#enterName').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag
}
function enterage(){
	var enterage=$("#enterage").val();
 	regExp =/^([0-9]{2,2})$/;
 	if (enterage.match(regExp)) {
 		$('#enterage').css('border','1px solid green');
 		flag=true;
 	}else{
 		flag=false;
 	}
 	return  flag;
}
function enterCardNumber(){
	var enterCardNumber =$('#enterCardNumber').val(),
 	 regExp =/^[a-zA-Z0-9\s]+$/;
 	if (enterCardNumber.match(regExp)) {
 		$('#enterCardNumber').css('border','1px solid green');
 		flag=true;

 	 }else{
 	 	flag=false;
 	 }
 	 return flag
}
function enterContact(){
	var enterContact=$("#enterContact").val();
 	regExp =/^([0-9]{10,10})$/;
 	if (enterContact.match(regExp)) {
 		$('#enterContact').css('border','1px solid green');
 		flag=true;
 	}else{
 		flag=false;
 	}
 	return  flag;
}
function datepickerpmn(){
	alert('ahah')
	var datepickervar =new Date($('#datepickerpmn').val());
	 var dd = datepickervar.getDate();
var mm = datepickervar.getMonth()+1; //January is 0!
var yyyy = datepickervar.getFullYear();
var dateFormet= dd+"/"+mm+"/"+yyyy;
 	if (datepickervar.getFullYear() && datepickervar.getMonth() && datepickervar.getDate()) {
 		flag=true;

 		$("#dateTicket").val(dateFormet)
 	 }else{
 	 	flag=false;
 	 }
 	 return flag


}