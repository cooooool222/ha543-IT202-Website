<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
//include("TechGadgetsproduct.php");
if (isset($_SESSION['login'])) {
   $TechgadgetProductID = $_POST['TechgadgetProductID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Product") {
$TechgadgetProductID = $_POST['TechgadgetProductID'];
$product = Product::findProduct($TechgadgetProductID);
$product->TechgadgetProductID = $_POST['TechgadgetProductID'];
$product->TechgadgetProductName = htmlspecialchars($_POST['TechgadgetProductName']);
$product->TechgadgetProductCode = htmlspecialchars($_POST['TechgadgetProductCode']);
$product->TechgadgetDescription = htmlspecialchars($_POST['TechgadgetDescription']);
$product->TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$product->TechgadgetListPrice = $_POST['TechgadgetListPrice'];
$product->TechgadgetWholesalePrice = $_POST['TechgadgetWholesalePrice'];
$product->Techgadgetcolor = htmlspecialchars($_POST['Techgadgetcolor']);
$result = $product->updateProduct();
if ($result) {
   echo "<h2>product" . htmlspecialchars($TechgadgetProductID) . "updated</h2>\n";
} else {
   echo "<h2>Problem updating product" . htmlspecialchars($TechgadgetProductID) . "</h2>\n";
}
} else {
    echo "<h2>Update Canceled for item:" . htmlspecialchars($TechgadgetProductID) . "</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>


