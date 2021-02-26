<?php



$products = array();
$products[0] = new product("classicmix", 0 , "Our classic pancake mix in a 5lb bag.", 9.99, "Mix1.jpg");
$products[1] = new product("wholemix", 1 , "Whole wheat pancake mix in a 5lb bag.", 9.99, "Mix1.jpg");
$products[2] = new product("syrup1", 2 , "Our classic maple syrup.", 7.99, "syrup1.jpg");
$products[3] = new product("syrup2", 3 , "Our locally sourced strawberry syrup.", 7.99, "syrup1.jpg");


$_SESSION['products'] = $products;

?>