<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
include("TechGadgetsproduct.php");
$TechgadgetProductID = $_POST['TechgadgetProductID'];
$product = Product::findProduct($TechgadgetProductID);
$product->TechgadgetProductID = $_POST['TechgadgetProductID'];
$product->TechgadgetProductName = $_POST['TechgadgetProductName'];
$product->TechgadgetProductCode = $_POST['TechgadgetProductCode'];
$product->TechgadgetDescription = $_POST['TechgadgetDescription'];
$product->TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$product->TechgadgetListPrice = $_POST['TechgadgetListPrice'];
$product->TechgadgetWholesalePrice = $_POST['TechgadgetWholesalePrice'];
$product->Techgadgetcolor = $_POST['Techgadgetcolor'];
$result = $product->updateProduct();
if ($result) {
   echo "<h2>product $TechgadgetProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating product $TechgadgetProductID</h2>\n";
}
?>
