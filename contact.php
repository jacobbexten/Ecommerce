<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    }

    $_SESSION['sentcontact']=false;

    if ($_SERVER['REQUEST_METHOD']=='POST') {

        if(!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
            $_SESSION['sentcontact']=true;
        }
    }

?>


<!DOCTYPE html>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initital-scale=1" />

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" href="mystyle.css" type="text/css" />

    <title>Contact Page</title>

    <style>
        body {
            background-image: url('background.jpg');
        }
        * {
            margin: 0;
            padding: 0;
        }
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px 20px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 12px; /* Add a top margin */
            margin-bottom: 12px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        
        input[type=submit] {
            background-color: maroon;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
        input[type=submit]:hover {
             background-color: black;
        }

        
        .container {
            border: none;
            padding: 20px;
        }

        .contact {
            padding: 12px 20px;
        }
        form {
            border: 5px solid black;
            padding: 12px;
        }
    </style>

</head>

<body>

    <?php
        include('header.php');
    ?>


    <div class="contact">
        <h2>(406)PAN-CAKE</h2>
        <h3>Montana Pancake Company</h3>
        <p>101 N. Pancake Lane</p>
        <p>Missoula, MT 59801</p>
    </div>
    <?php
    if($_SESSION['sentcontact']==true){
        print'<h2>Thanks for your message. We will respond to you at our earliest convenience!';
    }
    else {
        print'<div class="container">
            <form action="contact.php" method="post">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." >

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
                <label for="subject">Message</label>
                <textarea id="subject" name="subject" placeholder="What would you like to tell us?" style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>';
    }
    ?>

    </div>
    <?php
        include('footer.php');
    ?>
</body>

</html>