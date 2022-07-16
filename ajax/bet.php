<?php
session_start();
require_once "../model/Bet.php";
$bet = new Bet();


$support=isset($_POST["support"])? clean($_POST["support"]):"";
$amount=isset($_POST["amount"])? clean($_POST["amount"]):"";
$betid=isset($_POST["betid"])? clean($_POST["betid"]):"";

switch($_GET["op"]){
    case 'showbet':
        $response=$bet->showBet($betid);
        echo json_encode($response);
        break;
    
    case 'betto':
        $pbet = $bet->betFor($support, $amount, $betid);
        break;
    case 'edit&createbet':

        if(empty($betid)){
            $response=addBet($redname, $bluename, $game);
            echo $response ? "Bet registered" : "The registration couldn't finish";
        } else {
            $response=$bet->editBet($betid, $redwins, $bluewins, $redname, $bluename, $available, $game);
            echo $response ? "Bet edited" : "The edition couldn't finish";
        }
        break;
    case 'listbets':
        $rspta=$bet->listBets();
         //Vamos a declarar un array
         $data= Array();

         while ($reg=$rspta->fetch_object()){
             $data[]=array(
                 "0"=>'<button class="btn btn-warning" onclick="mostrar1('.$reg->id.')"><i class="fas fa-pencil-alt"></i></button>',
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