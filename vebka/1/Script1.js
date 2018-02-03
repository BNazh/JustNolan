


function buttonClicked(event){
	if(event.target.parentNode.dataset.status!="done"){
		event.target.parentNode.dataset.status="done";
	}
	else{
		event.target.parentNode.dataset.status="none";
	}
	
	//a.dataset.status="done";

}

var  eve = document.querySelector("#tasks");
eve.addEventListener('click', buttonClicked);

