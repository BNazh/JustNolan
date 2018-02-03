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
					
					
			</div>
		</div>
	</header>

<form method="post">
	<input id="hid" type="text" name="login" value="">
	<input type="submit"  name="">
</form>	
	<main style="margin:5%;margin-left:15%;margin-right:15%;display: flex;justify-content: flex-start;flex-wrap: wrap;">
<?php
	$conn = mysqli_connect("localhost", "root", "", "games");

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$bool=true;
	$sql = "SELECT id, login , email , password FROM game_table";
	if(isset($_POST['login'])){
		$v=$_POST['login'];
		$sql = "SELECT id, login , email , password FROM game_table WHERE login='$v'";
	}

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
	    	$xc=$row["login"];
	        echo 	"<div style='border:3px solid green;width:300px;margin:5px;height:200px;position:relative;'>";
	        echo	"<div>".$xc."</div>";

	        echo	"<a href='adminPage.php?hidden=".$row['id']."' style='cursor:pointer;position:absolute;color:red;top:5px;right:5px;'>X</a>";
	        echo	"<div style='color:blue;top:80px'>Password: ".$row['password']."</div>";
			echo	"<div style='color:blue;top:100px'>Email:" .$row['email'] ."</div>";
			echo 	"</div>";	

	        
	    }
	} else {
	    echo "<script>document.location.replace('adminPage.php');</script>";
	}

	mysqli_close($conn);


?>

</main>
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

		<script type="text/javascript">
			
			function deleteTable(x){
				document.getElementById("hid").value=x;

			}


		</script>
		
		



<?php
		if(isset($_GET['hidden'])){
				$z=$_GET['hidden'];
			$con = mysqli_connect("localhost", "root", "", "games");
			if ($con->connect_error) {
			    die("Connection failed: " . $con->connect_error);
			} 

			$sql = "DELETE FROM game_table WHERE id='$z'";

			if ($con->query($sql) === TRUE) {
				echo "Record deleted successfully";
				echo "<script>document.location.replace('adminPage.php');</script>";
			} else {
				echo "Error deleting record: " . $con->error;
			}
			
			$con->close();

		
	}

?>	