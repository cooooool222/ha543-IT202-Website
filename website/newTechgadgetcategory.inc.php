<h2>Enter New Category Information</h2>
<form name="newTechgadgetcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>TechgadgetCategory ID:</td>
           <td><input type="number" name="TechgadgetCategoryID" size="4" min="100" max="99999999999" required></td>
       </tr>
       <tr>
           <td>TechgadgetCategory Code:</td>
           <td><input type="text" name="TechgadgetCategoryCode" size="20" placeholder="XXX" minlength="3" maxlength ="255" required></td>
       </tr>
       <tr>
           <td>TechgadgetCategory Name:</td>
           <td><input type="text" name="TechgadgetCategoryName" size="50" minlength="1" maxlength = "255"  required></td>
       </tr>
       <tr>
           <td>Techgadget shelfNumber: </td>
           <td><input type ="number" name="TechgadgetshelfNumber" size="10" min = "1" max="100" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addTechGadgetscategory">
</form>
