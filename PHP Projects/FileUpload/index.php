<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links/links.php'?>
    <!-- <?php include 'upload.php'?> -->
</head>
<style>
    
</style>
<body>
    <div class="container register">
        <?php   
            if($insert == true){
                ?>php
                <script>
                    alert("Success")
                </script>
                <?php
               echo "<p class='submitMsg'>Thanks for submitting the form.</p>";
            }
        ?>    
         <div class="row">
            <div class="col-md-3 register-left">
                <img src="" alt="">
                <h3>Welcome</h3>
                <p>Please fill all the details carefully.</p>
                <a href="display.php">Check Form</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                       aria-labelledby="home-tab">
                       <h3 class="register-heading">Apply for Web Developer Post</h3>

                       <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-l-6 col-md-6 col-12">
                                    <div class="form-group mb-3">
                                       
                                      <input type="text" class="form-control" name="username"
                                       placeholder="name" autocomplete="off" required>
                                     </div>
                                    <div class="form-group mb-3">
                                        
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" aria-describedby="emailHelp" required>
                                    
                                    </div>
                                    <div class="form-group mb-3">
                                        
                                        <input type="text" class="form-control" name="degree" placeholder="Enter Your  Qualification" aria-describedby="emailHelp" required>
                                    
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        
                                        <input type="text" class="form-control" name="language" placeholder="Your language"autocomplete="off" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        
                                        <input type="file" class="form-control" name="photo">
                                    </div>
                                    <div class="form-group mb-3">
                                        
                                        <input type="submit" name="submit" class="btn" class="form-control" value="Register">
                                    </div>
                                    
                                </div>      
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