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

    <title>About Page</title>

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

    <?php
        include('header.php');
    ?>


    <div class="hero-image">
        <div class="hero-text">
            <h2>About Us!</h2>
            <p>
                Locally sourced ingredients. Easy to Mix. 100% satisfaction guarantee.
                The Montana Pancake Company has served as Montana's #1 choice for pancake mix for over 100 years.
                Founded in the heart of Missoula where we take pride in offering a tasteful breakfast.
            </p>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>
</body>

</html>