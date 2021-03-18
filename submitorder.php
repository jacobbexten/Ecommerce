<?php
    session_start();
    $_SESSION['loggedin'] = true;

    if ($_SERVER['REQUEST_METHOD']=='POST') {

        if(!empty($_POST['username']) && !empty($_POST['psw'])) {
            setcookie('Jacob', 'Bexten', time()+3600);
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $_POST['username'];
    }
}

?>

<!DOCTYPE html>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Signup Page</title>
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

            <?php
            if($_SESSION['loggedin']==true){
            echo '
            <li><a>' . $_SESSION['username'] . '</a></li>';
            echo '
            <li><a href="logout.php"><span>Logout</span></a></li>';
            }
            else{
            echo '
            <li><a href="login.php">Log In</a></li>';
            echo '
            <li><a href="signup.php">Sign Up</a></li>';
            }
            ?>


        </ul>
    </div>

    <h2>Thanks for submitting your order. We will send you an email confirmation shortly.</p>

    <?php
    unset($_SESSION['cart']);
    ?>
</body>
</html>