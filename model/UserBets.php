<?php
require "../config/conexion.php";
require "bet.php";
Class UserBets {
    public function __construct(){

    }
    public function newUserBet($userId, $betid, $amount, $team){
        $sql = "INSERT INTO userbets (userid, betid, supports, amount)
        VALUES ('$userId', '$betid', '$team', '$amount');";
        ejecutarConsulta($sql);
    }
    public function userBetResult($winner, $userid, $betid){
        $sql = "SELECT redwins, bluewins, redname, bluename FROM bet WHERE id='$betid'";
        $total = ejecutarConsulta($sql);
        $row = mysqli_fetch_assoc($total);
        $total = $row['redwins'] + $row['bluewins'];
        $sql2 = "SELECT COUNT(userid) FROM userbets WHERE betid='$betid'";

        if($winner==$row['redname']){
            $sql3 = "SELECT COUNT(userid) FROM userbets WHERE betid='$betid' AND supports='$winner'";
            $res = ejecutarConsulta($sql3);
            $indamount=$row['bluewins'] / $sql3;
            $sql4 = "UPDATE userbets SET won='$indamount' WHERE userid='$userid' AND supports='$winner'";
            return ejecutarConsulta($sql4);
        } else {
            $sql3 = "SELECT COUNT(userid) FROM userbets WHERE betid='$betid' AND supports='$winner'";
            $res = ejecutarConsulta($sql3);
            $indamount=$row['redwins'] / $sql3;
            $sql4 = "UPDATE userbets SET won='$indamount' WHERE userid='$userid' AND supports='$winner'";
            return ejecutarConsulta($sql4);
        }

    }
    public function deleteBet($betid){
        $sql = "DELETE FROM `bet` WHERE `bet`.`id` = $betid";
    }
}
?>