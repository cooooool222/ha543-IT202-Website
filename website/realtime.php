<?php
ob_start();
include("TechGadgetscategory.php");
include("TechGadgetsproduct.php");
$totalCategories = Category::getTotalCategories();
$totalProducts = Product::getTotalProducts();
$wholesalepricetotal = Product::getTotalWholeSalePrice();
$listpricetotal = Product::getTotalListPrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("Techgadgetcategories",$totalCategories);
$categories = $inventory->appendChild($categories);
$products = $doc->createElement("Techgadgetproducts", $totalProducts);
$products = $inventory->appendChild($products);
$listpricetotals = $doc->createElement("TechgadgetListPrice", $listpricetotal);
$listpricetotals =$inventory->appendChild($listpricetotals);
$wholesalepricetotals = $doc->createElement("Techgadgetwholesaleprice", $wholesalepricetotal);
$wholesalepricetotals = $inventory->appendChild($wholesalepricetotals);
$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>
