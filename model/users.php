<?php
require "../config/conexion.php";
Class Users {

    public function __construct()
    {

    }

    public function insertUser($user,$email,$password){
        $sql = "INSERT INTO users (name, email, password)
        VALUES ('$user','$email','$password');";
        return ejecutarConsulta($sql);
    }

    public function editUser($user,$email,$password,$userid){
        $sql = "UPDATE users SET name='$user', email='$email', password='$password'
        WHERE id='$userid';";
        return ejecutarConsulta($sql);
    }
    public function Login($email,$password){
        $sql = "SELECT id, name, email, coins FROM users 
        WHERE email ='$email' AND password ='$password';";
        ejecutarConsulta($sql);
    }

};

?>