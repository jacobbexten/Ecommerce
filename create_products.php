<?php



$products = array();
$products[0] = new product("The Classic Mix", 0 , "Our classic pancake mix in a 5lb bag.", 9.99, "mix1.jpg");
$products[1] = new product("The Whole Mix", 1 , "Whole wheat pancake mix in a 5lb bag.", 9.99, "mix1.jpg");
$products[2] = new product("The Classic Syrup", 2 , "Our classic maple syrup.", 7.99, "syrup1.jpg");
$products[3] = new product("The Only Syrup", 3 , "Our locally sourced strawberry syrup.", 7.99, "syrup1.jpg");


$_SESSION['products'] = $products;

?>