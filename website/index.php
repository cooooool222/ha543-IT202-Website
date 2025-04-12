<?php
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
session_start();
include("config.php");
include("TechGadgetscategory.php");
include("TechGadgetsproduct.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Techgadgets Shop</title>
    <link rel="stylesheet" type="text/css" href="Techgadget_styles.css">
    <link rel="icon" type="image/png" href="images/Techgadgeticon.png">
</head>
<body>
    <header> 
        <?php include("header.inc.php"); ?>
</header>
   <section style= "height: 425px;">
     <nav style= "float: left; height: 100%; min-width:175px; width:auto;">
        <?php include("nav.inc.php"); ?>
</nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
