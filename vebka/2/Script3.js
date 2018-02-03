

function clickButton(){
	const name= document.querySelector("#name").value; 
	const surname= document.querySelector("#surname").value;
	
	var obj = document.getElementById('faculty');
	var faculty = obj.options[obj.selectedIndex].text;

	
	if(name.length==0){
		const name1= document.querySelector("#name")
		name1.classList.add("error");
	}
	if(surname.length==0){
		const surname1= document.querySelector("#surname")
		surname1.classList.add("error");	
	}if(obj.options[obj.selectedIndex].value=="-1"){
		var obj1 = document.getElementById('faculty');
		obj1.classList.add("error");
	}
	if(name.length>0 && surname.length>0 && obj.options[obj.selectedIndex].value!="-1"){
		var newTr = document.createElement("tr");
		document.querySelector("#students").appendChild(newTr);
 		
 		var newName = document.createElement("td");
		newName.textContent = name;
		document.querySelector("#students").appendChild(newName);

	
		var newSurname = document.createElement("td");
		newSurname.textContent = surname;
		document.querySelector("#students").appendChild(newSurname);

		var newFaculity = document.createElement("td");
		newFaculity.textContent = faculty;
		document.querySelector("#students").appendChild(newFaculity);	

	}
}

