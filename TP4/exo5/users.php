<?php
 require_once("init_pdo.php");
 function get_users($db){
 $sql = "SELECT * FROM USERS";
 $exe = $db->query($sql);
 $res = $exe->fetchAll(PDO::FETCH_OBJ);
 return $res;
 }
 function create_users($db, $name, $email){
    $sql = "INSERT INTO `users`(`name`, `email`) VALUES ('".$name."','".$email."')";
    $exe = $db->query($sql);
    $res = $exe->fetchAll(PDO::FETCH_OBJ);
    return $res;
    }
 function setHeaders() {
 // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
 header("Access-Control-Allow-Origin: *");
 header('Content-type: application/json; charset=utf-8');
 }
 // ==============
 // Responses
 // ==============
 switch($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        $result = get_users($pdo);
        setHeaders();
        exit(json_encode(value: $result));
    case 'POST':
        setHeaders();
        $result = create_users($pdo, $_POST['name'],$_POST['email']);
        http_response_code(201);
        exit(json_encode(value: $result));
    }
 ?>