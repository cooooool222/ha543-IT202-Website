<?php
if (!isset($_REQUEST['TechgadgetCategoryID']) or (!is_numeric($_REQUEST['TechgadgetCategoryID']))) {
?>
 <h2>You did not select a valid TechgadgetCategoryID to view.</h2>
 <a href="index.php?content=listTechgadgetscategories">List Categories</a>
 <?php
} else {
 $TechgadgetCategoryID = $_REQUEST['TechgadgetCategoryID'];
 $category = Category::findCategory($TechgadgetCategoryID);
 if ($category) {
   echo $category;
   $products = Product::getproductsByCategory($TechgadgetCategoryID);
   if ($products) {
 ?>
     <br><br>
     <b>Products:</b><br>
     <table>
       <tr>
         <th>Product:</th>
         <th>Name:</th>
         <th>Code:</th>
         <th>Description:</th>
         <th>Color:</th>
         <th>ListPrice:</th>
         <th>WholesalePrice:</th>
       </tr>
       <?php
       $producttotal = 0;
       foreach ($products as $product) {
       ?>
         <tr>
           <td><?php echo $product->TechgadgetProductID; ?></td>
           <td><?php echo $product->TechgadgetProductName; ?></td>
           <td><?php echo $product->TechgadgetProductCode; ?></td>
           <td><?php echo $product->TechgadgetDescription; ?></td>
           <td><?php echo $product->Techgadgetcolor; ?></td>
           <td><?php echo $product->TechgadgetListPrice; ?></td>
           <td><?php echo $product->TechgadgetWholesalePrice; ?></td>
         </tr>
       <?php
       }
       ?>
     </table>
   <?php
   } else {
     echo "<h2>There are no products for this category</h2>\n";
   }
 } else {  
     echo "<h2>Sorry, category $TechgadgetCategoryID not found</h2>\n";
 }
}
?>

