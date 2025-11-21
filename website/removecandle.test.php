<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
error_log("\$_POST " . print_r($_POST, true));
require_once("candle.php");
$candleID = $_POST['CandleID'];
$candle = Candle::findCandle($candleID);
$result = $candle->removeCandle();
if ($result)
   echo "<h2>Candle ID $candleID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing CandleT ype $candleID</h2>\n";
?>
