
function submitEvent(){
	var info = document.querySelector("#info").value;
	var price = document.querySelector("#price").value;
	
	var reg = document.getElementById("regions");
	var region = reg.options[reg.selectedIndex].text;
	
	var email = document.querySelector("#email").value;	
console.log(info.length);
	if(info.length==0){
		var infoError = document.querySelector("#info-text");
		infoError.style.color = "red";
		
	}
	if(price.length==0){
		var priceError = document.querySelector("#price-text");
		priceError.style.color = "red";
		
	}
	if(email.length==0){
		const emailError = document.querySelector("#email-text");
		emailError.style.color = "red";
		
	}
	if(reg.options[reg.selectedIndex].value=="-1"){
		
		var reg1 = document.getElementById('region-text');
		reg1.style.color = "red";
	}
	if(reg.options[reg.selectedIndex].value=="-1" || email.length==0  || price.length==0 || info.length==0){
		var block = document.getElementById('error-block');
		block.style.display="flex";
	}
}

//var click  = document.querySelector("#submit").addEventListener('click',submitEvent());
