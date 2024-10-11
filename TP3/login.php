<?php session_start(); ?>
<?php
if(isset($_GET['login'])) {
   session_unset();
   session_destroy();
   }
 
?>

<form id="login_form" action="connected.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
    <tr>
        <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
    </tr>
    </table>
 </form>

 <form id="style_form" action="/IDAW/sitepro/v3/index.php" method="G    ET">
   <select name="css">
      <option value="style1">style1</option>
      <option value="style2">style2</option>
   </select>
   <input type="submit" value="Appliquer" />
 </form>