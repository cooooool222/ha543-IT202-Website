<script language="javascript">
   function listbox_dblclick() {
       document.Techgadgetcategories.displayTechgadgetcategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) Techgadgetcategories.action = "index.php?content=displayTechgadgetcategory";
           if (target == 1) Techgadgetcategories.action = "index.php?content=removeTechgadgetcategory";
           if (target == 2) Techgadgetcategories.action = "index.php?content=updateTechgadgetcategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="Techgadgetcategories" method="POST">
  <select ondblclick = "listbox_dblclick()" name ="TechgadgetCategoryID" size="20">
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
</select>
<br>
   <input type="submit" onClick="button_click(0)" name="displayTechgadgetcategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deleteTechgadgetcategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updateTechgadgetcategory" value="Update Category">
</form>


