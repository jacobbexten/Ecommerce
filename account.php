<?php
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
    <div class="container" style="text-align: center">
        <a href="store.php"><button class="submtibutton" style="width:400px">Continue Shopping</button></a>
    </div>
    <h2><center>Your Cart:<br></center></h2>


    <?php

    $total = 0;
    $qty = 1;

    //certain keys for every product
    $key1 = 1;
    $key2 = 3;
    $key3 = 4;
    $key4 = 5;
    $key5 = 6;
    $key6 = 7;


    if (isset($_POST['1'])){
        $sql = "SELECT * FROM Products WHERE product_id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("1", $item_array_id)){
            $_SESSION['cart'][$key1] = $row;
        }
        else{
            $_SESSION['cart'][$key1][0]++;
        }
    }
    
    if (isset($_POST['3'])){
        $sql = "SELECT * FROM Products WHERE product_id = 3";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("3", $item_array_id)){
            $_SESSION['cart'][$key2] = $row;
        }
        else{
            $_SESSION['cart'][$key2][0]++;
        }
    }

    if (isset($_POST['4'])){
        $sql = "SELECT * FROM Products WHERE product_id = 4";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("4", $item_array_id)){
            $_SESSION['cart'][$key3] = $row;
        }
        else{
            $_SESSION['cart'][$key3][0]++;
        }
    }

    if (isset($_POST['5'])){
        $sql = "SELECT * FROM Products WHERE product_id = 5";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("5", $item_array_id)){
            $_SESSION['cart'][$key4] = $row;
        }
        else{
            $_SESSION['cart'][$key4][0]++;
        }
    }

    if (isset($_POST['6'])){
        $sql = "SELECT * FROM Products WHERE product_id = 6";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("6", $item_array_id)){
            $_SESSION['cart'][$key5] = $row;
        }
        else{
            $_SESSION['cart'][$key5][0]++;
        }
    }

    if (isset($_POST['7'])){
        $sql = "SELECT * FROM Products WHERE product_id = 7";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        array_push($row, $qty);
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array("7", $item_array_id)){
            $_SESSION['cart'][$key6] = $row;
        }
        else{
            $_SESSION['cart'][$key6][0]++;
        }
    }
    print_r(($_SESSION['cart']));




    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key=>$value){
            echo '<div class="storecards">';
            echo '<div class="card">';
            echo '<img src="';
            echo $value["product_img"];
            echo '" style="height:150px"/>';
            echo '<h2>';
            echo $value["product_name"];
            echo '</h2>';
            echo '<p>';
            echo $value["product_des"];
            echo '</p>';
            echo '<h3>';
            echo '$';
            echo $value["product_price"];
            echo '</h3>';
            echo '<br>';
            echo '<h3>Quantity: ';
            echo $value["0"];
            echo '</h3>';
            echo '<form action="account.php" method="POST">';
            echo '<div class="btn-group" style="width:100%" id="myBtnContainer">';
            echo '<input type="hidden" name="' . $key . '">';
            echo '<button class="btn" name="dec" style="width:1%">-</button>';
            echo '<button class="btn" style="width:80%">Remove</button>';
            echo '<button type="submit" class="btn" name="inc" style="width:1%">+</button>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            
            $total = $total + ($value["product_price"] * $value["0"]);

        }
    }
    
    echo '<h3><center>Total: $' . $total .'</center></h3>';


    ?>

    <form action="submitorder.php" method="post">
        <div class="container">
        <center>
        <button class="submitbutton" style="width:50px">Check Out</button>
        </center>
        </div>
    </form>

    <?php
        include('footer.php');
    ?>
</body>

</html>