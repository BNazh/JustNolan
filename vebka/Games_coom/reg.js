

function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;


}




var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function showPassword() {
     var x = document.getElementById("password");
     var z = document.getElementById("img1");
     if (x.type === "password" && x.value.length>0) {
         x.type = "text";
        z.src="glaz2.png";    
    } else {
        x.type = "password";
         z.src="glaz.png";
    }
 }
 function showPassword2() {
     var x = document.getElementById("password2");
     var z = document.getElementById("img2");
     if (x.type === "password" && x.value.length>0) {
         x.type = "text";
         z.src="glaz2.png";
     } else {
         x.type = "password";
         z.src="glaz.png";
    }
}
function showPassword3(){
    var x = document.getElementById("pass123");
    var z = document.getElementById("img3");
    if (x.type === "password" && x.value.length>0) {
        x.type="text";
        z.src="glaz2.png";
    } else {
        x.type = "password";
        z.src="glaz.png";
    }
}
