<!DOCTYPE html>
<html lang="en">
<?php include "login_post.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>victoria</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
</head>
<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Work cases</a>
                </li>

            </ul>
        </div>
    </nav>
    <!--CAROUSEL-->
    <div id="myCarousel" class="carousel slide" date_interval="1000" data-ride="carousel">
    <!--carousel indicators-->
         <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active">
            </li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel"data-slide-to="2"></li>
         </ol>
    <!--wrapper for carousel items-->
         <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide1.jpg" alt="first slide" >
                <div class="carousel-caption d-none d-md-block">
                <h5>prayer</h5></div>
            </div>
            <div class="carousel-item">
                <img src="images/slide2.jpg" alt="first slide">
                <div class="carousel-caption d-none d-md-block">
                <h5>prayer</h5></div>
            </div>
            <div class="carousel-item">
                <img src="images/slide3.jpg" alt="first slide">
                <div class="carousel-caption d-none d-md-block">
                <h5>prayer</h5> </div>
            </div>
          </div>
        <!--carousel controls-->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slde="next">
    <span class="carousel-control-next-icon"></span>
    </a>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class="card" style="width:350px; height:550px;">
                    <img class="card-img-top" src="images/icon.jpg">
                    <div class="card-body">
                        <h4 class="card-title">web development</h4>
                        <p class="card-text">gsdygfhajsdhgddfiaGDHNGFKAruflweidhx.sndQIOEU</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class="card" style="width:350px; height: 550px;">
                    <img class="card-img-top"src="images/icon.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Digital solutions</h4>
                        <p class="card-text">fhduifvncbzvkfghlasdfhgvdvnnsfjhgaslfbnvblsfjhzfk</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>       
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class="card" style="width:350px; height: 400px;">
                    <img  class="card-img-top" src="images/pray.jpg">
                    <div class="card-body">
                        <h4 class="card-title">graphics design</h4>
                        <p class="card-text">ufhvjdvzhfvuzhjcvhfjhgsdfighs;fhjvmcvbnxkfztfyghbk;hhkh</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                    <div class="card" style="width:350px; height: 550px;">
                        <img class="card-img-top"src="images/icon.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Digital solutions</h4>
                            <p class="card-text">fhduifvncbzvkfghlasdfhgvdvnnsfjhgaslfbnvblsfjhzfk</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>       
                </div>
            </div>
        </div>   
        

    <!--FOOTER-->
   
    <div class="footer">
        <div class="d-flex justify-content-between">
            <div class="p-2 bd-highlight" id="flex">
                <form action="register.php" method="post" id="form_id" class="form_class">
                    <div class="form-group">
                        <label for="userEmail">Email Address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="password" name="password_1">
                        </div>
                        <div class="form-group">
  	                        <label for="pwd">Confirm password</label>
  	                        <input type="password" class="form-control" id="password" name="password_2">
                      	</div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <p>
                    Already have an account?
                    <br>
                    <a href="login.php">Sign In</a>
                    </p>
                </form>  
            </div>
            <div class="p-2 bd-highlight" id="flex">
                <h7>FOLLOW US ON:</h7>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
                <ul>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="p-2 bd-highlight" id="flex">
                <UL>
                    <li ><a href="#" class="flinks">HOME</a color></li>
                </UL>
                <UL>
                    <li><a href="#" class="flinks">ABOUT</a></li>
                </UL>
                <UL>
                    <li><a href="#" class="flinks">CONTACT</a></li>
                </UL>

            </div>

        </div>
    </div>
    <script src="js/fontojs/all.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>