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