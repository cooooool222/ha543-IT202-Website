<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
//include('TechGadgetsproduct.php');
if(isset($_SESSION['login'])) {
$TechgadgetProductID = filter_input(INPUT_POST, 'TechgadgetProductID', FILTER_VALIDATE_INT);
if ((trim($TechgadgetProductID) == '') or (!is_int($TechgadgetProductID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} elseif (Product::findProduct($TechgadgetProductID)) {
    echo "<h2>Sorry, A product with the ID #$TechgadgetProductID already exists</h2>\n";
} else {
    $TechgadgetProductName = htmlspecialchars($_POST['TechgadgetProductName']);
    $TechgadgetProductCode = htmlspecialchars($_POST['TechgadgetProductCode']);
    $TechgadgetDescription = htmlspecialchars($_POST['TechgadgetDescription']);
    $TechgadgetCategoryID = filter_input(INPUT_POST, 'TechgadgetCategoryID', FILTER_VALIDATE_INT);
    $TechgadgetListPrice = filter_input(INPUT_POST, 'TechgadgetListPrice', FILTER_VALIDATE_FLOAT);
    $TechgadgetWholesalePrice = filter_input(INPUT_POST, 'TechgadgetWholesalePrice', FILTER_VALIDATE_FLOAT);
    $Techgadgetcolor = htmlspecialchars($_POST['Techgadgetcolor']);
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
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
