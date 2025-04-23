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
$TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$answer = $_POST['answer'];
if($answer == "Update Category") {
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
}  } else {
   echo "<h2>Update Canceled for category $categoryID</h2>\n";
}
} else {
echo "<h2>Please login first</h2>\n";
}

?>
