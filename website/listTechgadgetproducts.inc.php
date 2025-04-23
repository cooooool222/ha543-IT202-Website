<script language="javascript">
   function listbox_dblclick() {
      document.Techgadgetproducts.displayTechgadgetproduct.click();
   }
   function button_click(target) {
      var userConfirmed = true; 
      if(target==1) {
      userConfirmed = confirm("Are you sure you want to remove this category?");
      }
      if(userConfirmed) { 
        if(target==0) Techgadgetproducts.action = "index.php?content=displayTechgadgetproduct";
        if(target==1) Techgadgetproducts.action = "index.php?content=removeTechgadgetproduct";
        if(target==2) Techgadgetproducts.action = "index.php?content=updateTechgadgetproduct";
      } else {
         alert("Action canceled.");
      }
      }
</script>

<h2>Select Product</h2>
<form name="Techgadgetproducts" method="post">
   <select ondblclick="listbox_dblclick()" name="TechgadgetProductID" size="20">
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
<br>
   <input type="submit" onClick="button_click(0)" name="displayTechgadgetproduct" value="View Product">
   <input type="submit" onClick="button_click(1)" name="deleteTechgadgetproduct" value="Delete Product">
   <input type="submit" onClick="button_click(2)" name="updateTechgadgetproduct" value="Update Product">
</form>