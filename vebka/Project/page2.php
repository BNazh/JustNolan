<?php
if(isset($_GET['delete'])){
	unset($_COOKIE['user']);
	setcookie("user", "", time() - 3600);
}
$avto = false;
if(isset($_COOKIE['user'])){
	$avto = true;
}
$bool = false;
if(isset($_COOKIE['user'])){
	if(json_decode($_COOKIE["user"])=="777"){
		$bool = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="page2.css">
	<meta charset="utf-8">
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
				<input class="search" id="searchInput" type="text" name=""><button class="search" id="searchButton" >Найти</button>
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
		<div id="otherSection">
			<a href="">Легковые автомобили</a>>
			<a href="">Грузовые автомобили</a>>
			<a href="">Мотоциклы и мототехника</a>>
			<a href="">Автобусы</a>>
			<a href="">Спецтехника</a>>
			<a href="">Сельхозтехника</a>>
			<a href="">Водный транспорт</a>>
			<a href="">Запчасти и аксессуары</a>>
			<a href="">Шины и диски</a>>
			<a href="">Прочее</a>>
		</div>
		<div id="cards">
			<?php

				$con=mysql_connect("localhost","root","") or die("no connection");
				mysql_select_db("project");
				if(isset($_GET['del'])){
					mysql_query("DELETE FROM `pro` WHERE `pro`.`id` = ".$_GET['del'].";");
				}
				$result = mysql_query("SELECT * FROM `pro`");
				while($row = mysql_fetch_array($result)) {
					if($bool){
						echo "<div class='card'>
							<img class='cardImg' src='".explode(",",$row['image'])[0]."'>
							<div class='discr'>
								<div class='linkCard' >
									<a class='into' href='page3.php?id=".$row['id']."'>".$row['title']."</a><br>
									<p class='coment'>".substr($row['des'],0)."<br>"."</p>
									<div class='prise'>".$row['price']."tg</div>
								</div>
								<p class='data'>27.08.17 </p><a href='page2.php?del=".$row['id']."'>DELETE</a>
							</div>
						</div>";
					}else{
						echo "<div class='card'>
							<img class='cardImg' src='".explode(",",$row['image'])[0]."'>
							<div class='discr'>
								<div class='linkCard' >
									<a class='into' href='page3.php?id=".$row['id']."'>".$row['title']."</a><br>
									<p class='coment'>".substr($row['des'],0)."<br>"."</p>
									<div class='prise'>".$row['price']."tg</div>
								</div>
								<p class='data'>27.08.17</p>
							</div>
						</div>";
					}
					
				}
			?>
		</div>
		<div id="numberPage">
			<div >
				<a href="">назад</a>
				<a href="">1</a>
				<a href="">вперед</a>
			</div>
			
		</div>
		<br>
		</div>
		<!--div id="bottomLink">
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