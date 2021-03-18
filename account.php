<?php
    //include "products.php";
    include "connect.php";
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
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

        * {
            box-sizing: border-box;
        }

        .storecards {
            margin: 12px -5px;

        }

        .storecards:after {
            content: "";
            display: table;
            clear: both;

        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            background-color: #eeeeee;
            width: 400px;
        }

        align {
            display: flex;
            justify-content: center;
            flex-direction: row;

    </style>

</head>

<body>

    <?php
        include('header.php');
        include('connect.php');
        if(empty($_SESSION['cart'])) {
            $_SESSION['cart']=array();
        }
    ?>

    <h2><center>Your Cart:<br></center></h2>


    <?php

    $total = 0;
    $qty1 = 0;
    $qty2 = 0;
    $qty3 = 0;
    $qty4 = 0;
    $qty5 = 0;
    $qty6 = 0;


    if (isset($_POST['1'])){
        array_push($_SESSION['cart'], $_SESSION['products'][0]);
    }
    
    if (isset($_POST['3'])){
        array_push($_SESSION['cart'], $_SESSION['products'][1]);
    }

    if (isset($_POST['4'])){
        array_push($_SESSION['cart'], $_SESSION['products'][2]);
    }

    if (isset($_POST['5'])){
        array_push($_SESSION['cart'], $_SESSION['products'][3]);
    }

    if (isset($_POST['6'])){
        array_push($_SESSION['cart'], $_SESSION['products'][4]);
    }

    if (isset($_POST['7'])){
        //if(!in_array(, $_SESSION['cart]'])){
            array_push($_SESSION['cart'], $_SESSION['products'][5]);
        //}
    }
    


    print_r(($_SESSION['cart']));

    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $product){
            echo '<div class="storecards">';
            echo '<div class="card">';
            echo '<img src="';
            echo $product->photo;
            echo '" style="height:150px"/>';
            echo '<h2>';
            echo $product->name;
            echo '</h2>';
            echo '<p>';
            echo $product->description;
            echo '</p>';
            echo '<h3>';
            echo '$';
            echo $product->price;
            echo '</h3>';
            echo '<br>';
            echo '<h3>Quantity: ';
            echo $qty1;
            echo '</h3>';
            echo '</div>';
            echo '</div>';
            $total = $total + $product->price;

        }
    }
    
    echo '<h2><center>Your total is $' . $total .'</center></h2>';


    //$sql = SELECT * FROM Products WHERE 

    ?>

    <form action="submitorder.php" method="post">
        <div class="container">
        <button class="submitbutton">Submit Order</button>
        </div>
    </form>

    <div class="container" style="text-align: center">
        <a href="store.php"><button class="submtibutton">Continue Shopping</button></a>
    </div>
    <?php
        include('footer.php');
    ?>
</body>

</html>