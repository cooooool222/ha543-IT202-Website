<h2>Enter New Item Information</h2>
<form name="newTechgadgetproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>TechgadgetProduct ID:</td>
           <td><input type="number" name="TechgadgetProductID"  min="1000" max = "99999999999" required size="4"></td>
       </tr>
       <tr>
           <td>TechgadgetProduct Name:</td>
           <td><input type="text" name="TechgadgetProductName" minlength="1" maxlength="255" required size="20"></td>
       </tr>
       <tr> 
            <td>TechgadgetProduct Code: </td>
            <td><input type="text" name="TechgadgetProductCode" minlength="1" maxlength="10" required size="20"></td>
       </tr>
        <tr>
           <td>TechgadgetCategory ID:</td>
           <td><input type="number" name="TechgadgetCategoryID"  min="100" max="99999999999" required size="4"></td>
       </tr>
       <tr> 
        <td>Techgadget Description:</td> 
        <td><input type="text" name="TechgadgetDescription"  required size="20"></td>
       </tr>
       <tr>
           <td>Techgadget ListPrice:</td>
           <td><input type="number" name="TechgadgetListPrice" required min = "0" max = "9999999999"  step = "0.01" size="10"></td>
       </tr>
       <tr>
           <td>Techgadget WholesalePrice:</td> 
           <td><input type ="number" name="TechgadgetWholesalePrice"  min = "0" max = "9999999999" step = "0.01" required size="15"></td>
      </tr> 
      <tr>
        <td>Techgadget color:</td>
        <td><input type="text" name="Techgadgetcolor" minlength = "1" maxlength = "255" required size="10"></td>
      </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addTechgadgetproduct">
</form>
