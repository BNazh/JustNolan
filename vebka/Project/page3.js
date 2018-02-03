document.querySelector("#imgs").addEventListener('click',function(event){
	document.querySelector("#mainImg").src=event.target.src;
});
var modal = document.getElementById('myModal');
var modalImg = document.querySelector("#img01");
document.querySelector("#mainImg").addEventListener('click',function(event){
	var captionText = document.getElementById("caption");
	modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
});
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
document.querySelector(".next").addEventListener('click',function(event){
	var slides = document.querySelector("#imgs").childNodes;
	let a =0;
	let img = document.querySelector("#mainImg");
	for(let i=1;i<slides.length;i+=2){
		if(slides[i].src==img.src){
			a=i;
			break;
		}
	}
	
	img.src=slides[a+2].src;
	modalImg.src=slides[a+2].src;
});
document.querySelector(".prev").addEventListener('click',function(event){
	var slides = document.querySelector("#imgs").childNodes;
	let a =0;
	let img = document.querySelector("#mainImg");
	for(let i=1;i<slides.length;i+=2){
		if(slides[i].src==img.src){
			a=i;
			break;
		}
	}
	
	img.src=slides[a-2].src;
	modalImg.src=slides[a-2].src;
});
document.querySelector("#user").addEventListener('click',function(){
	document.querySelector("#userDask").style.display="block";
});