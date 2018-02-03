<?php 
	$con = mysqli_connect("localhost","root","","games");
	
	
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$email = $_POST['email'];
$uname = $_POST['login'];
$psw = $_POST['password'];


$result = $con->query("SELECT login  FROM game_table WHERE login = '$uname'"); 
$row_count = $result->num_rows; 
if($row_count == 1) { 
    exit();
} 
else {

    $sql1="INSERT INTO `game_table`( `login`, `email`, `password`) VALUES ('$uname','$email','$psw')";
    $con->query($sql1); 
    exit()
}
mysqli_close($con);


 ?>



