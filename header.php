<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link rel="stylesheet" href="mystyle.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home Page</title>

    <style>
        body {
            background-image: url('background.jpg');
            background-repeat: repeat;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .imgbox {
            display: grid;
            height: 100%;
        }

        .center-fit {
            max-width: 100%;
            max-height: 100%;
        }
        button {
            background-color: Transparent;
            color: white;
            padding: 0px;
            margin-bottom: 0px;
            margin-top: 0px;
            border: none;
            cursor: pointer;
            width: 100%;
            min-width: 160px;

        }
    </style>

</head>

<h1>Montana Pancake Co</h1>
<div class="topnav">
    <ul>

        <li><a class="active" href="index.php">Home</a></li>

        <li><a href="store.php">Store</a></li>

        <li><a href="about.php">About</a></li>

        <li><a href="contact.php">Contact</a></li>

        <li><a href="account.php">Cart <i class="fa fa-shopping-cart"></i></a></li>

        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            //echo '<li><a>' . $_SESSION['username'] . '</a></li>';
            echo '<li><a><div class="dropdown">';
                echo '<button class="dropbtn">' . $_SESSION['username'] . ' ' . '<i class="fa fa-caret-down"></i>';
                echo '</button></a>';
                echo '<div class="dropdown-content">';
                    echo '<a href="user_page.php">My Account</a>';
                    echo '<a href="logout.php">Logout</a>';
                echo '</div>';
            echo '</div></li>';

        }
        else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="signup.php">Sign Up</a></li>';
        }
        ?>


    </ul>
</div>
</html>