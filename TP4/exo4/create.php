<?php 
if(isset($_POST['name']) && isset($_POST['mail'])) {
 $user_name=$_POST['name'];
 $user_email=$_POST['mail'];

echo '<link rel="stylesheet" type="text/css" href="style.css" />';
 require_once('config.php');
 require_once('configPDO.php');
 echo "<a href = 'users.php'>Accueil</a>";    
 $request = $pdo->query("INSERT INTO  users (`name`, `email`) VALUES ('".$user_name."','".$user_email."')");
}
?>