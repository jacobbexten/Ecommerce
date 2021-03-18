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

    <title>Change Username</title>

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


    echo '<div class="user-container">';
    echo '<h2>Username: ' . $user . '</h2>';
    echo '</div>';



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $newuser= $_POST["new_user"];

        $sql = "UPDATE Users SET username='$newuser' WHERE username='$user'";
        if(mysqli_query($conn, $sql)){
            echo '<center><h2>Username changed successfully</h2></center>';

            $_SESSION['username'] = $newuser;

            header("Refresh:2");
        }
        else {
            echo "Could not process...";
            $conn->error;
        }

        $conn->close();
    }
    else {

    print'
    <center>
        <form action="change_username.php" method="POST" style="width:50%">
            <div>
                <input type="text" placeholder="Enter New Username..." name="new_user" required>
                <button type="submit" class="signupbtn">Submit</button>
            </div>

        </form>
    </center>';


    }
    include('footer.php');
    ?>


</body>
</html>