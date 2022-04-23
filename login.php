<?php
session_start();
$con = mysql_connect('localhost','root',' ','Registration');
mysql_select_db($con,login);
$name = $_POST['email'];
$pass = $_POST['password'];
$s="select from signup where name = '$email'&& password = '$pass;";
result = mysql_query(&con,&s);
$num=mysqli_num_rows($result);
if($num == 1)
{
	header('location:userprofile.php');
}else{
	header('location:login.php')
}
?>