<?php

include 'dbcon.php';
$insert = false;
if(isset($_POST['submit'])){
 $username = $_POST['username'];
 $email = $_POST['email'];
 $degree = $_POST['degree'];
 $language = $_POST['language'];
 $file = $_FILES['photo'];

// var_dump($file);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];


// echo $fileerror;

if($fileerror == 0){
  $destfile = 'upload/'.$filename;
  // echo $destfile;

  move_uploaded_file($filepath, $destfile);

  $insertquery = "insert into information(name,email,degree,language,pic)
  values('$username', '$email','$degree', '$language', '$destfile')";

  $query = mysqli_query($con, $insertquery);

  
  

  if($query){
     $insert = true;
      // echo "Data inserted successfully";
      // echo "<img src=".$destfile." height=200 width=300 />";
  }
  else{
      echo "Insert failed.";
  }
  
  header('location:index.php');
}
else{

  echo $fileerror;

}

}
?>