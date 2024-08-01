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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleL.css"> 
    <link rel="shortcut icon" href="./assets/img/logonew.png" type="image/x-icon">
    <style>
        body {
            background-color:#cdf2c2;
        }
        .hero {
           padding-top: 5%;
            background-color:#055720;
            height: 300px;
            color: white;
            display: block;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .option-box {
            
            border: 2px solid #c8b21f;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.2s;
            text-align: center;
            background-color:#c8b21f;
        }
        .option-box:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 123, 255, 0.2);
            background-color: #60ae27;
            font-weight: bolder;
            
        }
        .custom-icon{
            font-size: 2rem;
        }
        .imglo{
            padding-left: 260px;
           
        }
    </style>
</head>
<body>

<div id="header">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="logo"><img src="./assets/img/logonew.png" width="60" height="55" alt="Icon">  ReRead</h1>
                </div>
                <div class="col-md-8">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="./aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="logout.php">Log out</a></li>
                        <li><a href="edit.php"><i class="bi bi-person-circle custom-icon"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
    <h1>Welcome to the RE READ Account <br><?php echo"$_SESSION[name]"?>  !!!</h1><br>
    <p style="font-size: 20px;">Your one-stop solution for buying and selling books!</p>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <div class="option-box ">
                <h3>Buy Books</h3>
                <p>Discover a wide range of books from various genres.</p>
                <a href="browse.php" class="btn btn-primary">Browse Now</a>
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <div class="option-box ">
                <h3>Sell Books</h3>
                <p>Share your favorite books and earn some cash!</p>
                <a href="upload.php" class="btn btn-primary">Start Selling</a>
            </div>
        </div>
    </div>
</div>
<br><br>

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
<div class="footer">
    <div class="side-bar">
        <div class="container-fliud">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <h4 class="section-foot">About Us</h4>
                    <p>We are  a startup company with an aim of spreading education and recycling up old books to reduce pollution and deforestation.</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h4 class="section-foot">Contact Us</h4>
                    <p>Company Email id:bfiabdkcuabf@gmail.com<br>
                    Phone No.:7206087024</p>
                </div>
                <div class="col-md-4 imglo">
                    <img style="height: 155px; box-shadow: rgb(9, 17, 0);" src="./assets/img/logonew.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>