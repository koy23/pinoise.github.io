<?php
$name = $_POST['name'];
$nick = $_POST['nick'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

$conn = mysqli_connect("localhost","root","","dbchat");

$query = "SELECT Nickname FROM tbluser WHERE NickName='".$nick."'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>=1){
	echo "<script type='text/javascript'>alert('Username Already Used, Please try different username!');</script>";
	echo "<script type='text/javascript'>window.location='index.php#register';</script>";
}else{
	if($name == "" or $nick == "" or $pass == "" or $pass2 == ""){
		echo "<script type='text/javascript'>alert('Please Dont Leave Empty Details!');</script>";
		echo "<script type='text/javascript'>window.location='index.php#register';</script>";
	}else{
		if($pass == $pass2){
			$server = "localhost";
			$u = "root";
			$p = "";
			$dbname = "dbchat";		

			$conn = mysqli_connect($server,$u,$p,$dbname);

			$query = "INSERT INTO  `dbchat`.`tbluser` (`recID` ,`Name` ,`NickName` ,`Password` ,`DateRegistered`)
			VALUES (NULL ,  '".$name."',  '".$nick."',  '".$pass."',  '".date("d/m/Y")."')";
			if(mysqli_query($conn,$query)){
					echo "<script type='text/javascript'>alert('Registered Successfully!');</script>";
					echo "<script type='text/javascript'>window.location='index.php#register';</script>";
				}else{
					echo "<script type='text/javascript'>alert('Registration Failed!');</script>";
					echo "<script type='text/javascript'>window.location='index.php#register';</script>";
				}
		}else{
			echo "<script type='text/javascript'>alert('Password Doesnt Matched!');</script>";
			echo "<script type='text/javascript'>window.location='index.php#register';</script>";
		}
	}
}
?>