<h2>Enter New Category Information</h2>
<form name="newTechgadgetcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>TechgadgetCategory ID:</td>
           <td><input type="text" name="TechgadgetCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>TechgadgetCategory Code:</td>
           <td><input type="text" name="TechgadgetCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td>TechgadgetCategory Name:</td>
           <td><input type="text" name="TechgadgetCategoryName" size="50"></td>
       </tr>
       <tr>
           <td>Techgadget shelfNumber: </td>
           <td><input type ="text" name="TechgadgetshelfNumber" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addTechGadgetscategory">
</form>
