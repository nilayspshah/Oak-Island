<?php
session_start();
include('connection.php');
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$username=$_POST['userName'];
$password=$_POST['password'];
$email=$_POST['email']
mysql_query("INSERT INTO member(fname, lname, username, password, email)VALUES('$fname', '$lname', '$username', '$password' , '$email')");
header("location: home.html");
mysql_close($con);
?>