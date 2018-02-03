<?php 
if(isset($_GET['delete'])){
	unset($_COOKIE['user']);
	setcookie("user", "", time() - 3600);
}
$avto = false;
if(isset($_COOKIE['user'])){
	$avto = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="page3.css">
	<meta charset="utf-8">
	<script src="page3.js" defer></script>
	<style type="text/css">
		#userDask{
	display: none;
	position: absolute;
	width: 200px;
	height: 300px;
	background-color: #EBE8E8;
	right: 160px;
	top:40px;
	border:1px solid #9C9C9C;
	padding: 10px;
}
.moi{
	text-decoration: none;
	color: grey;
}
.moi:hover{
	text-decoration: underline;
	color: grey;
}
	</style>
</head>
<body>
	<div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01">
	   <a class="prev" >&#10094;</a>
    	<a class="next">&#10095;</a>
</div>
	<header>
		<div id="header">
			<a href="MainPage.php" style="text-decoration: none;"><span id="mainName">Salexy</span></a>
			<div id="divSearch1">
				<select id="selectCity">
					<option>Astana</option>
					<option>Almaty</option>
					<option>Taraz</option>
					<option>Aktau</option>
					<option>Semey</option>
					<option>Oral</option>
				</select>
				<input class="search" id="searchInput" type="text" name="" size="80"><button class="search" id="searchButton" >Найти</button>
			</div>
			<div id="leftOperations">
			<div id="userDask">
					<?php
					if($avto){ ?>
					<p style="color: grey;">Добро пожаловать на Salexy</p>
					<hr>
					<br>
					<a href="MainPage.php?delete=ok" class="moi"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF; ">Выйти</button></a>
					<p><a href="" class="moi">Мой Salexy</a></p>
					<p><a href="" class="moi">Мои заказы</a></p>
					<p><a href="" class="moi">Мои обявление</a></p>
					<p><a href="" class="moi">Мои желания</a></p>
					<p><a href="" class="moi">Мои купон</a></p>
					
					<?php
					}else{ ?>
					<p style="color: grey;">Добро пожаловать на Salexy</p>
					<a href="lodin.php"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF; ">Войти</button></a>
					
					<hr>
					<p style="color: grey;">Новый покупатель?</p>
					<a href="registr.php"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF ;">Зарегистрироваться</button></a>
					<br>	
					<p><a href="" class="moi">Мой Salexy</a></p>
					<p><a href="" class="moi">Мои заказы</a></p>
					<p><a href="" class="moi">Мои обявление</a></p>
					
					<?php
					}
					?>
					
				</div>
				<img id="star" src="Star.png">
				<img id="user" src="User.png">
				<a href="page4.php"><button id="add">Подать объявление</button></a>
			</div>
		</div>
	
	</header>
	<section>
	<div id="section">
		<div id="divSearch2">
			<select id="selectCity">
				<option>Astana</option>
				<option>Almaty</option>
				<option>Taraz</option>
				<option>Aktau</option>
				<option>Semey</option>
				<option>Oral</option>
			</select>
			<input class="search" id="searchInput" type="text" name="" size="80"><button class="search" id="searchButton" >Найти</button>
		</div>
		<div id="path">
			<br>
			<a href="">Объявления</a>>Автомобили и мотоциклы в Алматы
			<br><br>
		</div>
		<?php
			$con=mysql_connect("localhost","root","") or die("no connection");
			mysql_select_db("project");
			$result = mysql_query("SELECT * FROM `pro`");
			while($row = mysql_fetch_array($result)) {
				if($row['id']==$_GET['id']){ ?>
					
				
		<div id="mainDisc">

			<div id="info"><p id="textName"><?php echo $row['title']; ?></p>
			<div id="prise">
				<?php echo $row['price']; ?>tg
			</div>
			</div>
			<div id="imgDiv">
				<div id="mainImgDiv">
					<img id="mainImg" src="<?php echo explode(',',$row['image'])[0]; ?>">
				</div>
				<div id="imgs">
					<?php 
					$count = 1;
					foreach (explode(",",$row['image']) as $value) {
						echo '<img src="'.$value.'" data-id="'.$count++.'">';
					} ?>
					<!-- <img src="img1.jpg" data-id="1">
					<img src="img12.jpg" data-id="2">
					<img src="img13.jpg" data-id="3">
					<img src="img14.jpg" data-id="4">
					<img src="img15.jpg" data-id="5">
					<img src="img16.jpg" data-id="6">
					<img src="img17.jpg" data-id="7"> -->
				</div>
			</div>
			
		</div>
		<div id="adderName">
			<div id="buttons">
				<button id="adderNumber">+7 747 682 51 97</button>
				<button id="sendMess">Написать сообщение</button>
			</div>
			<br><br>
			<p class="adderInfo">Продавец:<br><a href="">Мастер</a><br>На сайте с февраля 2015</p>
			<p class="adderInfo">Адрес:<br><span id="adderCity">Алматы</span> </p>
			<br>
			<p id="adderShow">Просмотров 1 с 25.10.2017</p>
		</div>
		<div>
			<p id="coment"><?php echo $row['des'] ?></p>
		</div>
		<?php }
			} ?>
		<br>
		<p style="font-size: 25px;margin: 10px;">Похожие объявления</p>

		<div id="cards">
			<div class="card">
				<img class="cardImg" src="img1.jpg">
				<div>
					<div class="linkCard">
						<a class="into" href="">Авто-разбор Toyota Camry 20.30.40.</a><br>
						<p class="coment">Большой выбор запчастей на Японские и на Европейские Авто. Двигателя, АКПП,</p>
						<div class="prise">2 000tg</div>
					</div>
					<p class="data">27.08.17</p>
				</div>
			</div>
			<div class="card">
				<img class="cardImg" src="img2.jpg">
				<div>
					<div class="linkCard">
						<a class="into" href="">Авторазбор Toyota SIQUOIA. Крупный разбор.</a><br>
						<p class="coment">Большой выбор контрактных автозапчастей из Америки Европы Японии.</p>
						<div class="prise">3 000tg</div>
					</div>
					<p class="data">04.04.17</p>
				</div>
			</div>
		</div>
		<div id="numberPage">
			<div >
				<a href="">назад</a>
				<a href="">1</a>
				<a href="">вперед</a>
			</div>
			
		</div>
		<br>
		<!--/div>
		<div id="bottomLink">
			<a href="">Все объявления Алматы</a>
			<table>
				<tr><td><a href=""></a></td><td><a href=""></a></td><td><a href=""></a></td></tr>
				<tr><td><a href=""></a></td><td><a href=""></a></td><td><a href=""></a></td></tr>
				<tr><td><a href=""></a></td><td><a href=""></a></td><td><a href=""></a></td></tr>
			</table>
		</div-->
	</section>
	<footer>
		<div id="footer">
			<p>2003-2017 © salexy.kz</p> 
			<dir id="footerLink">
				 <a href="">Объявления</a>
				 <a href="">Добавить</a>
				 <a href="">Условия</a>
				 <a href="">Реклама</a>
				 <a href="">Контакты</a>
		</div>
			</dir>
			
	</footer>
	<script type="text/javascript">
	 	document.querySelector("#user").addEventListener('click',function(){
	if(document.querySelector("#userDask").style.display=="block"){
		document.querySelector("#userDask").style.display="none";
	}
	else {
		document.querySelector("#userDask").style.display="block"
	}
});
	 </script>
</body>
</html>