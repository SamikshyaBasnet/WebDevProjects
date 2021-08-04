<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "connection successful";
}
else{
    echo "connection unsuccessful";
}

mysqli_select_db($con, 'responsivewebdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($con, $query);
// echo "$query";

header('location:index.php');

?>