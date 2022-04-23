<?php
session_start();
$con = mysql_connect('localhost','root',' ');
mysql_select_db($con,'Registration');
$sql = "UPDATE registration SET firstname = 'John',lastname ='Doe',email = 'lisa@mail.com', password = '';
if (mysql_query($conn,$sql)){

	echo "Update of record successful";
	}
	else{
		echo "Error updating record" .mysqli_error($conn);

	}
$sql = "DELETE FROM registration SET (firstname = 'John',lastname ='Doe',email = 'lisa@mail.com', password = '');
if (mysql_query($conn,$sql)){

	echo "Record deleted";
	}
	else{
		echo "Error deleting record" .mysqli_error($conn);

	}
	mysql_close(&conn);
?>
