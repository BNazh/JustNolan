<?php
if(isset($_GET['delete'])){
	unset($_COOKIE['user']);
	setcookie("user", "", time() - 3600);
}
$avto = false;
if(isset($_COOKIE['user'])){
	$avto = true;
}
$name = "";
if(isset($_COOKIE['user'])){
	$name = json_decode($_COOKIE["user"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="page4.css">
	<meta charset="utf-8">
	<script src="page4.js" defer></script>
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
			<a href="">Объявления</a>>Подать объявление в Алматы
			<br><br>
		</div>
		<div>
		<form action="page4.php" method="post">
			
			<?php
			if(isset($_COOKIE['user'])){
				//$name = json_decode($_COOKIE["user"])[0];

			?>
			<table>
				<tr><td class="adderPar">Email</td><td ><input class="adderInput" type="text" name=""></td></tr>
				<tr><td class="adderPar">Регион</td><td >
				<select class="adderInput">
				<option>Выберите регион</option>
				<option>Акмолинская область</option>
				<option>Алматинская область</option>
				<option>Атырауская область</option>
				<option>Жамбылская обдасть</option>
				<option>Карагандинская область</option>
			</select></td></tr>
				<tr><td class='adderPar'>Город</td><td>
					<select class="adderInput">
				<option>Астана</option>
				<option>Алматы</option>
				<option>Тараз</option>
				<option>Актау</option>
				<option>Семей</option>
				<option>Орал</option>
			</select>
				</td></tr>
				<tr><td class="adderPar">Категория</td><td>
					<select id="inputCategory" class="adderInput">
				<option>Автомобили и мотоциклы</option>
				<option>Недвижимость</option>
				<option>Работа</option>
				<option>Услуги</option>
				<option>Мода, личные вещи</option>
				<option>Для детей</option>
				<option>Для дома и дачи</option>
				<option>Электронная техника</option>
				<option>Мобильные устройства</option>
				<option>Животные и Растения</option>
				<option>Хобби и отдых</option>
			</select>
				</td></tr>
			
			<tr><td  class="adderPar">Title</td><td><input class="adderInput" type="text" name="title"></td></tr>
			<tr><td  class="adderPar">Description</td><td><textarea class="adderInput" name="des"></textarea></td></tr>
			<tr><td  class="adderPar">Price</td><td><input class="adderInput" " type="number" name="price"></td></tr>
			<tr><td  class="adderPar">Image</td><td><input  type="file" name="image[]" multiple="multiple"></td></tr>
			<tr><td  class="adderPar"></td><td><input type="submit" value="ADD" ></td></tr>
			</table>
			<?php
			}else{
				echo "You should registreit";
			}

			?>
			</form>
			<?php 
				$con=mysql_connect("localhost","root","") or die("no connection");
				mysql_select_db("project");
				if(isset($_POST['title'])){
					if(mysql_query("INSERT INTO `pro`(`id`,`user_id`,`title`, `price`, `image`, `des`) VALUES (null,".$name.",'".$_POST['title']."',".$_POST['price'].",'".$_POST['image']."','".$_POST['des']."')")){
						echo "okk";

						}else{echo "noooo";}
					 
					}
					mysql_close($con);
			?>
		</div>
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

