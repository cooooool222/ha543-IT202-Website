<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
require_once('database.php');
class Product
{
   public $TechgadgetProductID;
   public $TechgadgetProductName;
   public $TechgadgetProductCode;
   public $TechgadgetDescription;
   public $TechgadgetCategoryID;
   public $TechgadgetListPrice;
   public $TechgadgetWholesalePrice;
   public $Techgadgetcolor;
   
   public
   function __construct(
        $TechgadgetProductID,
        $TechgadgetProductName,
        $TechgadgetProductCode,
        $TechgadgetDescription,
        $TechgadgetCategoryID,
        $TechgadgetListPrice,
        $TechgadgetWholesalePrice,
        $Techgadgetcolor
       ) {
       $this->TechgadgetProductID = $TechgadgetProductID;
       $this->TechgadgetProductName = $TechgadgetProductName;
       $this->TechgadgetProductCode = $TechgadgetProductCode;
       $this->TechgadgetDescription = $TechgadgetDescription;
       $this->TechgadgetCategoryID = $TechgadgetCategoryID;
       $this->TechgadgetListPrice = $TechgadgetListPrice;
       $this->TechgadgetWholesalePrice = $TechgadgetWholesalePrice;
       $this->Techgadgetcolor = $Techgadgetcolor;
   }

function __toString()
{
    $output = "<h2>Product : $this->TechgadgetProductID</h2>" .
        "<h2>Name: $this->TechgadgetProductName</h2>\n";
    "<h2>Category ID: $this->TechgadgetCategoryID at $this->TechgadgetListPrice</h2>\n";
    return $output;
}
function saveProduct()
{
    $db = getDB();
    $query = "INSERT INTO TechGadgetsProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $db->prepare($query);
    $stmt->bind_param(
        "issssidd",
        $this->TechgadgetProductID,     // integer data type
        $this->TechgadgetProductCode, 
        $this->TechgadgetProductName,
        $this->TechgadgetDescription,  // string data type
        $this-> Techgadgetcolor,
        $this->TechgadgetCategoryID, // integer data type
        $this->TechgadgetListPrice,
        $this->TechgadgetWholesalePrice,
            // float data type
    );

   $result = $stmt->execute();
   $db->close();
   return $result;
}
static function getProducts()
{
    $db = getDB();
    $query = "SELECT * FROM TechGadgetsProducts";
    $result = $db->query($query);
    if (mysqli_num_rows($result) > 0) {
        $products = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $product = new Product(
                $row['TechgadgetProductID'],
                $row['TechgadgetProductName'],
                $row['TechgadgetProductCode'],
                $row['TechgadgetDescription'],
                $row['TechgadgetCategoryID'],
                $row['TechgadgetListPrice'],
                $row['TechgadgetWholesalePrice'],
                $row['Techgadgetcolor']
            );
            array_push($products, $product);
        }
        $db->close();
        return $products;
    } else {
        $db->close();
        return NULL;
    }
}
static function findProduct($TechgadgetProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM TechGadgetsProducts WHERE TechgadgetProductID = $TechgadgetProductID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $product = new Product(
               $row['TechgadgetProductID'],
               $row['TechgadgetProductName'],
               $row['TechgadgetProductCode'],
               $row['TechgadgetDescription'],
               $row['TechgadgetCategoryID'],
               $row['TechgadgetListPrice'],
               $row['TechgadgetWholesalePrice'],
               $row['Techgadgetcolor'],
           );
           $db->close();
           return $product;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateProduct()
   {
       $db = getDB();
       $query = "UPDATE TechGadgetsProducts SET TechgadgetProductName= ?, " .
           "TechgadgetProductCode = ?, TechgadgetDescription = ?, TechgadgetCategoryID = ?,  TechgadgetListPrice = ?,TechgadgetWholesalePrice = ?, Techgadgetcolor = ? WHERE TechgadgetProductID = $this->TechgadgetProductID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssidds",
           $this->TechgadgetProductName,
           $this->TechgadgetProductCode,
           $this->TechgadgetDescription,
           $this->TechgadgetCategoryID,
           $this->TechgadgetListPrice,
           $this->TechgadgetWholesalePrice,
           $this->Techgadgetcolor,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeProduct()
   {
       $db = getDB();
       $query = "DELETE FROM TechGadgetsProducts WHERE TechgadgetProductID = $this->TechgadgetProductID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
   static function getproductsByCategory($TechgadgetCategoryID)
   {
       $db = getDB();
       $query = "SELECT * from TechGadgetsProducts where TechgadgetCategoryID = $TechgadgetCategoryID";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $product = new Product(
                $row['TechgadgetProductID'],
                $row['TechgadgetProductName'],
                $row['TechgadgetProductCode'],
                $row['TechgadgetDescription'],
                $row['TechgadgetCategoryID'],
                $row['TechgadgetListPrice'],
                $row['TechgadgetWholesalePrice'],
                $row['Techgadgetcolor'],
               );
               array_push($products, $product);
           }
           $db->close();
           return $products;
       } else {
           $db->close();
           return NULL;
       }
   }



}


