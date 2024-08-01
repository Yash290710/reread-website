<?php
session_start();
$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RE READ</title>
    <link rel="stylesheet" href="./styleL.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./assets/img/logonew.png" type="image/x-icon">
   
</head>
<body>
<div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="logo"><img src="./assets/img/logonew.png" width="60" height="55" alt="Icon">  ReRead</h1>
                </div>
                <div class="col-md-8">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
     <div id="banner" class="py-5.mt-5">
        <div class="container" >
            <div class="row ">
                <div class="col-lg-6" >
                    <div class="banner-title">
                        <h1 class="title">Read.Relove.Recycle:</h1>
                        <p class="lead">where every book has a second chance </p>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Services Provided</h2>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <i class="bi bi-cart4"></i>
                    <h3>Buying & Selling Books</h3>
                    <p>Buy and resell all kind of books at a reasonable prices</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <i class="bi bi-images"></i>
                    <h3>Image Review</h3>
                    <p>Can take a look at the book condition before buying it</p>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="service-box">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h3>Geographical Location</h3>
                    <p>Option to buy books near their geographical location</p>
                </div>
            </div>
        </div>
     </div>




     <div id="testimonials" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head text-white">Testimonials</h2>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <img src="https://tse4.explicit.bing.net/th?id=OIP.8eJntLWDe_ZROFKU1lXcoQAAAA&pid=Api&P=0&h=180"  height="100vh" width="110vw" alt="XYZ">
                        </div>
                        <div class="col-lg-9 col-md-8 ">
                            <div class="author">XYZ</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem fugit distinctio ut maxime hic optio perferendis quisquam repellendus corporis quis dolore voluptatum, illo sapiente nisi nam. Accusamus deleniti ut laborum, incidunt magni corporis amet. Harum fugit assumenda labore, architecto, a minus maxime possimus aliquam aspernatur eius vel repudiandae quaerat numquam?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <img src="https://tse4.explicit.bing.net/th?id=OIP.8eJntLWDe_ZROFKU1lXcoQAAAA&pid=Api&P=0&h=180" height="100vh" width="110vw" alt="PQR">
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="author">PQR</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia maiores rerum cupiditate in numquam dolore et quae nemo? Voluptates, nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>


     <div class="footer">
    <div class="side-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <h4 class="section-foot">About Us</h4>
                    <p>We are  a startup company with an aim of spreading education and recycling up old books to reduce pollution and deforestation.</p>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h4 class="section-foot">Contact Us</h4>
                    <p>Company Email id:bfiabdkcuabf@gmail.com<br>
                    Phone No.:7206087024</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">copyright@2024 ReRead</div>
            <div class="col-md-6">
                <ul id="social-icons" class="float-md-end">
                    <li><a href="" class="bi bi-facebook"></a></li>
                    <li><a href="" class="bi bi-twitter-x"></a></li>
                    <li><a href="" class="bi bi-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
