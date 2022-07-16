<?php
session_start();
require_once "../model/Users.php";
$users = new Users();

$email = isset($_POST["email"])? clean($_POST["email"]):"";
$password = isset($_POST["password"])? clean($_POST["password"]):"";
$userid = isset($_POST["userid"])? clean($_POST["userid"]):"";
$user = isset($_POST["user"])? clean($_POST["user"]):"";

switch ($_GET["op"]){
    case 'save/edit':
        if (empty($userid)){
            $response=$users->insertUser($user,$email,$password);
            echo $response ? "New account created" : "Error in register";
        } else {
            $response=$users->editUser($user,$email,$password,$userid);
            echo '<script> alert('.$response ? "User updated" : "Error updating".')</script>';
        }
    break;

    case 'login':
        $response=$users->login($email,$password);
        if($response.is_array){
            $_SESSION['user_id'] = $response["id"];
            $_SESSION['user_name'] = $response["name"];
            printf("<script>window.location.replace(\"index.php\");</script>");
        }else {
        }

        break;
}
?>