<h2>Select Product</h2>
<form name="Techgadgetcategoryproducts" method="post">
   <select name="TechgadgetProductID" size="20">
<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
//include("TechGadgetsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $TechgadgetProductID = $product->TechgadgetProductID;
   $TechgadgetProductName = $product->TechgadgetProductName;
   $TechgadgetProductCode = $product->TechgadgetProductCode;
   $TechgadgetListPrice = $product->TechgadgetListPrice;
   $option = $TechgadgetProductID . " - " .   $TechgadgetProductCode . " - " . $TechgadgetProductName .  " - " .   $TechgadgetListPrice;
   echo  "<option value=\"$TechgadgetProductID\">$option</option>\n";
}
?>
</select>
</form>