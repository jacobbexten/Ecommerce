<?php
    include('connect.php');
    session_start();

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

        $user = mysqli_real_escape_string($conn, $_SESSION['username']);


        $sql = "SELECT * FROM Users WHERE username='$user'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];

        echo '<div class="user-container">';
        echo '<h2>Email: ' . $email . '</h2>';
        echo '<h2>Username: ' . $username . '</h2>';
        echo '<h2>Password: ' . $password . '</h2>';
        echo '<button type="submit" class="signupbtn">Show Previous Orders</button>';
        echo '</div>';
        $conn->close();

    ?>

    <center><div class="btn-group" style="width:80%">
        <button onclick="window.location.href='change_email.php';" style="width:10%" class="btn">Change Email</button></a>
        <button onclick="window.location.href='change_username.php';" style="width:10%" class="btn">Change Username</button></a>
        <button onclick="window.location.href='change_password.php';" style="width:10%" class="btn">Change Password</button></a>
        </div></center>
    <?php
        include('footer.php');
    ?>

</body>
</html>