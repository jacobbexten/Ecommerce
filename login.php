<?php
    session_start();
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = '';



    if ($_SERVER['REQUEST_METHOD']=='POST') {

        include('connect.php');

        if(!empty($_POST['username']) && !empty($_POST['psw'])) {

            $u = mysqli_real_escape_string($conn,$_POST['username']);
            $p = mysqli_real_escape_string($conn,$_POST['psw']);

            $sql = "SELECT * FROM Users WHERE username = '$u' and password = '$p'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $count = mysqli_num_rows($result);
         
            if($count == 1) {
                $_SESSION['username'] = $u;
                $_SESSION['loggedin'] = true;
            }
            else {
                //error message if username or password is not empty
                print'<div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
                <strong>Log In failed.</strong> Please make sure your username or password is correct.
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
            $conn->close();
        }
    }

?>

<!DOCTYPE html>


<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title>Login Page</title>
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

    if ($_SESSION['loggedin']==true) {
        print '<h2>You are now logged in!</h2>';
    }

    else{
    print'
    <form action="login.php" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Log In</h1>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <div class="clearfix">
                <button type="submit" class="loginbtn">Log In</button>
            </div>
        </div>
    </form>';
    }

    include('footer.php');
    ?>
</body>
</html>