<!DOCTYPE>
<html lang="en">
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="mainPane.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="reg.js"></script>
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body  onload="showSlides1()">

	<header>
		<div class="topHeader">
			<div class="leftMenu">
				<a class="top-link" href="mainPage.html">games.kz</a>
				
				<div class="dropdown">
				  	<a class="dropbtn">Платформы</a>
				  	<div class="dropdown-content">
				    	<a class="sizeOnA" href="#">PC</a>
				    	<a class="sizeOnA" href="#">Play Station4</a>
				    	<a class="sizeOnA" href="#">XBOX one</a>
				    	<a class="sizeOnA" href="">Play Station3</a>
				    	<a class="sizeOnA" href="">XBOX 360</a>
				    	<a class="sizeOnA" href="">Nintendo Switch</a>
				  	</div>
				</div>
				<div class="dropdown">
				  <a class="dropbtn">Жанры</a>
				  <div class="dropdown-content">
				    <a style="font-size: 19.5px;" href="#">Экшен</a>
				    <a style="font-size: 19.5px;"  href="#">Шутеры</a>
				    <a style="font-size: 19.5px;"  href="">Ролевые</a>
				    <a style="font-size: 19.5px;" href="">Приключения</a>
				    <a href="#">Стратегии</a>
				  </div>
				</div>
				<a class="top-link" href="">Новости</a>
				
			</div>
			<div class="rightMenu">
				<div>
					<input style="height: 30px;" type="text" name="" placeholder="Искать">
				</div>
				
				</style>
				<a class="top-link" href="registration.php">Регистрация</a>
					<div>
					<button id="bu" onclick="exitButton()">ВЫйти</button>
					</div>
					<div id="ba">
					<button  class="top-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;padding-top:10px; ">Войти</button>

						<div id="id01" class="modal">
						  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
						  <form class="modal-content" method="post">
						    <div class="container">
						      <label><b>Логин</b></label>
						      <input class="inputs" type="text" placeholder="Логин" name="enter_login" required>

						      <label><b>Пароль</b></label>
						      <div class="pass">
						      	<input  class="inputs" style="width: 100%;" type="password" id="pass123" placeholder="Введите Пароль" name="enter_password" required>
						      	<img id="img3" class="imageX" 
						      	onclick ="showPassword3()" src="glaz.png">
						      </div>
						      <input type="checkbox" checked="checked">Запомни меня
						      
						      <div class="clearfix">
						        <button  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Отмена</button>
						        <input type="submit" class="signupbtn" value="Sign in" style="background-color: #4CAF50;">
						      </div>
						    </div>
						  </form>
						</div>
					</div>	
			</div>
		</div>
	</header>
<section class="carusel">
		<div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="media/title1.jpg" style="width:100%">
			  <div class="text">CS G0</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="media/title2.jpg" style="width:100%">
			  <div class="text">BattleField IV</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="media/fifa18-title.jpg" style="width:100%">
			  <div class="text">Fifa 18</div>
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

			//showSlides1()
			
			</script>
		</section>
		<section>
			
				<button style="width: 33%" class="tablink" onclick="openCity('pops', this, '#249a10')" id="defaultOpen">Популярные</button>
				<button style="width: 34%" class="tablink" onclick="openCity('news', this, '#249a10')">Новые</button>
				<button style="width: 33%" class="tablink" onclick="openCity('top10', this, '#249a10')">TOP 10</button>
				

	
			<div onmouseover="typeWriter()" id="pops" class="tabcontent">
			  <div class="main">
					<h1>Популярные</h1>
					<hr>

					
					<p style="color:#f21937">Самые лучшие игры на Games.kz</p>
					<p id="dem"></p>
					
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>
					<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

					<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>
<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>
					<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>
					<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>





					
					</div>
					<div class="pagination">
						  <a>&laquo;</a>
						  <a class="active" >1</a>
						  <a>2</a>
						  <a>3</a>
						  <a>4</a>
						  <a>5</a>
						  <a>6</a>
						  <a>7</a>
						  <a>8</a>
						  <a>9</a>
						  <a>&raquo;</a>
					</div>


			</div>

					

			<div id="news" class="tabcontent">
			  <div class="main">

					<h1>Новые</h1>
					<hr>

					
					<p style="color:#f21937">Мы дарим вам новые игры и также новогодные настраение</p>

					
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>
<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>

<!-- Second row-->
					<div class="row">
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					      		<img src="media/title3.jpg" style="width: 100%;height: 130px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title7.jpg" alt="Lights" style="width:100%;height: 130px;">
					    		 <a href="page1.php">Assassin's Creed 2</a>
					      	</div>
					      
					    </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">
					    		<img src="media/title10.jpg" alt="Nature" style="width:100%; height: 130px;">
								<a href="page1.php">Need for Speed</a>
					    	</div>
					  </div>
					  </div>
					  <div class="column">
					    <div class="content">
					    	<div class="img">	
					    		<img src="media/title2.jpg" alt="Mountains" style="width:100%;height: 130px;">
					     		<a href="page1.php">Call of Duty:Modern Warfare</a>
					     	</div>
					  	</div>
					 </div>
					<!-- END GRID -->
					</div>



					

			</div>
</div>

			<div id="top10" class="tabcontent">
			  <h1>TOP 10</h1>

					<hr>
					<p style="color:#f21937">Приветствуем вас на рубрику TOP10</p>	
					<div class="row">
						<p style="font-size:24px; ">Десатая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title1.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Девятая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title2.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Восьмая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title3.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Седьмая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title4.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Пятая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title5.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Четвертая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title6.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Третья места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title7.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Вторая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title8.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p style="font-size:24px; ">Первая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title9.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>
					<div class="row">
						<p>Вторая места</p>
					 	<div class="content">
					    	<div class="img top10">
					      		<img src="media/title10.jpg" style="width: 100%;height: 460px;">
					      		<a href="page1.php">GTA V</a>
					      	</div>
					      
					    </div>
					</div>

					
			</div>


			
		</section>
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
var i = 0;
var txt = 'Добро Пожаловать в наш рай!';
var speed = 200;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("dem").innerHTML += txt.charAt(i);
    i++;
  	setTimeout(typeWriter, speed);  
  }
  
}
</script>
<?php 

$con = mysqli_connect("localhost","root","","games");
    
    
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['enter_login'])){
  
  $login = $_POST['enter_login'];
  
  if(isset($_POST['enter_password'])){
	
	$psw = $_POST['enter_password'];
	
    if($psw==='gameadmin' && $login==='gameadmin'){
      	echo "<script>document.location.replace('adminPage.php');</script>";
      	
    }
    else{
		$sql = "SELECT * FROM game_table WHERE login='$login'" ;
		$result = mysqli_query($con, $sql);
		$row = $result->fetch_assoc();
	        
	       if($row["password"]===$psw){
	        	echo "<script>
	        		alert('asd');
	        		document.getElementBtId('bu').display='block';
	        		document.getElementById('ba').display='none';
	        		alert('qwe');
	        	</script>";
			       
	       
	   		}
	    
    }
	}
}



mysqli_close($con);
    

 ?>
</body>



</html>