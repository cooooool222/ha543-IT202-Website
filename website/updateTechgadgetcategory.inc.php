<style>
   form[name="Techgadgetcategory"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="Techgadgetcategory"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="Techgadgetcategory"] input[type="text"] {
       width: 100%;
   }
   form[name="Techgadgetcategory"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
if (!isset($_POST['TechgadgetCategoryID']) or (!is_numeric($_POST['TechgadgetCategoryID']))) {
    ?>
     <h2>You did not select a valid TechgadetCategoryID to update.</h2>
     <a href="index.php?content=listTechgadgetscategories.">List Categories</a>
     <?php
    } else {
$TechgadgetCategoryID = $_POST['TechgadgetCategoryID'];
$category = Category::findCategory($TechgadgetCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $TechgadgetCategoryID; ?></h2><br>
   <form name="Techgadgetcategory" action="index.php" method="post">
       <label for="TechgadgetCategoryCode">Techgadgetcategory Code:</label>
       <input type="text" name="TechgadgetCategoryCode" id="TechgadgetCategoryCode" value="<?php echo $category->TechgadgetCategoryCode; ?>">
       <label for="TechgadgetCategoryName">Techgadgetcategory Name:</label>
       <input type="text" name="TechgadgetCategoryName" id="TechgadgetCategoryName" value="<?php echo $category->TechgadgetCategoryName; ?>">
       <label for="TechgadgetshelfNumber">Techgadgetshelf Number:</label>
       <input type="text" name="TechgadgetshelfNumber" id="TechgadgetshelfNumber" value="<?php echo $category->TechgadgetshelfNumber; ?>">
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="TechgadgetCategoryID" value="<?php echo $TechgadgetCategoryID; ?>">
       <input type="hidden" name="content" value="changeTechgadgetcategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $TechgadgetCategoryID; ?> not found</h2>
   <a href="index.php?content=listTechgadgetscategories">List Categories</a> 
   <?php
}
}
?>
<script language="javascript">
   document.Techgadgetcategory.TechgadgetCategoryCode.focus();
   document.Techgadgetcategory.TechgadgetCategoryCode.select();
</script>
