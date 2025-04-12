<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <!-- <hr /> -->
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['firstName']} {$_SESSION['lastName']} </h3></td>\n";
   ?>
       <tr>
           <td><img src="images/homeicontech.png" alt= "TechgadgetHome Icon" width="12" height = "12">&nbsp;
            <a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr><td><img src="images/category.jpg" alt= "TechgadgetCategory Icon" width="12" height = "12">&nbsp;
           <strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listTechgadgetscategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newTechgadgetcategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><img src = "images/items.jpg" alt = "TechgadgetItems Icon" width = "12" height ="12">&nbsp;
            <strong>Items</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listTechgadgetproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newTechgadgetproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
           <img src="images/logout.webp" alt="Logout Icon" width="12" height="12"></a>&nbsp
                  <a href="index.php?content=logout">
                   <strong>Logout</strong></a>
                </td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="number" name="TechgadgetProductID" min="0"  size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateTechgadgetproduct" />
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="number" name="TechgadgetCategoryID" min ="0" size="14"/>
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displayTechgadgetcategory"/>
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>

