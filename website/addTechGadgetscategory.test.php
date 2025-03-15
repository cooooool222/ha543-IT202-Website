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
if ((trim($TechgadgetCategoryID) == '') or (!is_numeric($TechgadgetCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $TechgadgetCategoryCode = $_POST['TechgadgetCategoryCode'];
  $TechgadgetshelfNumber = $_POST['TechgadgetshelfNumber'];
  $TechgadgetCategoryName = $_POST['TechgadgetCategoryName'];
  $category = new Category($TechgadgetCategoryID, $TechgadgetCategoryCode, $TechgadgetshelfNumber, $TechgadgetCategoryName);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$TechgadgetCategoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
