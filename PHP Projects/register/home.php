<?php
session_start();
if(!isset($_SESSION['Name'])){
    echo "You are logged out";

   header('location: login.php');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .btn {
        background: black;

        height: 30px;
        width: 100px;
        padding: 10px;
        margin-top: 30px;
        align-items: center;
        text-align: center;
        cursor: pointer;
        border-radius: 6px;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 24px;
        padding: 13px;
    }
</style>

<body>
    <?php
    echo "Hello!";
    echo "<br>";
    echo $_SESSION['Name']; ?>

    <div class="btn btn-primary logout-btn">
        <a href="logout.php">Logout</a>
    </div>

</body>

</html>