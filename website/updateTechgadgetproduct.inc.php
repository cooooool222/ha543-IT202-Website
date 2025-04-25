<style>
   form[name="TechgadgetProduct"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="TechgadgetProduct"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="TechgadgetProduct"] input[type="text"] {
       width: 100%;
   }
   form[name="TechgadgetProduct"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$TechgadgetProductID = $_POST['TechgadgetProductID'];
$product = Product::findProduct($TechgadgetProductID);
if ($product) {
?>
   <h2>Update Product <?php echo $TechgadgetProductID; ?></h2><br>
   <form name="TechgadgetProduct" action="index.php" method="post">
       <label for="TechgadgetProductName">TechgadgetProduct Name:</label>
       <input type="text" name="TechgadgetProductName" id="TechgadgetProductName" value="<?php echo $product->TechgadgetProductName;?>">
       <label for="TechgadgetcategoryID">TechgadgetCategory ID:</label>
       <input type="number" name="TechgadgetCategoryID" id="TechgadgetCategoryID" value="<?php echo $product->TechgadgetCategoryID; ?>">
       <label for="TechgadgetProductCode">TechgadgetProduct Code:</label>
       <input type="text" name="TechgadgetProductCode" id="TechgadgetProductCode" value="<?php echo $product->TechgadgetProductCode; ?>">
       <label for="TechgadgetDescription">Techgadget Description:</label>
       <input type="text" name="TechgadgetDescription" id="TechgadgetDescription" value="<?php echo $product->TechgadgetDescription; ?>">
       <label for="Techgadgetcolor">Techgadget Color:</label>
       <input type="text" name="Techgadgetcolor" id="Techgadgetcolor" value="<?php echo $product->Techgadgetcolor; ?>">
       <label for="TechgadgetWholesalePrice">Techgadget WholesalePrice:</label>
       <input type="number" name="TechgadgetWholesalePrice" id="TechgadgetWholesalePrice" value="<?php echo $product->TechgadgetWholesalePrice; ?>">
       <label for="TechgadgetListPrice"> TechgadgetList Price: </label> 
       <input type="number" name="TechgadgetListPrice" id="TechgadgetListPrice" value="<?php echo $product->TechgadgetListPrice; ?>">
       <input type="submit" name="answer" value="Update Product">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="TechgadgetProductID" value="<?php echo $TechgadgetProductID; ?>">
       <input type="hidden" name="content" value="changeTechgadgetproduct">
   </form>
<?php
} else {
?>
   <h2>Sorry, Product <?php echo $TechgadgetProductID; ?> not found</h2>
   <a href="index.php?content=listTechgadgetproducts">List Products</a>
   <?php
}
?>
<script language="javascript">
   document.TechgadgetProduct.TechgadgetProductName.focus();
   document.TechgadgetProduct.TechgadgetProductName.select();
</script>
