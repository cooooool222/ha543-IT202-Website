<?php
if (!isset($_REQUEST['TechgadgetProductID']) or (!is_numeric($_REQUEST['TechgadgetProductID']))) {
?>
 <h2>You did not select a valid TechgadgetProductID to view.</h2>
 <a href="index.php?content=listTechgadgetproducts">List Products</a>
 <?php
} else {
 $TechgadgetProductID = $_REQUEST['TechgadgetProductID'];
 $product = Product::findProduct($TechgadgetProductID);
 if ($product) {
 ?>
   <h2>TechgadgetProduct ID: <?php echo $product->TechgadgetProductID;?></h2>
   <h2>TechgadgetProduct Name: <?php echo $product->TechgadgetProductName;?></h2>
   <h2>TechgadgetCategory ID: <?php echo $product->TechgadgetCategoryID;?></h2>
   <h2>TechgadgetProduct Code: <?php echo $product->TechgadgetProductCode;?></h2>
   <h2>Techgadget Description: <?php echo $product->TechgadgetDescription;?></h2>
   <h2>Techgadget Color: <?php echo $product->Techgadgetcolor;?></h2>
   <h2>Techgadget WholesalePrice: <?php echo $product->TechgadgetWholesalePrice;?></h2>
   <h2>TechgadgetList Price: <?php echo $product->TechgadgetListPrice;?></h2>
   <br>
<?php
 } else {
   echo "<h2>Sorry, Product not found.</h2>\n";
 }
}
?>
