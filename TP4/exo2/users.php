<?php
echo '<link rel="stylesheet" type="text/css" href="style.css" />';
 require_once('config.php');
 $connectionString = "mysql:host=". _MYSQL_HOST;
 if(defined('_MYSQL_PORT'))
 $connectionString .= ";port=". _MYSQL_PORT;
 $connectionString .= ";dbname=" . _MYSQL_DBNAME;
 $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
 $pdo = NULL;
 try {
 $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (PDOException $erreur) {
 echo 'Erreur : '.$erreur->getMessage();
 }
 
 //$request = $pdo->prepare("select * from users");
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
   echo '<tr><td>'.$data->id.'</td><td> '.$data->name.'</td><td> '.$data->email.'</td></tr>';
   $data = $request->fetch(PDO::FETCH_OBJ);
 }
 echo "</tbody>
 </table><hr align=left width=230px/>";
 // add your code here
 // retrieve data from database using fetch(PDO::FETCH_OBJ) and
 // display them in HTML array
 /*** close the database connection ***/
 //$pdo = null;
 ?>