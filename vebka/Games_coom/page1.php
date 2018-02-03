<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="page1.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>

	<header>
		<div class="topHeader">
			<div class="leftMenu">
				<a class="top-link" href="mainPage.php">games.kz</a>
				
				<div class="dropdown ">
				  <a class="dropbtn">Платформы</a>
				  <div class="dropdown-content">
				    <a href="#">PC</a>
				    <a href="#">Play Station4</a>
				    <a href="#">XBOX one</a>
				    <a href="">Play Station3</a>
				    <a href="">XBOX 360</a>
				    <a href="">Nintendo Switch</a>
				  </div>
				</div>
				<div class="dropdown">
				  <a class="dropbtn">Жанры</a>
				  <div class="dropdown-content">
				    <a href="#">Экшен</a>
				    <a href="#">Шутеры</a>
				    <a href="">Ролевые</a>
				    <a href="">Приключения</a>
				    <a href="#">Стратегии</a>
				  </div>
				</div>
				<a class="top-link" href="">Новости</a>
				
			</div>
			<div class="rightMenu">
				
					<input style="width: 200px;height: 30px;" type="text" name="" placeholder="Искать">
				
				<a class="top-link" href="registration.php">Регистрация</a>
				
				<button class="top-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;padding-top:10px; ">Войти</button>

					<div id="id01" class="modal">
					  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
					  <form class="modal-content animate" action="/action_page.php">
					    <div class="container">
					      <label><b>Логин</b></label>
					      <input class="inputs" type="text" placeholder="Логин" name="email" required>

					      <label><b>Пароль</b></label>
					      <div class="pass">
					      	<input  class="inputs" style="width: 100%;" type="password" id="pass123" placeholder="Введите Пароль" name="psw" required>
					      	<img id="img3" class="imageX" style="top:9px; height: 26px;"
					      	onclick ="showPassword3()" src="http://taganrog-gbsmp.ru/img/ice.png">
					      </div>
					      <input type="checkbox" checked="checked">Запомни меня
					      
					      <div class="clearfix">
					        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Отмена</button>
					        <button type="submit" class="signupbtn" style="background-color: #4CAF50;">Вход</button>
					      </div>
					    </div>
					  </form>
					</div>

			</div>
		</div>
	</header>
	<section class="carusel">
		<div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="media/title1.jpg" style="width:100%">
			  <div class="text">CS Go</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="media/title2.jpg" style="width:100%">
			  <div class="text">BattleField IV</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="media/fifa18-title.jpg" style="width:100%">
			  <div class="text">fifa 18</div>
			</div>

			<a class="prev" onclick="plusSlides2()">&#10094;</a>
			<a class="next" onclick="plusSlides1()">&#10095;</a>

			</div>
			<br>

			<div style="text-align:center">
			  </div>
			<script type="text/javascript">
				var slideIndex = 1;
							

				var x = 0;
			function plusSlides1() {
			  var slides = document.querySelectorAll(".mySlides");
			  for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
			  }
			   	x++;
			    if(x==slides.length)x=0;
			  	slides[x].style.display = "block";
			 	  
			   

			}
			function plusSlides2() {
				   
			  	var slides = document.querySelectorAll(".mySlides");
				for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
			  }
			  x--;
			  if(x<0)x=2;
			  slides[x].style.display = "block";
			    

			}
			time=4000;
			showSlides1();
			function showSlides1() {
				

			  var i;
			  var slides = document.querySelectorAll(".mySlides");
			 for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
			  }
			  if(x==slides.length)x=0;
			  slides[x].style.display = "block";
			  x++;  

			  setTimeout(showSlides1,4000);
			  	
			}

			</script>
	</section>

	<div class="hider">
		<div class="border-section">
			
		<div class="content">
			 <div class="main1">
			 	<div class="main-left">
			 		<h2 style="color:#f21937">Grand Theft Auto IV</h2>
			 		<img class="title-img" src="https://53.img.avito.st/640x480/3277916953.jpg">

			 	</div>	
				<div class="main-right">

					<div>
						<h5 class="h5-style">Дата выхода</h5>
						<b class="b-style">29 апреля 2008</b>
					</div>	
					<div>
						<h5 class="h5-style">Разработчик</h5>
						<b class="b-style">Rockstar North</b>
					</div>
					<div>
						<h5 class="h5-style">Издатель / Издатель в Казахстане</h5>
						<b class="b-style">Rockstar Games / Софт Клаб</b>
					</div>
					<div>
						<h5 class="h5-style">Официфльный сайт</h5>
						<a href="http://www.rockstargames.com/IV/mobile/" class="a-style">www.rockstargames.com</a>
					</div>
				</div>	
				
			</div>

			<div id="reviewStars-input">
			    <input id="star-4" type="radio" name="reviewStars"/>
			    <label title="Хорошо" for="star-4"></label>

			    <input id="star-3" type="radio" name="reviewStars"/>
			    <label title="Хорошо" for="star-3"></label>

			    <input id="star-2" type="radio" name="reviewStars"/>
			    <label title="Достаточно" for="star-2"></label>

			    <input id="star-1" type="radio" name="reviewStars"/>
			    <label title="Плохо" for="star-1"></label>

			    <input id="star-0" type="radio" name="reviewStars"/>
			    <label title="Очень плохо" for="star-0"></label>
			</div>
			<p>248 человек проголосовал </p>
			<p>Средная оценка: 4.1</p>
			<img src="rating.png" style="width: 100%;">

			<div class="main2">
				<p>Grand Theft Auto IV - это четвертая часть гангстерской саги от Rockstar. Игра повествует об эмигранте из некой русскоязычной страны - Нико Беличе, который приезжает в Америку по приглашению своего брата, который точно так же уехал в США в поисках своей мечты. В четвертой части серии разработчики изменили боевую систему, позволив игрокам не только убивать врагов, но и, например, разоружать их выстрелами в руки. Протагонисту предстоит влезть в опасный мир криминала, отвоевывая свое место под солнцем. <br><br> 
				</p>	
				<p>	
				Отдельного внимания заслуживает саундтрек, который не только насчитывает более сотни различных композиций, но и содержит творчество отечественных певцов. Как это не странно, но на русском радио "Владивосток FM" уживаются вместе Серега, Виктор Цой и даже Глюкза.

			</p>
			<p>
				С течением времени, изменения, вызванные загружаемым контентом, будут менять системные требования для этой игры. Пожалуйста, обратитесь к производителю вашего оборудования и на сайт технической поддержки Rockstar Games по адресу www.rockstargames.com/support для получения подробной информации о совместимости оборудования. Отдельные компоненты системы, такие как мобильные интегрированные микросхемы и AGP-видеокарты могут быть несовместимы. Не включенные в список допустимого оборудования системы могут не поддерживаться издателем. Другие требования: установка и игра по сети требует входа в учетную запись Rockstar Games Social Club. Для активации игры по сети и периодической верификации требуется наличие соединения с интернетом. Для игры требуется установка дополнительного программного обеспечения, в том числе Rockstar Games Social Club, DirectX, Chromium, Microsoft Visual C++ 2008 sp1 Redistributable Package и ПО для аутентификации, распознающее определенные характеристики оборудования для их дальнейшей установки, управления цифровыми правами и для других целей поддержки игры. Одноразовый серийный регистрационный код требует регистрации посредством интернета. Разрешается зарегистрировать только один аккаунт в Rockstar Games Social Club. Допускается только один вход в учетную запись Social Club в любое время. Серийный код невозможно передать после активации. Аккаунт Social Club невозможно передать.  Подробнее: http://rockstargame.su/gta-v/gta-5-na-pc/oficialnye-sistemnye-trebovaniya-gta-5-na-pc/ss
			</p>
			<br><br>
			</div>



	</div>
		<div style="display: flex;justify-content: flex-start;">	
			
			<button id="flip">Скриншоты</button>
			<button id="flip2">Требования</button>
		</div>
		
		<div id="panel" class="content2">
			

						<div class="row-img">
						  <div class="column-img">
						    <img class="img-img" src="media/gta4/gta4.jpg" style="width:100%" onclick="openModalImg();curSlide(1)" class="hover-shadow-img cursor-img">
						  </div>
						  <div class="column-img">
						    <img class="img-img" src="media/gta4/gta2.jpg" style="width:100%" onclick="openModalImg();curSlide(2)" class="hover-shadow-img cursor-img">
						  </div>
						  <div class="column-img">
						    <img class="img-img" src="media/gta4/gta3.jpg" style="width:100%" onclick="openModalImg();curSlide(3)" class="hover-shadow-img cursor-img">
						  </div>
						  <div class="column-img">
						    <img class="img-img" src="media/gta4/gta6.jpg" style="width:100%" onclick="openModalImg();curSlide(4)" class="hover-shadow-img cursor-img">
						  </div>
						</div>

						<div id="myModal-img" class="modal-img">
						  <span class="close-img cursor-img" onclick="closeModalImg()">&times;</span>
						  <div class="modal-content-img">

						    <div class="mySlides-img">
						      <div class="numbertext-img">1 / 4</div>
						      <img class="img-img" src="media/gta4/gta4.jpg" style="width:100%">
						    </div>

						    <div class="mySlides-img">
						      <div class="numbertext-img">2 / 4</div>
						      <img class="img-img" src="media/gta4/gta2.jpg" style="width:100%">
						    </div>

						    <div class="mySlides-img">
						      <div class="numbertext-img">3 / 4</div>
						      <img class="img-img" src="media/gta4/gta3.jpg" style="width:100%">
						    </div>
						    
						    <div class="mySlides-img">
						      <div class="numbertext-img">4 / 4</div>
						      <img class="img-img" src="media/gta4/gta6.jpg" style="width:100%">
						    </div>
						    
						    <a class="prev-img" onclick="plusSlidesImg(-1)">&#10094;</a>
						    <a class="next-img" onclick="plusSlidesImg(1)">&#10095;</a>

						    <div class="caption-container-img">
						      <p id="caption-img"></p>
						    </div>


						    <div class="column-img">
						      <img class="demo-img cursor-img img-img" src="media/gta4/gta4.jpg" style="width:100%" onclick="curSlide(1)" alt="Nature and sunrise">
						    </div>
						    <div class="column-img">
						      <img class="demo-img cursor-img  img-img" src="media/gta4/gta2.jpg" style="width:100%" onclick="curSlide(2)" alt="Trolltunga, Norway">
						    </div>
						    <div class="column-img">
						      <img class="demo-img cursor-img img-img" src="media/gta4/gta3.jpg" style="width:100%" onclick="curSlide(3)" alt="Mountains and fjords">
						    </div>
						    <div class="column-img">
						      <img class="demo-img cursor-img img-img" src="media/gta4/gta6.jpg" style="width:100%" onclick="curSlide(4)" alt="Northern Lights">
						    </div>
						  </div>
						</div>
		</div>	 
		  
		<div id="panel2"  class="content3">
			
	
          <div >
          	<p class="background" name="tre">МИНИМАЛЬНЫЕ СИСТЕМНЫЕ ТРЕБОВАНИЕ</p>
			<table>
				<tr>
					<td class="left-table">
						Операционная система:
					</td>
					<th class="right-table">
						 Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service 
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Видеокарта:
					</td>
					<th class="right-table">
						 NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Процессор:
					</td>
					<th class="right-table">
						 Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Оперативная память (ОЗУ):
					</td>
					<th class="right-table">
						 4GB
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Свободного места на диске:
					</td>
					<th class="right-table">
						65GB
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Звуковая карта:
					</td>
					<th class="right-table">
						 100% совместимая с DirectX 10
					</th>
				</tr>
				<tr>
					<td class="left-table">
						   Привод
					</td>
					<th class="right-table">
						 DVD
					</th>
				</tr>
			</table>
			<p name="tre" class="background">РЕКОМЕНДОВАННЫЕ СИСТЕМНЫЕ ТРЕБОВАНИЯ:</p>
			<table>
				<tr>
					<td class="left-table">
						Операционная система:
					</td>
					<th class="right-table">
						 Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service 
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Видеокарта:
					</td>
					<th class="right-table">
						 NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Процессор:
					</td>
					<th class="right-table">
						 Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Оперативная память (ОЗУ):
					</td>
					<th class="right-table">
						 4GB
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Свободного места на диске:
					</td>
					<th class="right-table">
						65GB
					</th>
				</tr>
				<tr>
					<td class="left-table">
						Звуковая карта:
					</td>
					<th class="right-table">
						 100% совместимая с DirectX 10
					</th>
				</tr>
				<tr>
					<td class="left-table">
						   Привод
					</td>
					<th class="right-table">
						 DVD
					</th>
				</tr>
			</table>	


		</div>
			
		</div>
		</div>







		<footer>
			<div class="icons">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-youtube"></a>
				<a href="#" class="fa fa-skype"></a>	
			</div>
		<section class="foot">
			
			<div id= "xcv" class="kl">Информация о<a href="">сайте</a>Написать письмо <a href="">adminpage.center@sdu.edu.kz</a></div>
		<hr>
			<div class="kl"><div>© 2017 Ams Inc. Все права защищены</div><div><a href="">O нас</a></a>|<a href="">Правила использования сайта</a>|<a href="">политика конфиденциальности</a></div>
				<a id="son" href=""><div><img height="12px" width="12px" src="kz.png"></div><div>Казахстан </div><div> KZ</div></a>
			</div>
		</section>

		</footer>
		
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});

function openModalImg() {
  document.getElementById('myModal-img').style.display = "block";
}

function closeModalImg() {
  document.getElementById('myModal-img').style.display = "none";
}

var index = 1;
showSlide123(index);

function plusSlidesImg(n) {
  showSlide123(index += n);
}

function curSlide(n) {
  showSlide123(index = n);
}

function showSlide123(n) {
  var i;
  var s = document.getElementsByClassName("mySlides-img");
  var d = document.getElementsByClassName("demo-img");
  var captionText = document.getElementById("caption-img");
  if (n > s.length) {index = 1}
  if (n < 1) {index = s.length}
  for (i = 0; i < s.length; i++) {
      s[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
      d[i].className = d[i].className.replace(" active-img", "");
  }
  s[index-1].style.display = "block";
  d[index-1].className += " active-img";
  captionText.innerHTML = d[index-1].alt;
}


</script>

</body>



</html>