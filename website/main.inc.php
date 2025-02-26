<?php 
/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202
*/
if(!isset($_SESSION['login'])) {
?>
    <h2> Please log in to the TechGadgets Shop Website </h2><br>
    <form name ="login" action="index.php" method="post">
        <label>Email:</label>
        <input type="text" name="emailAddress" size="20">
        <br>
        <br>
        <label> Password: </label> 
        <input type="text" name ="password" size="20">
        <br>
        <br> 
        <input type="submit" value="Login">
        <input type="hidden" name="content" value="validate">
     </form> 

<?php
} else{
   echo "<h2>Welcome to TechGadgets Shop, {$_SESSION['login']} ({$_SESSION['pronouns']})</h2>";
?>
   <br><br>
   <p>This program tracks category and item inventory</p>
   <p>Please use the links in the navigation window</p>
   <p>Please DO NOT use the browser navigation buttons!</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>

