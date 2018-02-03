//document.querySelector("#btKategory button").addEventListener('click',function(){
// 	NodeList.prototype.forEach = Array.prototype.forEach;
// 	let a = document.querySelector("#btKategory button").dataset.toot;
// 	if(a=="true"){
// 		var divs = document.querySelectorAll('.allCategory').forEach(function(el) {
//   		el.style.display="flex";
//   		})
//   		document.querySelector("#btKategory button").dataset.toot="false";
//   		document.querySelector("#btKategory button").innerHTML="СВЕРНУТЬ КАТЕГОРИИ"
// 	}else{
// 		var divs = document.querySelectorAll('.allCategory').forEach(function(el) {
//   		el.style.display="none";
//   		})
//   		document.querySelector("#btKategory button").dataset.toot="true";
//   		document.querySelector("#btKategory button").innerHTML="ВСЕ КАТЕГОРИИ"
// 	}
	
// });
// $(document).ready(function(){
//     $("#btKategory button").click(function(){
//         $(".allCategory").slideToggle("slow");
//         $("#btKategory button").text($("#btKategory button").text()=="ВСЕ КАТЕГОРИИ"?"СВЕРНУТЬ КАТЕГОРИИ":"ВСЕ КАТЕГОРИИ");
//        	$('.allCategory').css('display',"flex");
//         //document.querySelector("#btKategory button").innerHTML="ВСЕ КАТЕГОРИИ";
//     });
// });
document.querySelector("#user").addEventListener('click',function(){
	if(document.querySelector("#userDask").style.display=="block")
		document.querySelector("#userDask").style.display="none";
	else document.querySelector("#userDask").style.display="block"
});