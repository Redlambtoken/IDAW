<?php
 if(isset($_GET['id'])) {
    $id=$_GET['id'];
echo '<link rel="stylesheet" type="text/css" href="style.css" />';
 require_once('config.php');
 require_once('configPDO.php');
 echo "<a href = 'users.php'>Accueil</a>";      
 $request = $pdo->query("DELETE FROM `users` WHERE id = ".$id);
 }
?>