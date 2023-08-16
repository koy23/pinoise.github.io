<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost","root","","dbchat");

$query = "SELECT Nickname,Password FROM tbluser WHERE NickName='".$user."' AND password='".$pass."'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
	$_SESSION['username'] = $user;
	echo "<script>window.location.assign('dashboard.php');</script>";
}else{
	echo "<script type='text/javascript'>alert('Login Failed!');</script>";
		echo "<script type='text/javascript'>window.location='index.php';</script>";
}

?>