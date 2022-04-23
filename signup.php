<?php
$servername ="localhost";
$username = "root";
$password = "password"
$conn = new mysqli('localhost','root','','Registration');
if ($conn>connection_error){
	die("Connection failed" .$conn->connection_error);
}
else{
	echo "Sign Up successful";
}
$sqli ="INSERT INTO registration(firstname,lastname,email,password) VALUES('John', 'Doe','lisa@gmail.com')";
if (mysql_query($conn,$sql)){
	echo "Account created";
}else{
	echo "Error" .&sql. <br> .mysql_error($conn);
}
mysqli_close($conn);

?>