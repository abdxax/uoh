<?php
$db="uoh";
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass,$db);
$ch="SET CHARACTER SET utf8";
mysqli_query($conn,$ch);
if(!$conn){
	echo "Not connect ";
}