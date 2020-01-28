$(function() {

	$("#logIn").on("click", function(){
		abc();
	});

	function abc(){
		var sinId =  $("#userName").val(),
			password =  $("#password").val();	
		if(sinId == ""){
			alert("please Enter Id");
			$("#userName").focus();
		}else if(password == ""){
			alert("Please Enter Password");	
			$("#password").focus();
		}else{
			
		}
	};
	
	
});
