
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    
</head>

<body>
    <!-- <?php require  'dbcon.php'; ?> -->
    <?php include 'links/link.php'?>
    <?php
    
    if(isset($_POST['submit'])){ 
        $server = "localhost";
        $user = "root";
        $password="";
        $db = "register";

        $con = mysqli_connect($server, $user, $password, $db);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
      
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $cpass = password_hash($cpassword, PASSWORD_DEFAULT);
        // echo $pass;
        // echo "<br>";
        // echo $cpass;
        // echo "<br>";
        // echo($pass=$cpass);
        $emailquery = "select * from registration where email = '$email' ";

        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);
 
        if($emailcount>0){
            ?>
            <script>
                alert("Email already exists.")
            </script>
            <?php
            // echo "email already exists";
        }else{
            if($password === $cpassword){
               $insertquery = "insert into registration( Name, Email, Phone, Password, cpassword) 
               values('$name','$email','$phone','$pass','$cpass' )";
           
             $iquery = mysqli_query($con, $insertquery);
             if($con){
                ?>
                <script>
                    alert("You are registered successfully")
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Not successful")
                </script>
                <?php
            }
            }else{
                ?>
                <script>
                    alert("Confirm the password again, they are not matching.")
                </script>
                <?php
                // echo "Confirm the password again, they are not matching.";
            }
        }

    }
    ?>
    <div class="containerpx-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="mx-4">
                <div>
                    <div class="card2 card border-0 mx-4 px-4 py-5">
                        <h3 class="mb-1">Create your account</h3>
                        <p class="mb-4 text-sm">Already have an account? <a class="text-primary login" href="login.php">Log In</a></p>
                       
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="google"><span class="fa fa-google"></span><small class="pl-3 pr-1">Sign up
                                            with google</small></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="fb"><span class="fa fa-facebook"></span><small class="pl-3 pr-1">Sign up with
                                            facebook</small></p>
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="line"></div> <small class="text-muted or text-center">OR</small>
                                <div class="line"></div>
                            </div>
                           
                                <div class="row px-3 mt-3"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Full Name</h6>
                                    </label> <input type="text" name="name" required> </div>
                               
                            
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label> <input type="text" name="email" required> </div>
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Phone</h6>
                                </label> <input type="phone" name="phone" required> </div>
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" required> </div>
                            <div class="row px-3"> <label class="mb-0">
                                    <h6 class="mb-0 text-sm">Confirm Password</h6>
                                </label> <input type="password" name="cpassword" required> </div>
                            <div class="row mb-4">
                                <div class="col-md-5"> <button type="submit" name="submit" class="btn btn-blue text-center mb-1">Create Account</button>
                                </div>
                                <div class="col-md-7"> <small class="text-muted">By creating an account, you understand and
                                    agree to Mallo's <u>Terms of Service</u>, including the <u>User Agreement</u> and
                                    <u>Privacy Policy</u>.</small> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>