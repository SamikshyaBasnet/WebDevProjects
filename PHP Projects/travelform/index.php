<?php
//database connection
$insert = false;
if (isset($_POST['name'])) {
  //set connection variables
  $server = 'localhost';
  $username = "root";
  $password = '';
 //create a database connection
  $con =  mysqli_connect($server, $username, $password, 'trip');
    //$conn = new mysqli($server, $username, $password, 'trip');
  if(!$con) {
      die("connection to the database failed due to". mysqli_error());
  }
  // echo "Success connectiong to the db.";

  // if(isset($_POST['Submit']))
  // {
    //collect post variables
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone= $_POST['phone'];
  $other = $_POST['other'];

  $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
  VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
  // echo $sql;
 //execute the query
  if($con->query($sql) == true){
    //echo "Successfully inserted!";

    //flag for successful insertion
    $insert = true;
  } 
  else {
    echo "ERROR: $sql <br> $con->error";
    // $not_insert = true;
  }
 //close the database connection 
  $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to travel form.</title>
</head>

<body>
    <img src="sky.jpg" alt="shinee" class="bg" srcset="">
    <div class="container">
        <h1>Welcome to travel form. US TRIP FORM.</h1>
        <p>Enter your details and submit this form to confirm your participation.</p>
        <?php
        if ($insert==true) {
          echo "<p class='submitMsg'>Thanks for submitting the form. We are happy to see you joining for the US trip.</p>";
        
        }
       ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">
            <textarea name="other" id="other" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn" name="Submit">Submit</button>

        </form>

    </div>
</body>
<script src=" index.js"></script>

</html>