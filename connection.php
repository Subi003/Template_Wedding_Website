<?php


$servername="localhost";
$username="root";
$password="";
$database="signup";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){

	echo("working");
}

else{

	echo("not working");
}

?>