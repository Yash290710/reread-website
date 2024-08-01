<?php session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>RE READ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link href="assets/css/bootstrap.css" rel="stylesheet" />

<link href="assets/css/font-awesome.css" rel="stylesheet" />

<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="styleL.css"> 

<link rel="shortcut icon" href="./assets/img/logonew.png" type="image/x-icon">
  
</head>

<body style="background-color: #cdf2c2;">

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
                    <li><a href="logout.php">Log out</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-12 box">
        <h4 class="page-head-line">Login With <strong>ReRead Account :</strong></h4>
            <form action="check.php" method="$_POST">
                <label id="UP" style="float: inline-end;width:100%">Enter Username : </label>
                <input type="text" class="form-control" name="username" style="float:inline-end;" />
                <label id="UP" style="float:inline-end; width:100%">Enter Password : </label>
                <input type="password" class="form-control" name="password" />
                <br>
            <div class="row">
                <div class="col-6">
                    <input type="submit" value="Login" class="btn btn-primary btn-lg float-end submit"></div>
                <div class="col-6">
                    <a href="signup.html" class="my-button" style="font-size: 15px;">
                    <i class="fas fa-user-plus"></i> Register</a>
                </div>
            </div>
        </div>
        </form>
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


    <script src="assets/js/jquery-1.11.1.js"></script>

    <script src="assets/js/bootstrap.js"></script>

</body>

</html>