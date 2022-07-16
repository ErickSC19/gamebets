<?php

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
        $user_pass=$_POST['lEmail'];
		$user_key=$_POST['lPass'];
		$rspta=$users->login($user_pass,$user_key);

		while ($row = $rspta->fetch_object()){
	        $user_arr[] = $row;
	    }


		 if ($user_arr)
	     {
	     	session_start();
	         //Declaramos las variables de sesión
	         $_SESSION["id_user"]=$user_arr[0]->id;
	         $_SESSION["user_name"]=$user_arr[0]->name;
	         $_SESSION["user_coins"]=$user_arr[0]->coins;
	         $_SESSION['user_emailemail']=$user_arr[0]->email;
	     }
	     //var_dump( $_SESSION["nombre"]);
	    echo json_encode(array('data'=>$user_arr));

        break;
}
?>