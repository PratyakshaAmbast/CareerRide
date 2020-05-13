<?php

session_start();
$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'signinform');

$username = $_POST['username'];
$password = $_POST['password'];
$emailid = $_POST['emailid'];

$q = " select * from signinform where name = '$username' && password = '$password' && emailid = '$emailid' ";



$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "ALREADY REGISTERED";
}else{
	$qy="insert into signinform(username,password,emailid) values ('$username','$password','$emailid')";
	mysqli_query($con,$qy);
}

?>