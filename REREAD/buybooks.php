
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books Available</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleL.css">
    <link rel="shortcut icon" href="./assets/img/logonew.png" type="image/x-icon">

    <style>
        .thead th{
            color: #07310a;
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
<div class="container mt-5">
        <h2>Available Books</h2>
        <table class="table table-striped ">
            <thead class="thead">
                <tr>
                    <th>TITLE</th>
                    <th>CATEGORIES</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>STANDARD</th>
                    <th>BUY BOOKS</th>

                </tr>
            </thead>
            <tbody>
<?php

$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);

$category = $_REQUEST['category'];
$standard = $_REQUEST['standard'];

$sql = '';
if($category!="" && $standard!=""){
    $sql = "select * from upl where categories='$category' and standard='$standard' ";
}else if($category !=""){
    $sql = "select * from upl where categories='$category'";
}else if($standard !=""){
    $sql = "select * from upl where standard='$standard'";
}else{
    $sql = "select * from upl";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['categories']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['standard']?></td>
        <td><a href='payment.php' class='btn btn-success btn-sm btn-light' styl>Buy Now</a></td>
        </tr>
<?php               
} 
}else {
    echo "<tr><td colspan='4' class='text-center'>No records found</td></tr>";
}
?>                        
       </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>