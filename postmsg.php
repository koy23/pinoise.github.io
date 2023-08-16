<?php
session_start();
$user = $_SESSION['username'];

$x = getDate();
$date = $x['mon'] . "/" . $x['mday'] . "/" . $x['year'] ." - ". ($x['hours']-5) .":". $x['minutes'];

$datepost = $date;

$msg = $_POST['msg'];

$conn = mysqli_connect("localhost","root","","dbchat");

$q = "INSERT INTO  `dbchat`.`tblmessage` (`recID` ,`PostBy` ,`PostDate` ,`Posts`)
VALUES (NULL ,  '".$user."',  '".$datepost."',  '".$msg."')";

if(mysqli_query($conn,$q)){

header("location:dashboard.php");

}
else{
	echo "Error";
}

?>