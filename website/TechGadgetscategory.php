<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
require_once('database.php');
class Category
{
   public $TechgadgetCategoryID;
   public $TechgadgetCategoryCode;
   public $TechgadgetshelfNumber;
   public $TechgadgetCategoryName;
   function __construct($TechgadgetCategoryID, $TechgadgetCategoryCode, $TechgadgetshelfNumber, $TechgadgetCategoryName)
   {
       $this->TechgadgetCategoryID = $TechgadgetCategoryID;
       $this->TechgadgetCategoryCode = $TechgadgetCategoryCode;
       $this->TechgadgetshelfNumber = $TechgadgetshelfNumber;
       $this->TechgadgetCategoryName = $TechgadgetCategoryName;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->TechgadgetCategoryID</h2>\n" .
           "<h2>$this->TechgadgetCategoryCode, $this->TechgadgetshelfNumber, $this->TechgadgetCategoryName</h2>\n";
       return $output;
   }


    function saveCategory()
{
    $db = getDB();
    $query = "INSERT INTO TechGadgetsCategories VALUES (?, ?, ?, ?, NOW())";
    $stmt = $db->prepare($query);
    $stmt->bind_param(
        "isis",
        $this->TechgadgetCategoryID,
        $this->TechgadgetCategoryCode,
        $this->TechgadgetshelfNumber,
        $this->TechgadgetCategoryName
    );
    $result = $stmt->execute();
    $db->close();
    return $result;
}
static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM TechGadgetsCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $TechGadgetsCategories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['TechgadgetCategoryID'],
                   $row['TechgadgetCategoryCode'],
                   $row['TechgadgetshelfNumber'],
                   $row['TechgadgetCategoryName']
               );
               array_push($TechGadgetsCategories, $category);
               unset($category);
           }
           $db->close();
           return $TechGadgetsCategories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($TechgadgetCategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM TechGadgetsCategories WHERE TechgadgetCategoryID = $TechgadgetCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['TechgadgetCategoryID'],
               $row['TechgadgetCategoryCode'],
               $row['TechgadgetshelfNumber'],
               $row['TechgadgetCategoryName']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE TechGadgetsCategories SET TechgadgetCategoryID = ?, TechgadgetCategoryCode = ?, " .
           "TechgadgetshelfNumber = ?, TechgadgetCategoryName = ? " .
           "WHERE TechgadgetCategoryID = $this->TechgadgetCategoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isis",
           $this->TechgadgetCategoryID,
           $this->TechgadgetCategoryCode,
           $this->TechgadgetshelfNumber,
           $this->TechgadgetCategoryName,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM TechGadgetsCategories WHERE TechgadgetCategoryID = $this->TechgadgetCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }



}
?>