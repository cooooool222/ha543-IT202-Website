<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
//require_once("TechGadgetsproduct.php");
$TechgadgetProductID = $_POST['TechgadgetProductID'];
$product = Product::findProduct($TechgadgetProductID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>product $TechgadgetProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $TechgadgetProductID</h2>\n";
?>
