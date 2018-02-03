let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];
let a = document.querySelectorAll("#cars");
let f = document.querySelector("#cars");
let h = "";
for (var i = cars.length - 1; i >= 0; i--) {
	h += "<div class='card'>"+"<img class = 'card' src = "+cars[i].image_url+">" +"<button class='basket'>vk</button>"+ "<p>"+cars[i].price+"</p>"+"</div>";
}
f.innerHTML = h;
let list = [];
function clickMe(e) {
	let a = e.currentTarget.parentElement.childNodes[2].innerHTML;
	let s = document.querySelector("#sum").innerHTML;
	if(parseInt(contain(a)) == 0){
		document.querySelector("#sum").innerHTML = parseInt(s) + parseInt(a);
		list.push(a);
	}
	else{
		document.querySelector("#sum").innerHTML = parseInt(s) - parseInt(a);
		rem(a);
	}
	document.querySelector("#items").innerHTML = list.length;
}
let x = document.querySelectorAll(".basket");
for (var i = x.length - 1; i >= 0; i--) {
	x[i].addEventListener('click',clickMe);
}
function contain(a) {
	let c = 0;
	for (var i = list.length - 1; i >= 0; i--) {
		if(parseInt(list[i]) == parseInt(a))
			c++;
	}
	return c;
}
function rem(a) {
	list1 = [];
	for (var i = list.length - 1; i >= 0; i--) {
		if(parseInt(list[i]) != parseInt(a))
			list1.push(list[i]);
	}
	list = list1;
}
