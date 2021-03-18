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

    $password = $row['password'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $oldpassword = $_POST["old-psw"];
        $newpassword = $_POST["new-psw"];
        $passwordconfirm = $_POST["new-psw-repeat"];

        if(($oldpassword == $password)){
            if(($newpassword == $passwordconfirm)){
                $sql = "UPDATE Users SET password='$newpassword' WHERE username='$user'";
                if(mysqli_query($conn, $sql)){
                    echo '<center><h2>Password changed successfully</h2></center>';
                    header("Refresh:2");
                }
                else {
                    echo "Could not process";
                    $conn->error;
                }

                $conn->close();
            }
            else {
                echo '<center><h2>Unsuccessful... New passwords do not match!</h2></center>';
                header("Refresh:2");
            }
        }
        else {
            echo '<center><h2>Unsuccessful... New password does not match old password!</h2></center>';
            header("Refresh:2");
        }
    }


    else {

    print'
    <center>
        <form action="change_password.php" method="POST" style="width:50%">
            <div class="container">
                <input type="text" placeholder="Enter Old Password..." name="old-psw" required>
                <input type="text" placeholder="Enter New Password..." name="new-psw" required>
                <input type="text" placeholder="Re-Enter New Password..." name="new-psw-repeat" required>
                <button type="submit" class="signupbtn">Submit</button>
            </div>

        </form>
    </center>';


    }
    include('footer.php');
    ?>


</body>
</html>