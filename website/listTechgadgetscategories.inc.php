<h2>Select Category</h2>
<form name="Techgadgetcategories" method="POST">
  <select name ="TechgadgetCategoryID" size="20">
<?php

/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/

//include("TechGadgetscategory.php");
$TechGadgetsCategories= Category::getCategories();
foreach($TechGadgetsCategories as $category) {
   $TechgadgetCategoryID  = $category->TechgadgetCategoryID;
   $name = $TechgadgetCategoryID . " - " . $category->TechgadgetCategoryCode . " - " . $category->TechgadgetCategoryName;
   echo "<option value=\"$TechgadgetCategoryID\">$name</option>\n";
}
?>
