<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");          //sends you back to the login page if you are not signed in//
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="homepage.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Flower Cart</title>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="homebar">
            <div class="logo">
                <img src="logo_white_large.png" width="125px">
            </div>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col2">
                <h1>We have the exact flowers <br> you are looking for!</h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                       <a href="" class="btn">Click here to explore</a>
            </div>
            <div class="col2">
                <img src="flowers/flower1.jpg">
            </div>
        </div>
    </div>
</div>

<!--------- featured flower-categories -------->

<div class="catgories">
    <div class="smallcontainer">
        <div class="row">
            <div class="col3">
                <img src="flowers/tulips.jpg">
            </div>
            <div class="col3">
                <img src="flowers/roses.jpg">
            </div>
            <div class="col3">
                <img src="flowers/daisies.jpg">
            </div>
        </div>
    </div>
</div>

<!--------- flower-products -------->

<div class="smallcontainer">
    <h2 class="title">Products</h2>
    <div class="row">
        <div class="col4">
            <img src="flowers/tulip1.jpg">
            <h4>pink tulips</h4>
            <p>£20.00</p>
        </div>
        <div class="col4">
        <img src="flowers/rose1.jpg">
            <h4>Red Roses</h4>
            <p>£50.00</p>
        </div>
        <div class="col4">
        <img src="flowers/daisies.jpg">
            <h4>daisies & cornflowers</h4>
            <p>£35.00</p>
        </div>
        <div class="col4">
        <img src="flowers/tulipsroses.jpg">
            <h4>pink tulips and red roses bouqet</h4>
            <p>£95.00</p>
        </div>
        <div class="col4">
        <img src="flowers/rose2.jpg">
            <h4>white rose bouqet</h4>
            <p>£60.00</p>
        </div>
        <div class="col4">
        <img src="flowers/tulip2.jpg">
            <h4>white bridal tulip bouqet</h4>
            <p>£125.00</p>
        </div>
        <div class="col4">
        <img src="flowers/rose3.jpg">
            <h4>purple rose bouqet</h4>
            <p>£175.00</p>
        </div>
        <div class="col4">
        <img src="flowers/tulip3.jpg">
            <h4>purple tulips</h4>
            <p>£45.00</p>
        </div>
    </div>
</div>

</body>
</html>