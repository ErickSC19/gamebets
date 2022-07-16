<?php
require "../config/conexion.php";
require_once "../model/Users.php";
//require_once "../views/index.php";
$users = new Users();

//$lemail = isset($_POST["lEmail"])? clean($_POST["lEmail"]):"";
//$lpassword = isset($_POST["lPass"])? clean($_POST["lPass"]):"";
//$userid = isset($_POST["email"])? clean($_POST["email"]):"";
//$username = isset($_POST["username"])? clean($_POST["username"]):"";
//$nemail = isset($_POST["nEmail"])? clean($_POST["nEmail"]):"";
//$npass = isset($_POST["nPass"])? clean($_POST["nPass"]):"";
//$npassc = isset($_POST["nPassc"])? clean($_POST["nPassc"]):"";
$opcion=isset($_POST["op"])?$_POST["op"]:$_REQUEST["op"];



switch ($opcion){
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
        echo $email;
        echo $password;
        var_dump($rspta);
        echo $rspta;
        //printf("<script>console.log(".$rspta.")</script>");

        if ($rspta->num_rows > 0){
            $user_arr = mysqli_fetch_assoc($rspta);
            session_start();
            //Declaramos las variables de sesión
            $_SESSION["id_user"]=$user_arr['id'];
            $_SESSION["user_name"]=$user_arr['name'];
            $_SESSION["user_coins"]=$user_arr['coins'];
            $_SESSION['user_emailemail']=$user_arr['email'];
        }
		//while ($row = $rspta->fetch_object()){
	    //    $user_arr[] = $row;
	    //}


		 //if ($user_arr)
	     //{

	     //}
	     //var_dump( $_SESSION["nombre"]);
	    //echo json_encode(array('data'=>$user_arr));

        break;
    case 'logout':
            		//Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.php");

    break;
}
?>