<h2>Enter New Item Information</h2>
<form name="newTechgadgetproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>TechgadgetProduct ID:</td>
           <td><input type="text" name="TechgadgetProductID" size="4"></td>
       </tr>
       <tr>
           <td>TechgadgetProduct Name:</td>
           <td><input type="text" name="TechgadgetProductName" size="20"></td>
       </tr>
       <tr> 
            <td>TechgadgetProduct Code: </td>
            <td><input type="text" name="TechgadgetProductCode" size="20"></td>
       </tr>
        <tr>
           <td>TechgadgetCategory ID:</td>
           <td><input type="text" name="TechgadgetCategoryID" size="4"></td>
       </tr>
       <tr> 
        <td>Techgadget Description:</td> 
        <td><input type="text" name="TechgadgetDescription" size="10"></td>
       </tr>
       <tr>
           <td>Techgadget ListPrice:</td>
           <td><input type="text" name="TechgadgetListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Techgadget WholesalePrice:</td> 
           <td><input type ="text" name="TechgadgetWholesalePrice" size="15"></td>
      </tr> 
      <tr>
        <td>Techgadget color:</td>
        <td><input type="text" name="Techgadgetcolor" size="10"></td>
      </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addTechgadgetproduct">
</form>
