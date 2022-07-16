<?php
require "../config/conexion.php";
require_once "../model/Users.php";
session_start();
//require_once "../views/index.php";
$users = new Users();

//$lemail = isset($_POST["lEmail"])? clean($_POST["lEmail"]):"";
//$lpassword = isset($_POST["lPass"])? clean($_POST["lPass"]):"";
//$userid = isset($_POST["email"])? clean($_POST["email"]):"";
//$username = isset($_POST["username"])? clean($_POST["username"]):"";
//$nemail = isset($_POST["nEmail"])? clean($_POST["nEmail"]):"";
//$npass = isset($_POST["nPass"])? clean($_POST["nPass"]):"";
//$npassc = isset($_POST["nPassc"])? clean($_POST["nPassc"]):"";
//$opcion=isset($_POST["op"])?$_POST["op"]:$_REQUEST["op"];



switch ($_GET['op']){
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
        $email=$_POST['lEmail'];
		$password=$_POST['lPass'];
		//$rspta=$users->Login($email,$password);
        $sql = "SELECT id, name, email, coins FROM users 
        WHERE email ='$email' AND password ='$password';";
        $rspta=ejecutarConsulta($sql);
        //echo $email;
        //echo $password;
        //var_dump($rspta);
        //echo String($rspta);
        //printf("<script>console.log(".$rspta.")</script>");

        if ($rspta->num_rows > 0){
            //$row = mysqli_fetch_assoc($rspta);
            while ($row = $rspta->fetch_object()){
	            $user_arr[] = $row;
	        }
            //Declaramos las variables de sesión
            $_SESSION["id_user"]=$user_arr[0]->id;
            $_SESSION["user_name"]=$user_arr[0]->name;
            $_SESSION["user_coins"]=$user_arr[0]->coins;
            $_SESSION['user_emailemail']=$user_arr[0]->email;
            $json = json_encode(array('data'=>$user_arr));
            echo $json;
        } else {
            printf('<script>alert("Error")</script>');
        }
		//while ($row = $rspta->fetch_object()){
	    //    $user_arr[] = $row;
	    //}


		 //if ($user_arr)
	     //{

	     //}
	     //var_dump( $_SESSION["nombre"]);

        break;
    case 'logout':
        //if (isset($_POST["logout"])){
        //Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        //header("Location: ../index.php");
         //};
    break;
}
?>