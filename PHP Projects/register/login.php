<?php
session_start();
?>
<!DOCTYPE html>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title> 
  
    <?php include 'links/link.php' ?>
    
</head>
<body>

<?php

// include 'dbcon.php';
include 'dbcon.php';
if(isset($_POST['submit'])){
    $server = "localhost";
    $user = "root";
    $password="";
    $db = "register";

    $con = mysqli_connect($server, $user, $password, $db);
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $email_search = "select * from registration where email='$email'";
    $query = mysqli_query($con, $email_search);
    
    $email_count = mysqli_num_rows($query);

    if($email_count){
       
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['Password'];

        $_SESSION['Name'] = $email_pass['Name'];
        $password_decode = password_verify($password, $db_pass);

        if($password_decode){
            echo "Login successful";
            ?>

            <script>
                location.replace("home.php")
            </script>
            <?php
           
        }
        else{
            echo "Incorrect password";
        }

    }else{
        echo "Invalid email";
    }
}
?>
<div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="mt-5 card card0 border-0">
            <div class="mx-4 my-4">
                <div>
                    <div class="container card2 card border-0 mx-4 px-4 py-5">
                        <h3 class="mb-1">Login to your Account</h3>
                        <p class="mb-4 text-sm">Get started with your free account</p>

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="google"><span class="fa fa-google"></span><small class="pl-3 pr-1">Login with
                                    google</small></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="fb"><span class="fa fa-facebook"></span><small class="pl-3 pr-1">Login with
                                    facebook</small></p>
                                </div>
                               
                                <!-- <div class="col-sm-6">
                                    <p class="fb"><span class="fa fa-facebook"></span><small class="pl-3 pr-1">Login with
                                            facebook</small></p>
                                </div> -->
                            </div>
                            <div class="row px-3">
                                <div class="line"></div> <small class="text-muted or text-center">OR</small>
                                <div class="line"></div>
                            </div>
                           
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label> <input type="text" name="email" required> 
                            </div>
                            
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" required> 
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- <p class="google"><span class="fa fa-google"></span><small class="pl-3 pr-1">Login with
                                    google</small></p> -->
                                    <button type="submit" name="submit" class="btn btn-blue text-center mb-1">Login</button>
                                </div>
                                <div class="col-sm-6">
                                <p class="mt-2 col-sm-6 text-sm text-center">Not registered yet? <a class="text-primary text-sm signup" href="register.php">Sign Up</a></p>

                                </div>
                              



                        </form>

                    </div>

                </div>            

            </div>

        </div>

    </div>
</body>
</html>