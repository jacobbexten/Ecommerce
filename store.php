<?php
    session_start();
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

        align {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        .SearchBar {
            padding: 10px;
            text-align: center;
            width: 80%;
        }

    </style>

</head>

<body>

    <?php
        include('header.php');
        include('connect.php');
    ?>

    


    <center>
        <div class="btn-group" style="width:80%" id="myBtnContainer">
            <button class="btn active" style="width:10%" onclick="filterSelection('all')"> All</button>
            <button class="btn" style="width:10%" onclick="filterSelection('mix')"> Pancake Mix</button>
            <button class="btn" style="width:10%" onclick="filterSelection('syrup')"> Syrup</button>
            <button class="btn" style="width:10%" onclick="filterSelection('apparel')"> Apparel</button>
        </div>
    </center>

    <div class="filter" id="myProducts">
        <center>
            <div class="SearchBar">
                <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search...">
            </div>
        </center>
        <div class="storecards">
            <?php
            $query = "SELECT * FROM Products WHERE product_id = 1";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>
            <div class="column mix">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="mix1.jpg" alt="Mix 1" style="width:100%">
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="1" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }

            $query = "SELECT * FROM Products WHERE product_id = 3";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>

            <div class="column mix">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="mix2.jpg" alt="Mix 2" style="width:100%">
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="3" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }
            ?>
        </div>

        <div class="storecards">
            <?php
            $query = "SELECT * FROM Products WHERE product_id = 4";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>
            <div class="column syrup">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="syrup1.jpg" alt="Syrup 1" style="width:100%" />
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="4" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }

            $query = "SELECT * FROM Products WHERE product_id = 5";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>
            <div class="column syrup">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="syrup2.jpg" alt="Syrup 1" style="width:100%">
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="5" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="storecards">
            <?php
            $query = "SELECT * FROM Products WHERE product_id = 6";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>
            <div class="column apparel">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="shirt.jpg" alt="Shirt" style="width:100%">
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="6" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }
            $query = "SELECT * FROM Products WHERE product_id = 7";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result)

            ?>
            <div class="column apparel">
                <form action="account.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <img src="hat.jpg" alt="Hat" style="width:100%" />
                        <h2 class="card-title"><?php echo $row["product_name"]; ?></h2>
                        <p class="price"><?php echo $row["product_price"]; ?></p>
                        <p><?php echo $row["product_des"]; ?></p>
                        <input type="hidden" name="7" value="0">
                        <button type="submit" class="button">ADD TO CART</button>
                    </div>
                </div>
                </form>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <script>
        //filter
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        //search
        function myFunction() {
            var input, filter, cards, cardContainer, h2, keep_card, card_titles, badge_texts, i, j;

            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myProducts");
            cards = cardContainer.getElementsByClassName("card");
            for (i = 0; i < cards.length; i++) {
                //We will switch keep_card to true if we find search text in badge or title
                keep_card = false;
                //querySelectorAll returns all elements of a.badge. querySelector returns only the first element
                card_titles = cards[i].querySelectorAll(".card-body h2.card-title");
                badge_texts = cards[i].querySelectorAll(".card-footer a.badge");

                //You must loop through all card titles.
                for(j = 0; j < card_titles.length; j++) {
                    if (card_titles[j].innerText.toUpperCase().indexOf(filter) > -1) {
                        //Found search text, now lets switch keep_card on
                        keep_card = true;
                        //No need for further looping, we found the card, there we break loop
                        break;
                    }
                }

                if(!keep_card) {
                    for(j = 0; j < badge_texts.length; j++) {
                        if (badge_texts[j].innerText.toUpperCase().indexOf(filter) > -1) {
                            keep_card = true;
                            break;
                        }
                    }
                }

                if(keep_card) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }

            }
        }
    
    </script>
    <?php
        include('footer.php');
    ?>
</body>

</html>