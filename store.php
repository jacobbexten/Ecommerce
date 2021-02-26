<?php


    include 'products.php';

    session_start();
    include 'create_products.php';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    }
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart']=array();
    }


?>

<!DOCTYPE html>
<!DOCTYPE html>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" href="mystyle.css" type="text/css" />

    <title>Store Page</title>

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

        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
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
        }

        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;

            }
        }
        align {
            display: flex;
            justify-content: center;
            flex-direction: row;
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

    <div class="storecards">
        <div class="column">
            <form action="account.php" method="post">
            <div class="card">
                <img src="mix1.jpg" alt="Mix 1" style="width:100%" />
                <h2>The Classic Mix</h2>
                <p class="price">$9.99</p>
                <p>Our classic pancake mix in a 5lb bag.</p>
                <input type="hidden" name="id1" value="0"</>
                <button type="submit">ADD TO CART</button>
            </div>
            </form>

        </div>

        <div class="column">
            <form action="account.php" method="post">
            <div class="card">
                <img src="mix1.jpg" alt="Mix 1" style="width:100%" />
                <h2>The Whole Mix</h2>
                <p class="price">$9.99</p>
                <p>Whole wheat pancake mix in a 5lb bag.</p>
                <input type="hidden" name="id2" value="0"</>
                <button type="submit">ADD TO CART</button>
            </div>
            </form>

        </div>

        <div class="column">
            <form action="account.php" method="post">
            <div class="card">
                <img src="syrup1.jpg" alt="Syrup 1" style="width:100%" />
                <h2>The Classic Syrup</h2>
                <p class="price">$7.99</p>
                <p>Our classic maple syrup.</p>
                <input type="hidden" name="id3" value="0"</>
                <button type="submit">ADD TO CART</button>
            </div>
            </form>

        </div>

        <div class="column">
            <form action="account.php" method="post">
            <div class="card">
                <img src="syrup1.jpg" alt="Syrup 1" style="width:100%" />
                <h2>The Only Syrup</h2>
                <p class="price">$7.99</p>
                <p>Our locally sourced strawberry syrup.</p>
                <input type="hidden" name="id4" value="0"</>
                <button type="submit">ADD TO CART</button>
            </div>
            </form>

        </div>
    </div>

</body>

</html>