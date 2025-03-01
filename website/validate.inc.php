<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT firstName, lastName, pronouns FROM TechgadgetsManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$pronoun = "$pronouns";
$name = "$firstName $lastName";  
if ($fetched && isset($name)) {
   $_SESSION['login'] = true;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
   echo "<h2>Welcome to Techgadgets shop, $name ($pronoun)</h2>\n";
   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect for Techgadgets Shop</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

?>
