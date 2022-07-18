<?php
session_start();
require_once "../model/Bet.php";
$bet = new Bet();


$support=isset($_POST["support"])? limpiarCadena($_POST["support"]):"";
$amount=isset($_POST["amount"])? limpiarCadena($_POST["amount"]):"";
$betid=isset($_POST["betid"])? limpiarCadena($_POST["betid"]):"";
$redname=isset($_POST["redname"])? limpiarCadena($_POST["redname"]):"";
$bluename=isset($_POST["bluename"])? limpiarCadena($_POST["bluename"]):"";
$redwins=isset($_POST["redwins"])? limpiarCadena($_POST["redwins"]):"";
$bluewins=isset($_POST["bluewins"])? limpiarCadena($_POST["bluewins"]):"";
$available=isset($_POST["available"])? limpiarCadena($_POST["available"]):"";
$game=isset($_POST["game"])? limpiarCadena($_POST["game"]):"";

switch($_GET["op"]){
    case 'showbet':
        $response=$bet->showBet($betid);
        echo json_encode($response);
        break;
    
    case 'betTo':
        $pbet = $bet->betFor($support, $amount, $betid);
        break;
    case 'edit&createbet':

        if(empty($betid)){
            $response=addBet($redwins, $bluewins, $redname, $bluename, $avaiable, $game);
            $output = $response ? "Bet registered" : "The registration couldn't finish";
        } else {
            $response=$bet->editBet($betid, $redwins, $bluewins, $redname, $bluename, $available, $game);
            $output = $response ? "Bet edited" : "The edition couldn't finish";
        }
        echo $output;
        break;
    case 'listbets':
        $rspta=$bet->listBets();
         //Vamos a declarar un array
         $data= Array();

         while ($reg=$rspta->fetch_object()){
             $data[]=array(
                 "0"=>'<button class="btn btn-warning" onclick="showbets('.$reg->id.')"><i class="fas fa-pencil-alt"></i>'.$reg->id.'</button>',
                 "1"=>$reg->redwins,
                 "2"=>$reg->bluewins,
                 "3"=>$reg->redname,
                "4"=>$reg->bluename,
                "5"=>$reg->available,
                "6"=>$reg->game
                 );
         }
         $results = array(
             "sEcho"=>1, //Información para el datatables
             "iTotalRecords"=>count($data), //enviamos el total registros al datatable
             "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
             "aaData"=>$data);
         echo json_encode($results);

    break;
}
?>