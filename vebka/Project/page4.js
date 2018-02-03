let arr = {"Автомобили и мотоциклы":["Легковые автомобили","Грузовые автомобили","Мотоциклы и мототехника","Автобусы","Спецтехника","Сельхозтехника","Водный транспорт","Запчасти и аксессуары","Шины и диски","Прочее"],"Недвижимость":["Квартиры","Комнаты","Комнаты","Участки","Коммерческая","Гаражи"]};

function Function() {
   var x = document.getElementById("inputCategory");
    var i = x.selectedIndex;
    let a = x.options[i].text;
    let input = "<br><select onchange='podFunction()' id='inputPodCategory' class='adderInput'>";
    for(k of arr[a]) input+="<option>"+k+"</option>";
    input+="</select>";
	x.parentNode.innerHTML+=input;
}

function podFunction() {
   var x = document.getElementById("inputPodCategory");
    var i = x.selectedIndex;
    let a = x.options[i].text;
    let input = "<tr><td class='adderPar'>Заголовок</td><td><input type='text' name='' class='adderInput'></td></tr><tr class='adderPar'><td>Полное описание</td><td><textarea class='textInput'></textarea></td></tr><tr><td class='adderPar'>Цена (стоимость услуги)</td><td><input type='text' name='' class='adderInput'></td></tr><tr class='adderPar'><td>Мобильный телефон</td><td><input type='text' name='' class='adderInput'></td></tr><tr><td class='adderPar'>Контактное лицо</td><td><input type='text' name='' class='adderInput'></td></tr>";
    x.parentNode.parentNode.parentNode.innerHTML+=input;
}
document.querySelector("#user").addEventListener('click',function(){
    document.querySelector("#userDask").style.display="block";
});