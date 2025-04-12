<?php
if (!isset($_POST['TechgadgetProductID']) or (!is_numeric($_POST['TechgadgetProductID']))) {
?>
   <h2>You did not select a valid TechgadgetProductID value</h2>
   <a href="index.php?content=listTechgadgetproducts">List Products</a>
   <?php
} else {
   $TechgadgetProductID = $_POST['TechgadgetProductID'];
   $product = Product::findProduct($TechgadgetProductID);
   if ($product) {
   ?>
       <h2>Update Product <?php echo $product->TechgadgetProductID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>TechgadgetProduct ID</td>
                   <td><?php echo $product->TechgadgetProductID; ?></td>
               </tr>
               <tr>
               <td>TechgadgetProduct Name</td>
                   <td><input type="text" name="TechgadgetProductName" minlength="1" maxlength="255" required value="<?php echo $product->TechgadgetProductName; ?>"></td>
               </tr>
               <tr>
                   <td>TechgadgetCategory ID</td>
               <td><input type="number" name="TechgadgetCategoryID" min="100" max="99999999999" required  value="<?php echo $product->TechgadgetCategoryID; ?>"></td>
               </tr>
               <tr> 
                 <td>Techgadget ProductCode </td>
                 <td><input type="text" name="TechgadgetProductCode" minlength = "1" maxlength = "10" required value="<?php echo $product->TechgadgetProductCode; ?>"></td>
               </tr>
               <tr>
                <td>Techgadget Description </td> 
                <td><input type="text" name="TechgadgetDescription" required value="<?php echo $product->TechgadgetDescription; ?>"></td>
               </tr>
               <tr>
                <td>Techgadget color</td>
                <td><input type="text" name="Techgadgetcolor" minlength = "1" maxlength = "255" required value="<?php echo $product->Techgadgetcolor; ?>"></td>
               </tr>
               <tr>
                <td>Techgadget WholesalePrice </td> 
               <td><input type="number" name="TechgadgetWholesalePrice"  min = "0" max = "9999999999" step = "0.01" required value="<?php echo $product->TechgadgetWholesalePrice; ?>"></td>
                </tr>
                <tr>
                   <td>Techgadget ListPrice</td>
                 <td><input type="number" name="TechgadgetListPrice"  min = "0" max = "9999999999" step = "0.01" required value="<?php echo $product->TechgadgetListPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="TechgadgetProductID" value="<?php echo $TechgadgetProductID; ?>">
           <input type="hidden" name="content" value="changeTechgadgetproduct">
       </form>
   <?php
     } else {
        ?>
            <h2>Sorry, product <?php echo $TechgadgetProductID; ?> not found</h2>
            <a href="index.php?content=listTechgadgetproducts">List Products</a>
     <?php
        }
     }
     ?>
     

