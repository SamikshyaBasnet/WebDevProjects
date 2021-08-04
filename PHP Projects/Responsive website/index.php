<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive website</title>
     <!-- Optional JavaScript; choose one of the two! -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&display=swap" rel="stylesheet">
 
</head>
<body>
    <?php include "menu.php"; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/losangeles.jpeg" height="300px" width="800px" alt="los angeles">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Los Angeles</h2>
                    <p>Fly high!</p>
                </div>
            </div>  
                
            <div class="carousel-item">
                <img class="d-block w-100" src="images/chicago.jpeg" height="300px" width="800px" alt="chicago">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Los Angeles</h2>
                    <p>Fly high!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/newyork.jpeg" height="300px" width="800px" alt="new york">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Los Angeles</h2>
                    <p>Fly high!</p>
                </div>
            </div>
        </div>    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/image1.jpg" class="img-fluid aboutimg" alt="california">
            
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>I am Basnet Technical</h2>
                    <p class="py-3">Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Ab assumenda et nostrum 
                        iusto deserunt suscipit sed. Tenetur ipsam r
                        ecusandae esse corporis sint consectetur 
                        dolor! Ullam consequuntur adipisci esse.
                    </p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5" id="services">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                   <div class="card">
                       <img src="images/card1.jpg" class="card-img-top" alt="..." height="290px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">See Example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>      
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                   <div class="card">
                       <img src="images/card2.jpg" class="card-img-top" alt="..." height="290px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">See Example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>      
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                   <div class="card">
                       <img src="images/card3.jpg" class="card-img-top" alt="..." height="290px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">See Example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>      
               </div>
            </div>
        </div>
    </section>    
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <img src="images/gallery.jpg" alt="" class="img-fluid pb-4">
                </div>
            </div>
        </div>    
    </section>    
    <section class="my-5" id="contact">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>    
        <div class="w-50 m-auto">
           <form action="userinfo.php" method="post">
                <div class="form-group">
                   <label>Username</label>
                   <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                   <label>Email Id</label>
                   <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                   <label>Mobile Number</label>
                   <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                   <label>Comment</label>
                   <textarea name="comment" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
           </form>
        </div>
    </section>  
    <footer>
        <p class="m-0 py-5 bg-dark text-white text-center">@basnettechnicalproduction</p>
    </footer>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>