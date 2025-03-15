<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
include('TechGadgetsproduct.php');
$TechgadgetProductID = $_POST['TechgadgetProductID'];
if ((trim($TechgadgetProductID) == '') or (!is_numeric($TechgadgetProductID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $TechgadgetProductName = $_POST['TechgadgetProductName'];
    $TechgadgetProductCode = $_POST['TechgadgetProductCode'];
    $TechgadgetDescription = $_POST['TechgadgetDescription'];
    $TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
    $TechgadgetListPrice = $_POST['TechgadgetListPrice'];
    $TechgadgetWholesalePrice = $_POST['TechgadgetWholesalePrice'];
    $Techgadgetcolor = $_POST['Techgadgetcolor'];
   $product = new Product(
       $TechgadgetProductID,
       $TechgadgetProductName,
       $TechgadgetProductCode,
       $TechgadgetDescription,
       $TechgadgetCategoryID,
       $TechgadgetListPrice,
       $TechgadgetWholesalePrice,
       $Techgadgetcolor
   );
   $result = $product->saveProduct();
   if ($result)
       echo "<h2>New product #$TechgadgetProductID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that product</h2>\n";
}
?>
