<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
include("TechGadgetsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $TechgadgetProductID = $product->TechgadgetProductID;
   $TechgadgetProductName = $product->TechgadgetProductName;
   $TechgadgetProductCode = $product->TechgadgetProductCode;
   $TechgadgetListPrice = $product->TechgadgetListPrice;
   $option = $TechgadgetProductID . " - " .   $TechgadgetProductCode . " - " . $TechgadgetProductName .  " - " .   $TechgadgetListPrice;
   echo "$option<br>";
}
?>
