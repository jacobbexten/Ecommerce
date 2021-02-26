<?php
    session_start();
    $_SESSION = [];
    session_destroy();
?>
<!DOCTYPE html>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Logout Page</title>
    <link rel="stylesheet" href="mystyle.css" type="text/css" />

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

            <li><a href="login.php">Log In</a></li>

            <li><input type="text" placeholder="Search... "></li>

        </ul>
    </div>

    <h2>You are logged out!</p>
</body>
</html>