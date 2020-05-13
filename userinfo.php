<?php

$con = mysqli_connect('localhost','root','');

if($con){
	echo "Connection Established";
}
else {
	echo "Connection Unsuccessful";
}


mysqli_select_db($con, 'youtubeuserinfo');

$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "insert into userinfo (uname, email, phone, comment)
values ('$uname','$email','$phone','$comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>
