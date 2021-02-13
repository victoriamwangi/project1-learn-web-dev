<!DOCTYPE html>
<html lang="en">
<?php include "db_connection.php"; ?>
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
    
    <!--slide show container-->
    <div id="myCarousel" class="carousel slide z-depth-1-half" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel_inner">
        <div class="item active">
        <img src="images/slide1.jpg" alt="Prayer" class="d-block w-100">
        </div>
        <div class="item">
        <img src="images/slide2.jpg" alt="Believe" class="d-block w-100">
        </div>
        <div class="item">
        <img src="images/slide3.jpg" alt="Praise" class="d-block w-100">
        </div>
    </div>
    <a class="right carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- <div class="slideshow-container">
        <div class ="mySlides fade">
            <div class="numbertext">1/3</div>
            <img src="images/slide1.jpg" style="width:100% ;height: auto;">
            <div class="text">IMAGINE</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2/3</div>
            <img src="images/slide2.jpg" style="width:100% ;height: auto;">
            <div class="text">THINK</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3/3</div>
            <img src="images/slide3.jpg" style="width:100% ;height: auto;">
            <div class="text">CREATE</div>
        </div>
    
       next and previous button
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>-->
    <!-- <br> -->/
    <!-- the dots/circl=e -->
    <!--<div style="text-align:center">
        <span class="dot" onclick="currentSlides(1)"></span>
        <span class="dot" onclick="currentSlides(2)"></span>
        <span class="dot" onclick="currentSlides(3)"></span>
    </div> -->
    <!--<div class="container fluid">
        <div class=""
    </div>-->\
    <!--STORY-->
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="p-2 bd-highlight" id="flex">
                <p>llentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper </p>
            </div>
            <div class="p-2 bd-highlight" id="flex">
                <img src="images/story.jpg">
            
            </div>
        </div>
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
                <div class="card" style="width:350px; height: 550px;">
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
                <form action="login.php" method="post" id="form_id" class="form_class">
                    <div class="form-group">
                        <label for="userEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="userPassword" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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