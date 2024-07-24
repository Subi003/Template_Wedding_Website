<!DOCTYPE html>
<html>
<head>
	<title>Displaying data</title>
</head>
<body>

	<table border="1px" bgcolor="silver">
		
		<tr>
			<th style="font-size: 25px;">username</th>
			<th style="font-size: 25px;">email</th>
			<th style="font-size: 25px;">Password</th>
			<th style="font-size: 25px;">conform_password</th>
			
			
			

<?php

 include("connection.php"); 
 

 $query="SELECT * FROM  four ";
 $data=mysqli_query ($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0){
	while($result= mysqli_fetch_assoc($data)){
	
	echo "
<tr>

	<td>$result[username]<br></td>

	<td>$result[email]<br></td>
	<td>$result[password]<br></td>
	<td>$result[conform_password]<br></td>
	
	

	</tr>
	";

		
	}
}
?>


	</table>

</body>
</html>