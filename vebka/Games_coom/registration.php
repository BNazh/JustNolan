<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="reg.js"></script>
</head>
<style type="text/css">
  body{
  margin: 0;
    }
header{
    font-family: Verdana,sans-serif;

  width: 100%;
}
.topHeader{
  display: flex;

  justify-content: center;
  align-items: center;
  background:#249a10;
  font-weight: normal;
  font-size: 30px; 
  height: 40px;
}
.leftMenu{
  height: 40px;

  padding-right:5%;
  padding-left:5%; 
  flex-grow: 8;
  display: flex;
  justify-content: flex-start;
  align-items: center;

  
}

.rightMenu{
  height: 40px;
  
  
  flex-grow: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  
}
.rightMenu input{
  height: 30px;
  margin-right: 3%;
  margin-bottom: 10px;
  
}

.top-link{
  font-size: 20px;
  font-weight: normal;
  width: 160px;
  color:white;
  height: 40px;
  text-decoration: none;
  text-align: center;
  padding-top:6px; 
}
.top-link:hover{
  background-color: rgba(204,204,204,0.5);
  
  color:rgba(255,255,255,1);  
}
.dropbtn {
    
    color: white;
    height: 40px;
    font-size: 20px;
    font-weight: normal;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
    font-size: 20px;
  width: 160px;
  color:white;
  font-weight: normal;
  height: 40px;
  text-decoration: none;
  text-align: center;
  padding-top:6px; 
}
.dropdown:hover{

  background-color: #f9f9f9;
  
  color:rgba(255,255,255,1);  
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown:hover a{

  font-size: 20px;
  color:black;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
  background:#249a10;
    
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
.cancelbtn,.signupbtn {float:left;width:50%}
.container {

    padding: 16px;
}
.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.8);
    padding-top: 12%;
    padding-right: 25%;
    padding-left:25%; 
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
    font-size: 18px;
}
.modal-content p{
  font-size: 15px;
}
.close {
    position: absolute;
    right: 26%;
    top: 120px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.inputs{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
    
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #249a10;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;

    margin-top:5%; 
    width: 200px;
}

input[type=submit]:hover {
    background-color: #249a20;

}
.imageX{
  cursor: pointer;
  position: absolute;
  width: 36px;
  height: 30px;
  top:15px;
  right: 5px;
  opacity: 0.3;
}
.imageX:hover{
  opacity: 0.8;
}
h6{
  margin-top:0px;
  display: inline-block;
  font-weight: normal;
  font-size:12px;
  color:white;
}
.checkbox{
  width: 30px;
  height: 30px;
}
.section-main{
  margin:3%;
    margin-left: 10%;
    margin-right: 10%;
    
    background: #2d2d2d;
    border-radius: 5px;

    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border:3px solid #2d2d2d;
}
.pass{
  display: flex;
  position: relative;
}
.main {
  
    padding: 5%;
    color:white;
    
    border:15px solid #2d2d2d;
    border-left-color: #249a10;
    border-right-color: #249a10;
    }

.col-25 {
    float: left;
    width: 40%;
    margin-top: 6px;
}

.col-75 {

    float: left;
    width: 60%;
    margin-top: 6px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}



.cont {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 14px;
    font-weight: normal;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.cont input {
    position: absolute;
    opacity: 0;
}
.checkmark {
    position: absolute;
    top: 15px;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: white;
}
.cont:hover input ~ .checkmark {
    background-color: #ccc;
}
.cont input:checked ~ .checkmark {
    background-color: #249a10;
}
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
.cont input:checked ~ .checkmark:after {
    display: block;
}
.cont .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

#klp1 img{width: 100%;height: 75%;}




footer{background-color: #F2F2F2;padding: 20px;}
.kl{
  margin-left: 16.5%;
  display: flex;
  flex-wrap: wrap;
}
hr{margin-left: 16.5%;
  margin-right: 12%;
}
.kl a{margin-right:7px;margin-left: 7px;
}
#xcv a{color:#378DD2;}
.foot {font-size: 11px;color:#888888;margin-bottom: 10px;}

#son{display: flex;align-items: center;}

.foot a{
  color:#555;
  text-decoration: none;



}
.foot li {
  padding: 5px;
  margin: 5px;
}
.foot a:hover{
  color:#555;
  text-decoration: underline;
}
.icons{
  text-align: center;
}
.fa {
  padding: 10px;
  font-size: 50px;
  width: 20px;
  height: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-skype {
  background: #00aff0;
  color: white;
}

.a-style{
    color: white;
    
}
.a-style:hover{
    color:#249a10;
    text-decoration: none;
}

</style>
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
                <div>
                    <input type="" name="" placeholder="Искать">
                </div>
                <a class="top-link" href="registration.php">Регистрация</a>
                
                <button class="top-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;padding-top:10px; ">Войти</button>

                    <div id="id01" class="modal">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                      <form class="modal-content">
                        <div class="container">
                          <label><b>Почта</b></label>
                          <input class="inputs" type="text" placeholder="Enter Email" name="email1" required>

                          <label><b>Пароль</b></label>
                          <div class="pass">
                            <input class="inputs" type="password" id="pass123" placeholder="Вводите Пароль" name="psw" required>
                            <img id="img3" class="imageX" style="top:9px; height: 26px;"
                            onclick ="showPassword3()" src="http://taganrog-gbsmp.ru/img/ice.png">
                          </div>    
                          <input class="inputs" style="width: 20px;height:20px;" " type="checkbox">Запомни меня
                          

                          <div class="clearfix">
                            <button  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Cancel</button>
                            <button  class="signupbtn" style="background-color: #4CAF50;">Sign Up</button>
                          </div>
                        </div>
                      </form>
                    </div>

            </div>
        </div>
    </header>

    <section class="section-main">
        <div class="main">
        <form  method="post">
            <div class="row">
                <div class="col-25">
                   <label for="fname">Логин</label>
                </div>
                <div class="col-75">
                   <input required class="inputs" type="text" id="fname" name="login" placeholder="Логин">
                </div>
            </div>
            <div class="row">
               <div class="col-25">
                  <label for="lname">Почта (email) </label>
                </div>
                <div class="col-75">
                   <input required class="inputs" type="text" id="lname" name="email" placeholder="Почта">
                </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Придумайте пароль для входа.Пароль должен иметь не менее 8 символов</label>
              </div>
              <div class="col-75">
                <div class="pass">
                    <input class="inputs" type="password" id="password" name="password" placeholder="Пароль" required>
                     
                    <img id="img1" class="imageX" onclick ="showPassword()" src="http://taganrog-gbsmp.ru/img/ice.png">
                    
                </div>
                
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Обе пароля долнжы совпадать</label>
              </div>
              <div class="col-75">
                <div class="pass">
                    <input required type="password" id="password2" name="confirm" placeholder="Повторите пароль">
                    <img id="img2" class="imageX" onclick ="showPassword2()" src="http://taganrog-gbsmp.ru/img/ice.png">
                    
                </div>
              </div>
            </div>
                          
           <div class="row">
                <div class="col-25">
                   
                </div>
                <div class="col-75">
                   <label class="cont">Создав учетную запись, вы соглашаетесь с нашими <a class="a-style"  href="">Условиями </a> и <a class="a-style" href =""> Конфиденциальностью </a>
                        <input id="check" name="check" type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            
            

            <div class="row">
              <input onclick="submitButton()" type="submit" value="Регистрация">
            </div>
          </form>

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
        
</body>
<script type="text/javascript">
    function submiButton(){
        var check = document.getElementById("check");
            
        if(!check.checked){
            alert ("Сперва согласитесь условиями пользовательских правилами");
        }
    }
</script>

<?php 

$con = mysqli_connect("localhost","root","","games");
    
    
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['email'])){
  $email = $_POST['email'];

}
if(isset($_POST['login'])){
$uname = $_POST['login'];

}
if(isset($_POST['password'])){
$psw = $_POST['password'];
$result = $con->query("SELECT login  FROM game_table WHERE login = '$uname'"); 
$row_count = $result->num_rows; 
if($row_count >= 1) { 
    echo "<script>alert('Ваш придуманный логин существует');</script>";
} 
else {

    $sql1="INSERT INTO `game_table`( `login`, `email`, `password`) VALUES ('$uname','$email','$psw')";
    $con->query($sql1); 
    echo "<script>alert('Регистрация успешно заверщено');</script>";
    echo "<script>document.location.replace('mainPage.php');</script>";

}
}


mysqli_close($con);
    

 ?>





</html>