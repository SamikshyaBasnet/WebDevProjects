<?php include 'logic.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Corona App</title>
    <?php include 'links/link.php'?>
    
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
    <div class="container-fluid">
       <a class="navbar-brand ps-5" href="#">Covid 19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                <i class="fas fa-bars" style="color:#fff; font-size:30px;"></i>

                </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-5 text-capitalize">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#aboutid">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#symptomsid">symptoms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#preventionid">Prevention</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contactid">Contact</a>
            </li>
        
        </ul>
        
        </div>
  </div>
</nav>

<div class="main_header">
   <div class="row w-100 h-100">
       <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-50 h-60 d-flex justify-content-center align-items-center">
                <img src="images/together.png" class="together" alt="" width="500" height="400">
            </div>
       </div>
       <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against <br>Cor<span class="corona_rot">
                  
                <img src="images/corona.png" width="120px" height="70px" alt="">    
                </span>na Virus</h1>
            </div>
        </div>
   </div>
</div>

<!-- corona latest update -->

<section class="corona_update">
    <div class="mb-3">
       <h3 class="text-uppercase text-center">covid-19 update</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" 
         id="tbval">
        
            <tr>
                <th scope="col">Country</th>
                <th scope="col">TotalConfirmed</th>
                <th scope="col">TotalRecovered</th>
                <th scope="col">TotalDeaths</th>
                <th scope="col">NewConfirmed</th>
                <th scope="col">NewRecovered</th>
                <th>New Deaths</th>
            </tr>
                           
           
        </table>
    </div>

</section>

<!-- about section -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>

    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ms-5">
            <img src="images/aboutcorona.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19(Corona Virus)</h2>
            <p>Corona is a luminous envelope of plasma that surrounds the Sun and other celestial bodies. It is extended to millions of kilometres into space and is commonly seen during a total solar eclipse. The intense temperature of the Sun's corona is due to the presence of highly ionized ions which give it a spectral feature.</p>
            <p>The corona of the Sun is much hotter than its visible surface. The 
                corona is not evenly distributed across the surface of the Sun and
                 is concentrated more along the equatorial lines. The matter 
                 in the external part of the atmosphere of the Sun is composed 
                 of plasma which has very low density.
        </div>
    </div>
</div>
  
<!-- corona symptoms -->
<div class="container-fluid pt-5 pb-5" id="symptomsid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>COVID-19 Symptoms</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/cough.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Cough</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/runny.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Runny Nose</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/cold.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Cold</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/fever.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Fever</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/tired.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Tired</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/breath.png" class="img-fluid" width="120" height="120" alt="">
                    <figcaption>Breathing Difficulty</figcaption>
                </figure>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid sub_section pt-5 pb-5" id="preventionid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>6 Steps Prevention Against CoronaVirus</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/washhand.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds with soap and water 
                            or alcohol based hand-rub.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/mask.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or flexed elbow 
                            when you cough or sneeze.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/distance.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/stayhome.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay home and self isolate from others in the household 
                            if you feel unwell.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/tv.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news and follow the recommended 
                            precautions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-4 col-md-4 col-12">
                        <figure class="text-center">
                           <img src="images/medical.png" class="img-fluid" width="120" height="120" alt="">
                           
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <p>If you have and symptoms of corona virus, seek the medical care 
                            early.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact us asap -->

<div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Contact Us ASAP</h1>

    </div>
    <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username"
                        placeholder="name" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email" aria-describedby="emailHelp" required>
                      
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Mobile</label>
                        <input type="number" class="form-control" name="phone" placeholder="Your Number"autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Select Symptoms</label>
                        <br>
                        <div class="inline">
                        <div class="form-check custom-control-inline">
                            <input name="coronasym[]" class="form-check-input" type="checkbox" value="cold" id="flexCheckDefault">
                            <label class="form-check-label" value="cold" for="flexCheckDefault">
                                Cold
                            </label>
                        </div>
                        <div class="form-check custom-control-inline">
                            <input name="coronasym[]" class="form-check-input" type="checkbox" value="fever" id="flexCheckDefault">
                            <label class="form-check-label" value="fever" for="flexCheckDefault">
                                Fever
                            </label>
                        </div>
                        <div class="form-check custom-control-inline">
                            <input name="coronasym[]" class="form-check-input" type="checkbox" value="Breathingdicfficulty" id="flexCheckDefault">
                            <label class="form-check-label" value="BreathingProblem" for="flexCheckDefault">
                                Difficaulty in Breathing
                            </label>
                        </div>
                        <div class="form-check custom-control-inline">
                            <input name="coronasym[]" class="form-check-input" type="checkbox" value="tiredness" id="flexCheckDefault">
                            <label class="form-check-label" value="tiredness" for="flexCheckDefault">
                                Tiredness
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Your Problem</label>
                        <br>
                        <textarea rows="5" name="message" class="form-control"></textarea>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
             </div>
         </div>
    </div>
</div>  

<!-- top cursor -->

<div class="container scrolltop float-right ps-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>

<!-- footer -->
<footer class="mt-5 mb-0">
    <div class="footer_style text-white text-center container-fluid">
       <p>copyright by Samikshya Basnet</p>
    </div>
</footer>
</body>

<script type="text/javascript">


window.onscroll = function (){
    scrollfunction();
}

function scrollfunction(){
    const scrollbtn = document.getElementById("mybtn");
    if(document.body.scrollTop>100 || document.documentElement.scrollTop > 100){
        scrollbtn.style.display="block";
    }
    else{
        scrollbtn.style.display="none";

    }
}

function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function fetch(){
    $.get("https://api.covid19api.com/summary",
     function(data){
        //console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');
        var len = data['Countries'].length;
        console.log(len);
        var i=1;
        for (i; i < len; i++){
            console.log(i);
            var x = tbval.insertRow();

            x.insertCell(0);

            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.background = "#7a4a91";
            tbval.rows[i].cells[0].style.color = "#fff";

            x.insertCell(1);

            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[1].style.background = "##4bb748 ";


            x.insertCell(2);

            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[2].style.background = "##4bb748 ";
 

              
            x.insertCell(3);

            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[3].style.background = "##4bb748 ";
             
            
            x.insertCell(4);

            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tbval.rows[i].cells[4].style.background = "##4bb748 ";
 

            x.insertCell(5);

            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[5].style.background = "##4bb748 ";

            x.insertCell(6);

           tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
           tbval.rows[i].cells[6].style.background = "##4bb748 ";

           
        }
     }
    
    )
}

//jquery









</script>
</html>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
    
   $username = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $symptoms = $_POST['coronasym'];
   $message = $_POST['message'];


   $check = "";
 foreach ($symptoms as $check1) {
       $check.= $check1.",";
   }

   $insertquery = "insert into coronacase(username,email,mobile,symptoms,message) 
   values('$username', '$email', '$phone', '$check', '$message' )";
    

   $query = mysqli_query($con, $insertquery);

}

?>