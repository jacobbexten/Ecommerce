<?php
    session_start();
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('connect.php');
        if($_POST['psw'] == $_POST['psw-repeat']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $_POST['username'];
        }
        else {
            print'<div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
                <strong>Sign Up failed.</strong> Please make sure your passwords match.
                </div>';
            print'<script>
                var close = document.getElementsByClassName("closebtn");
                var i;

                for (i = 0; i < close.length; i++) {
                    close[i].onclick = function(){
                        var div = this.parentElement;
                        div.style.opacity = "0";
                        setTimeout(function(){ div.style.display = "none"; }, 600);
                    }
                }
                </script>';
        }

        $e = $_POST['email'];
        $u = $_POST['username'];
        $p = $_POST['psw'];
        $pr = $_POST['psw-repeat'];       

        if($p == $pr) {
            //$hash = password_hash($p, PASSWORD_DEFAULT);
            $sql = "INSERT INTO Users (email, username, password) VALUES ('$e', '$u', '$p')";
            $conn->close();
        }
        $conn->close();
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

    <?php
    include('header.php');

    
    if ($_SESSION['loggedin'] == true) {
        print '<h2>You have successfully signed up! You are now logged in.</h2>';
    }
   
    else{
        print'
        <form action="signup.php" method="POST" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>';
    
    }
    include('footer.php');
    ?>
</body>
</html>