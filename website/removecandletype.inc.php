<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
error_log("\$_POST " . print_r($_POST, true));
require_once("candletype.php");
if(isset($_SESSION['login'])){
$candleTypeID = $_POST['candleTypeID'];
$candleType = CandleType::findCandleType($candleTypeID);
$result = $candleType->removeCandleType();
if ($result)
   echo "<h2>Candle Type $candleTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing Candle Type $candleTypeID</h2>\n";
} else 
   echo "<h2>Please login first</h2>\n";
?>
