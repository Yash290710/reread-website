<?php
session_start();

?>
<?php

$mobile=$_SESSION['mobile'];
$email=$_SESSION['email'];
$city=$_SESSION['city'];
$password=$_SESSION['pass'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleL.css"> 
    <link rel="shortcut icon" href="logonew.png" type="image/x-icon">
    <style>
    .btn{
        align-items: center;
    }
    .submit{
        width: 115px;
        height: 43px;
        margin-bottom: 20px;
        padding: 2px;
        font-size: 17px;
        font-weight: 500;
        background: #07310a;
        color: #fff;
        border-radius: 5px;
    }
    .my-button {
        display: inline-block;
        padding: 10px 20px;
        background-color:#07310a;
        border: 0;
        border-color: #07310a;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }
    .my-button:hover {
        background: rgb(31, 86, 227);
        color: #fff;
    }
    </style>

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
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container box">
    <div class="form-header page-head-line"><strong>EDIT PROFILE</strong></div>
    <form  action="databaseconnection.php" method="POST">
            <div class="form-group">
                <label id="UP" for="username">Username</label><br>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo "$_SESSION[name]"?>">
            </div>
            <div class="form-group">
                <label id="UP" for="email">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo "$_SESSION[email]"?>">
            </div>
            <div class="form-group">
                <label id="UP" for="password">Password</label><br>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo "$_SESSION[pass]"?>">
            </div>
            <div class="form-group">
                <label id="UP" for="phone number">Mobile Number</label><br>
                <input type="tel" class="form-control"  name="mobile" value="<?php echo "$_SESSION[mobile]"?>">
            </div>
            <div class="form-group">
                <label id="UP" for="city">City</label><br>
                <input type="text" class="form-control" id="city" name="city" value="<?php echo "$_SESSION[city]"?>">
            </div><br><br>
            <div class="row">
                <div class="offset-sm-5 col-sm-2">
                    <button class="btn my-button submit" type="submit" >update</button>
                </div>
            </div>
        </form>
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
                    <p>Company Email id:reread@gmail.com<br>
                    Phone No.:7206087024</p>
                </div>
                <div class="col-md-4">
                    <img style=" padding-left: 243px; height: 145px; margin-top:9px; box-shadow: rgb(9, 17, 0);" src="./assets/img/logonew.png" alt="logo">
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
</body>
</html>