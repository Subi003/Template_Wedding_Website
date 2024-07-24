<?php 


         include("connection.php"); 
	    $uname=$_GET['uname'];
		$uemail=$_GET['uemail'];
		$pass=$_GET['pass'];
		$upass=$_GET['upass'];
		echo $uname;
		$query="INSERT INTO four(username, email, password, conform_password) VALUES ('$uname','$uemail','$pass','$upass')";

		$data= mysqli_query($conn, $query);
 ?>