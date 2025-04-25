<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
require_once("TechGadgetscategory.php");
if(isset($_SESSION['login'])) {
   if (!isset($_POST['TechgadgetCategoryID']) or (!is_numeric($_POST['TechgadgetCategoryID']))) {
      ?>
             <h2>You did not select a valid TechgadgetCategoryID to delete.</h2>
             <a href="index.php?content=listTechgadgetscategories">List Categories</a>
      <?php
       } else {
$TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$category = Category::findCategory($TechgadgetCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $TechgadgetCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $TechgadgetCategoryID</h2>\n";
       }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
