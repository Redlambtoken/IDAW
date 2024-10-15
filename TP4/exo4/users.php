<?php
echo '<link rel="stylesheet" type="text/css" href="style.css" />';
 require_once('config.php');
 require_once('configPDO.php');

 $request = $pdo->query("SELECT * from users");
 $data = $request->fetch(PDO::FETCH_OBJ);
 echo "<h1>Users</h1>";
 echo "<hr align=left width=230px/><table>
            <tr>
               <th scope='col'>Id</th>
               <th scope='col'>Nom</th>
               <th scope='col'>email</th>
            </tr>";
 while(!empty($data)){  
   echo '<tr><td>'.$data->id.'</td><td> '.$data->name.'</td><td> '.$data->email.'</td>
            <form id="style_form" action="delete.php" method="GET">
              <input type="text" style="display:none" name="id" value = "'.$data->id.'">
              <td><input type="submit" value="Supprimer"/></td>
              </form>
              <form id="style_form" action="change.php" method="GET">
              <input type="text" style="display:none" name="id" value = "'.$data->id.'">
              <td><input type="submit" value="Modifier"/></td>
              </form>
        </tr>';
   $data = $request->fetch(PDO::FETCH_OBJ);
 }
 echo "</tbody>
 </table><hr align=left width=230px/>";
 echo '<form action="create.php" method="post">
      <label for="name">Nom&nbsp;:</label>
      <input type="text" id="name" name="name" />
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="mail" />
      <div class="button">
  <button type="submit">Envoyer le message</button>
</div>
</form>';
 /*** close the database connection ***/
 $pdo = null;
 ?>