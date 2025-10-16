<?php
//Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu//
error_log("\$_POST " . print_r($_POST, true));
require_once("candletype.php");
$candleTypeID = $_POST['CandleTypeID'];
$candleType = CandleType::findCandleType($candleTypeID);
$result = $candleType->removeCandleType();
if ($result)
   echo "<h2>Candle Type $candleTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing CandleT ype $candletypeID</h2>\n";
?>
