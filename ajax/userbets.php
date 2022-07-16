<?php
require_once "../model/Bet.php";
$bet = new Bet();


$support=isset($_POST["support"])? clean($_POST["support"]):"";
$amount=isset($_POST["amount"])? clean($_POST["amount"]):"";

switch($_GET["op"]){

}
?>