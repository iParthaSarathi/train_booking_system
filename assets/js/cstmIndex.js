var flag;

$(function(){
	setTimeout(function(){ 
		$("#trainNo").focus();
	}, 1000);
	$(document).on("keyup","#days",function(){
		var days = $("#days").val();
		validDay(days);
	});
	
	$(document).on("keyup","#stations",function(){
		var station = $("#stations").val();
		validStations(station);
	});
	
	$(document).on("blur","#arrvialStarthrs",function(){
		aTimeHours();
	});
	
	$(document).on("blur","#arrvialStartmins",function(){
		aTimemins();
	});
	
	$(document).on("blur","#departureStarthrs",function(){
		dTimeHours();
	});
	
	$(document).on("blur","#departureStartmins",function(){
		dTimemins();
	});
	
	$(document).on("keyup","#seatAvlForBooking",function(){
		SeatAvlForBooking();
	});
	
	$(document).on("keyup","#speed",function(){
		speed();
	});
	
	$(document).on("keyup","#currentAvlTkt",function(){
		currentAvlTkt();
	});	
	
	$(document).on("keyup","#quota",function(){
		quota();
	});
	
	$(document).on("keyup","#price",function(){
		price();
	});
	
	$(document).on("keyup","#cupon",function(){
		cupon();
	});
	
	$("#trainNo").keypress(function (e) {
     	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        	$("#trainNoSpnLvl").html("Only Numbers").show().fadeOut("slow");
            return false;
    	}
   	});
	
	//$(document).on("blur","#trainNo",function(){
	//	trainNoValid();
//	});
	
	
	
	
});



function validAll(){
	var validheckTrainNo = checkTrainNo();
	alert("1"+validheckTrainNo);
	if(validheckTrainNo == true){
		flag = true;
		var validheckTrainName = checkTrainName();
			alert("2"+validheckTrainName);
		if(validheckTrainName == true){
			flag = true;
			var validetStations = validStations();
			
				alert("3"+validetStations);
			if(validetStations == true){
				flag = true;
				var validetDay = validDay();
					alert("4"+validetDay);
				if(validetDay == true){
					flag = true;
					var validaTimeHours = aTimeHours();
						alert("5"+validaTimeHours);
					if(validaTimeHours == true){
						flag = true;
						var validaTimemins = aTimemins();
						
							alert("6"+validaTimemins);
						if(validaTimemins == true){
							flag = true;
							var validdTimeHours = dTimeHours();
								alert("7"+validdTimeHours);
							if(validdTimeHours == true){
								flag = true;
								var validdTimemins = dTimemins();
									alert("8"+validdTimemins);
								if(validdTimemins == true){
									flag = true;
									var validSeatAvlForBooking = SeatAvlForBooking();
										alert("9"+validSeatAvlForBooking);
									if(validSeatAvlForBooking == true){
										flag = true;
										var validSpeed = speed();
											alert("10"+validSpeed);
										if(validSpeed == true){
											flag = true;
											var validCurrentAvlTkt = currentAvlTkt();
												alert("11"+validCurrentAvlTkt);
											if(validCurrentAvlTkt == true){
												flag = true;
												var validQuota = quota();
													alert("12"+validQuota);
												if(validQuota == true){
													flag = true;
													var validPrice = price();
														alert("13"+validPrice);
													if(validPrice == true){
														flag = true;
														var validCupon = cupon();
															alert("14"+validCupon);
														if(validCupon == true){
															flag = true;
														}else{
															$("#cupon").focus();
															flag = false;
														}
													}else{
														$("#price").focus();
														flag = false;
													}
												}else{
													$("#quota").focus();
													flag = false;
												}
											}else{
												$("#currentAvlTkt").focus();
												flag = false;
											}
										}else{
											$("#speed").focus();
											flag = false;
										}
									}else{
										$("#seatAvlForBooking").focus();
										flag = false;
									}
								}else{
									$("#departureStartmins").focus();
									flag = false;
								}
							}else{
								$("#departureStarthrs").focus();
								flag = false;
							}
						}else{
							$("#arrvialStartmins").focus();
							flag = false;
						}
					}else{
						$("#arrvialStarthrs").focus();
						flag = false;
					}
				}else{
					$("#days").focus();
					flag = false;
				}
			}else{	
				$("#stations").focus();
				flag = false;
			}
		}else{
			$("#trainName").focus();
			flag = false;
		}
	}else{
		$("#trainNo").focus();
		flag = false;
	}
	return flag;
}



