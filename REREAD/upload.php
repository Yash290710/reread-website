
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleL.css"> 
    <link rel="shortcut icon" href="logonew.png" type="image/x-icon">
    <style>
        body {
            background-color: #cdf2c2;
            font-family: 'Arial', sans-serif;
        }
        .container {
            /* margin-top: 50px;
            padding: 30px; */
            background: #09220111;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 30px;
            color: #042308;
        }
        .form-group label {
            font-weight: 300;
            color: #042308;
        }
        /* .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        } */
        .dropdown-input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid white;
            border-radius: 4px;
        }
        .custom-icon{
            font-size: 2rem;
        }
        
    </style>
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
                        <li><a href="edit.php"><i class="bi bi-person-circle custom-icon"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
     </div>
    <br>
<div class="container ">
    <h2 class="text-center page-head-line"><strong>Upload Your Book for Sale</strong></h2>
    <form action="uploadfiledb.php" method="POST">


        <div class="form-group ">
            <label for="bookTitle">Book Title</label>
            <input type="text" class="form-control" id="bookTitle" name="booktitle" required>
        </div>
        <div class="form-group">
            <label for="bookclass">STANDARD</label>
            
            <select name="standard" class="form-control">
                <option value="" disabled selected>Select a Standard</option>
                <option value="9">class-9</option>
                <option value="10">class-10</option>
                <option value="11">class-11</option>
                <option value="12">class-12</option>
            </select>
        </div>


        <div class="form-group">
            <label for="bookcategory">CATEGORIES</label>
            <input class="form-control"  list="categories" name="category" id="category" placeholder="Select a category" required>
        <datalist id="categories">
            <option value="MATHS">
            <option value="SCIENCE">
            <option value="SST">
            <option value="ENGLISH">
            <option value="NOVELS">
        </datalist>
        </div>
        
        <div class="form-group">
            <label for="bookDescription">Description</label>
            <textarea class="form-control" id="bookDescription" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="bookPrice">Price (₹)</label>
            <input type="text" class="form-control" id="bookPrice" name="price" required>
        </div>
        
        <div class="row">
            <div class="offset-sm-5 col-sm-2">
            <button type="submit" class="btn my-button">Upload Book</button>
            </div>
        </div>
        <br>
        </form>
        </div>
        <br>

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
