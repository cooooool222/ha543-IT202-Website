<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
include("TechGadgetscategory.php");
$TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$category = Category::findCategory($TechgadgetCategoryID);
$category->TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$category->TechgadgetCategoryCode  = $_POST['TechgadgetCategoryCode'];
$category->TechgadgetshelfNumber = $_POST['TechgadgetshelfNumber'];
$category->TechgadgetCategoryName = $_POST['TechgadgetCategoryName'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $TechgadgetCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $TechgadgetCategoryID</h2>\n";
}
?>
