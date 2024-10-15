<?php
 if(isset($_GET['id'])) {
    $id=$_GET['id'];
echo '<link rel="stylesheet" type="text/css" href="style.css" />';
 require_once('config.php');
 require_once('configPDO.php');
 echo "<a href = 'users.php'>Accueil</a>";     
 if(isset($_GET['name']) && isset($_GET['mail'])){
    $name=$_GET['name'];
    $mail=$_GET['mail'];
    $request = $pdo->query("UPDATE `users` SET `name`='".$name."',`email`='".$mail."' WHERE id=".$id);
    } 
 $request = $pdo->query("SELECT * FROM `users` WHERE id = ".$id);
 $data = $request->fetch(PDO::FETCH_OBJ);
 echo '</form>
              <form id="style_form" action="change.php" name="_method" value="PUT">
              <label for="id">Name&nbsp; (actuel : '.$data->name.'):</label>
              <input type="text" name="name" value="'.$data->name.'">
              <label for="mail">E-mail&nbsp; (actuel : '.$data->email.'):</label>
              <input type="email" id="mail" name="mail" value="'.$data->email.'"/>
              <input type="text" id="id" name="id" value="'.$id.'" style="display:none;" />
              <input type="submit" value="Modifier"/>
              </form>';

 }
?>