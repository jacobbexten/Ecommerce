﻿<?php
    include "products.php";
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    }

    if(empty($_SESSION['cart'])) {
        $_SESSION['cart']=array();
    }
?>

<!DOCTYPE html>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" href="mystyle.css" type="text/css" />

    <title>Account Page</title>

    <style>
        body {
            background-image: url('background.jpg');
        }
        * {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body>

    <h1>Montana Pancake Co</h1>

   <div class="topnav">
        <ul>

            <li><a class="active" href="index.php">Home</a></li>

            <li><a href="store.php">Store</a></li>

            <li><a href="about.php">About</a></li>

            <li><a href="contact.php">Contact</a></li>

            <li><a href="account.php">Cart</a></li>

            <?php
            if($_SESSION['loggedin']==true){
                echo '<li><a>' . $_SESSION['username'] . '</a></li>';
                echo '<li><a href="logout.php"><span>Logout</span></a></li>';
            }
            else{
                echo '<li><a href="login.php">Log In</a></li>';
                echo '<li><a href="signup.php">Sign Up</a></li>';
            }
            ?>
            
            <li><input type="text" placeholder="Search... "></li>

        </ul>
    </div>

    <h2>Your Cart:</h2>

    <?php

    $total = 0;

    print_r($_SESSION['cart']);

    if(isset($_SESSION['cart']) && !empty($product)){
        foreach($_SESSION['cart'] as $product){
            echo $product->photo;
            echo $product->name;
            echo $product->description;
            echo '$' . $product->price;
        }
    }
    //$total = $product->price;
    echo 'Your total is $' . $total;

    ?>



    <form action="account_confirm.php" method="post" style="border:1px solid #ccc">
        <div class="container">

        </div>
    </form>

    <a href="store.php"><button>Continue Shopping</button></a>
</body>

</html>