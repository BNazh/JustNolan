var asd = document.querySelector("#countries").addEventListener("click",clickB);

var qwe = document.querySelector("#cities").addEventListener("click",clickA);

function clickB(){
let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

		var x = document.getElementById("countries");
	for(var a in countries){
		var option = document.createElement("option");
		option.text = countries[a];
		x.add(option);
		//clickA(countries[a])
	}

var asd = document.querySelector("#countries").removeEventListener("click",clickB);



	}

function clickA(){
	var z = document.querySelector("#countries").value;
	
	 cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
	var x = document.getElementById("cities");
	
	
	var list = cities_by_country[z];
	
	for(var m in list){
		var option = document.createElement("option");
		option.text = list[m];
		x.add(option);
			
	}
var qwe = document.querySelector("#cities").removeEventListener("click",clickA);

}

	
	
	