function validStations(station){
	var nameValid =/^([a-zA-Z\s,]{30,150})$/;
	if(station == ""){
		$('#stationsSpn').html(" <label id='stationsSpnLvl'>Please Enter Station</label>");
		$('#stationsSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#stations').css({
			'border':'1px solid red'
	   });
		flag = false;
	}else{
		var station = $("#stations").val();
		if(!station.match(nameValid)){
			$('#stationsSpn').html(" <label id='stationsSpnLvl'>Stations dose contain number and should not less then 30 and greater then 150</label>");
			$('#stationsSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#stations').css({
				'border':'1px solid red'
		   	});
			flag = false;
		}else{
			$('#stationsSpn').html(" <label id='stationsSpnLvl'></label>");
			$('#stationsSpnLvl').css({
				"display": "none"
			});
				$('#stations').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function validDay(days){
	var nameValid =/^([a-zA-Z\s,]{6,56})$/;
	if(days == ""){
		$('#daysSpn').html(" <label id='daysSpnLvl'>Days Can't be left Blank</label>");
		$('#daysSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#days').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		var days = $("#days").val();
		if(!days.match(nameValid)){
			$('#daysSpn').html(" <label id='daysSpnLvl'>Days dose not contain number and should not less then 6 and greater then 56</label>");
			$('#daysSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#days').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#daysSpn').html(" <label id='daysSpnLvl'></label>");
			$('#daysSpnLvl').css({
				"display": "none"
			});
				$('#days').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function aTimeHours(){
	if($("#arrvialStarthrs").val() == 00){
		$('#arrvialStarthrs').focus();
		$('#arrvialTimeSpn').html(" <label id='arrvialTimeSpnLvl'>Please Select Arrvial hours</label>");
		$('#arrvialTimeSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#arrvialStarthrs').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		$('#arrvialTimeSpn').html(" <label id='arrvialTimeSpnLvl'></label>");
		$('#arrvialTimeSpnLvl').css({
			"display": "none"
		});
			$('#arrvialStarthrs').css({
			'border':'1px solid green'
	   	});
		flag = true;
	}	
	return flag;
}

function aTimemins(){
	if($("#arrvialStartmins").val() == 00){
		$('#arrvialStartmins').focus();
		$('#arrvialTimeSpn').html(" <label id='arrvialTimeSpnLvl'>Please Select Arrvial minutes</label>");
		$('#arrvialTimeSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#arrvialStartmins').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		$('#arrvialTimeSpn').html(" <label id='arrvialTimeSpnLvl'></label>");
			$('#arrvialTimeSpnLvl').css({
				"display": "none"
			});
				$('#arrvialStartmins').css({
				'border':'1px solid green'
		   });
		flag = true;
	}	
	return flag;
}

function dTimeHours(){
	if($("#departureStarthrs").val() == 00){
		$('#departureStarthrs').focus();
		$('#departureTimeSpn').html(" <label id='departureTimeSpnLvl'>Please Select Departure hours</label>");
		$('#departureTimeSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#departureStarthrs').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		$('#departureTimeSpn').html(" <label id='departureTimeSpnLvl'></label>");
			$('#departureTimeSpnLvl').css({
				"display": "none"
			});
				$('#departureStarthrs').css({
				'border':'1px solid green'
		   });
		flag = true;
	}	
	return flag;
}

function dTimemins(){
	if($("#departureStartmins").val() == 00){
		$('#departureStartmins').focus();
		$('#departureTimeSpn').html(" <label id='departureTimeSpnLvl'>Please Select Departure minutes</label>");
		$('#departureTimeSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#departureStartmins').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		$('#departureTimeSpn').html(" <label id='departureTimeSpnLvl'></label>");
			$('#departureTimeSpnLvl').css({
				"display": "none"
			});
				$('#departureStartmins').css({
				'border':'1px solid green'
		   });
		flag = true;
	}	
	return flag;
}

function SeatAvlForBooking(){
	var noValid =/^([0-9]{1,2})$/,
		SeatAvl = $("#seatAvlForBooking").val();
	if(SeatAvl == ""){
		$('#seatAvlForBookingSpn').html(" <label id='seatAvlForBookingSpnLVL'>Seat Avl For Booking Can't be left Blank</label>");
		$('#seatAvlForBookingSpnLVL').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#seatAvlForBooking').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!SeatAvl.match(noValid)){
			$('#seatAvlForBookingSpn').html(" <label id='seatAvlForBookingSpnLVL'>Seat Avl For Booking dose not contain Character and should not less then 1 and greater then 2</label>");
			$('#seatAvlForBookingSpnLVL').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#seatAvlForBooking').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#seatAvlForBookingSpn').html(" <label id='seatAvlForBookingSpnLVL'></label>");
			$('#seatAvlForBookingSpnLVL').css({
				"display": "none"
			});
				$('#seatAvlForBooking').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function speed(){
	var noValid =/^([0-9]{2,3})$/,
		speedval = $("#speed").val();
	if(speedval == ""){
		$('#speedSpn').html(" <label id='speedSpnLvl'>Speed Can't be left Blank</label>");
		$('#speedSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#speed').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!speedval.match(noValid)){
			$('#speedSpn').html(" <label id='speedSpnLvl'>Speed dose not contain Character and should not less then 2 and greater then 3</label>");
			$('#speedSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#speed').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#speedSpn').html(" <label id='speedSpnLvl'></label>");
			$('#speedSpnLvl').css({
				"display": "none"
			});
				$('#speed').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function currentAvlTkt(){
	var noValid =/^([0-9]{0,2})$/,
		currentAvlTktVal = $("#currentAvlTkt").val();
	if(currentAvlTktVal == ""){
		$('#currentAvlTktSpn').html(" <label id='currentAvlTktSpnLvl'>Current Avl Tkt Can't be left Blank</label>");
		$('#currentAvlTktSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#currentAvlTkt').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!currentAvlTktVal.match(noValid)){
			$('#currentAvlTktSpn').html(" <label id='currentAvlTktSpnLvl'>Current Avl Tkt dose not contain Character and should not less then 2 and greater then 3</label>");
			$('#currentAvlTktSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#currentAvlTkt').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#currentAvlTktSpn').html(" <label id='currentAvlTktSpnLvl'></label>");
			$('#currentAvlTktSpnLvl').css({
				"display": "none"
			});
				$('#currentAvlTkt').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function quota(){
	var nameValid =/^([a-zA-Z\s,.]{4,30})$/,
		quotaVal = $("#quota").val();
	if(quotaVal == ""){
		$('#quotaSpn').html(" <label id='quotaSpnLvl'>Quata Can't be left Blank</label>");
		$('#quotaSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#quota').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!quotaVal.match(nameValid)){
			$('#quotaSpn').html(" <label id='quotaSpnLvl'>quota dose not contain Number and should not less then 2 and greater then 3</label>");
			$('#quotaSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#quota').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#quotaSpn').html(" <label id='quotaSpnLvl'></label>");
			$('#quotaSpnLvl').css({
				"display": "none"
			});
				$('#quota').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function price(){
	var noValid =/^([0-9]{2,4})$/,
		priceVal = $("#price").val();
	if(priceVal == ""){
		$('#priceSpn').html(" <label id='priceSpnLvl'>Price Can't be left Blank</label>");
		$('#priceSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#price').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!priceVal.match(noValid)){
			$('#priceSpn').html(" <label id='priceSpnLvl'>Price dose not contain Character and should not less then 2 and greater then 3</label>");
			$('#priceSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#price').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#priceSpn').html(" <label id='priceSpnLvl'></label>");
			$('#priceSpnLvl').css({
				"display": "none"
			});
				$('#price').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}

function cupon(){
	var noValid =/^([0-9]{1,2})$/,
		cuponVal = $("#cupon").val();
	if(cuponVal == ""){
		$('#cuponSpn').html(" <label id='cuponSpnLvl'>Cupon Can't be left Blank</label>");
		$('#cuponSpnLvl').css({
			"display": "block",
			'color':'red',
			'font-size':'11px'
		});
			$('#cupon').css({
			'border':'1px solid red'
	   });
	   flag = false;
	}else{
		if(!cuponVal.match(noValid)){
			$('#cuponSpn').html(" <label id='cuponSpnLvl'>Cupon dose not contain Character and should not less then 1 and greater then 2</label>");
			$('#cuponSpnLvl').css({
				"display": "block",
				'color':'red',
				'font-size':'11px'
			});
				$('#cupon').css({
				'border':'1px solid red'
		   });
		   flag = false;
		}else{
			$('#cuponSpn').html(" <label id='cuponSpnLvl'></label>");
			$('#cuponSpnLvl').css({
				"display": "none"
			});
				$('#cupon').css({
				'border':'1px solid green'
		   });
			flag = true;
		}
	}
	return flag;
}
