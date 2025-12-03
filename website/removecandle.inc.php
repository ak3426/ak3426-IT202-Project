<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
error_log("\$_POST " . print_r($_POST, true));
require_once("candle.php");
if(isset($_SESSION['login'])){
$candleID = $_POST['candleID'];
$candle = Candle::findCandle($candleID);
$result = $candle->removeCandle();
if ($result)
   echo "<h2>Candle ID $candleID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing Candle  $candleID</h2>\n";
} else 
   echo "<h2>Please login first</h2>\n" ;
?>
