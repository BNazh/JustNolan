function  clickButton(){
	
		    const s1 = document.querySelector("#s11");
			const s2 = document.querySelector("#s12");
			const s3 = document.querySelector("#s13");
			const s4 = document.querySelector("#s21");
			const s5 = document.querySelector("#s22");
			const s6 = document.querySelector("#s23");
			const s7 = document.querySelector("#s31");
			const s8 = document.querySelector("#s32");
			const s9 = document.querySelector("#s33");

			let sum = (parseInt(s1.value)+parseInt(s4.value)+parseInt(s7.value ))- (parseInt(s3.value)+parseInt(s6.value) +parseInt(s9.value));

			
			 document.getElementById("result").innerHTML = sum;
	
		
}