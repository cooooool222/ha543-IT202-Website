<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
error_log("\$_POST " . print_r($_POST, true));
include("TechGadgetscategory.php");
$TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$category = Category::findCategory($TechgadgetCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $TechgadgetCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $TechgadgetCategoryID</h2>\n";
?>
