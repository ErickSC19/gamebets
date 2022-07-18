<?php
require "../config/conexion.php";
Class Bet {
    public function __construct(){

    }
    public function addBet($redwins, $bluewins, $redname, $bluename, $avaiable, $game){
        $sql = "INSERT INTO bet (redwins, bluewins, redname, bluename, available, game)
        VALUES ($redwins,$bluewins,'$redname','$bluename', $available,'$game');";
        ejecutarConsulta($sql);
    }
    public function betFor($teamwins, $amount, $betid){
        $sqlc = "SELECT $teamwins FROM bet 
        WHERE id='$betid';";
        $amount = $amount + ejecutarConsulta($sqlc);
        $sql = "UPDATE bet SET $team='$amount'
        WHERE id='$betid';";
        ejecutarConsulta($sql);
    }
    public function editBet($betid, $redwins, $bluewins, $redname, $bluename, $available, $game){
        $sql="UPDATE bet SET redwins=$redwins, bluewins=$bluewins, redname='$redname', bluename='$bluename', available=$avaiable, game='$game' WHERE id='$betid'";
        return ejecutarConsulta($sql);

    }
    public function endBet($betid){
        $sql = "UPDATE bet SET available='0' WHERE id='$betid';";
    }

    public function listBets(){
        $sql = "SELECT * FROM bet;";
        return ejecutarConsulta($sql);
    }
    public function showBet($betid){
        $sql = "SELECT * FROM bet WHERE id='$betid';";
        return ejecutarConsultaSimpleFila($sql);
    }
}
?>