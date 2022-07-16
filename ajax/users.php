<?php
session_start();
require_once "../model/Users.php";
require_once "../views/index.php";
$users = new Users();

$lemail = isset($_POST["lEmail"])? clean($_POST["lEmail"]):"";
$lpassword = isset($_POST["lPass"])? clean($_POST["lPass"]):"";
$userid = isset($_POST["email"])? clean($_POST["email"]):"";
$username = isset($_POST["username"])? clean($_POST["username"]):"";
$nemail = isset($_POST["nEmail"])? clean($_POST["nEmail"]):"";
$npass = isset($_POST["nPass"])? clean($_POST["nPass"]):"";
$npassc = isset($_POST["nPassc"])? clean($_POST["nPassc"]):"";


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
        if (isset($_POST["loging"])) {
            $response=$users->login($lemail,$lpassword);
            if($response.is_array){
                $_SESSION['user_id'] = $response["id"];
                $_SESSION['user_name'] = $response["name"];
                printf("<script>window.location.replace(\"index.php\");</script>");
            }else {
            }
        }

        break;
}
?>