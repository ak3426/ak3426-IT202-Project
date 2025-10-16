<?php
//Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu//
require_once("candle.php");
$candleID = $_POST['CandleID'];
$candle = Candle::findCandle($candleID);
$candle->CandleID = $_POST['CandleID'];
$candle->CandleCode = $_POST['CandleCode'];
$candle->CandleName = $_POST['CandleName'];
$candle->CandleDescription = $_POST['CandleDescription'];
$candle->CandleSize = $_POST['CandleSize'];
$candle->CandleBurnTime = $_POST['CandleBurnTime'];
$candle->CandleColor = $_POST['CandleColor'];
$candle->CandleTypeID = $_POST['CandleTypeID'];
$candle->CandleWholesalePrice = $_POST['CandleWholesalePrice'];
$candle->CandleListPrice = $_POST['CandleListPrice'];
$result = $candle->updateCandle();
if ($result) {
   echo "<h2>Candle ID $candleID updated</h2>\n";
} else {
   echo "<h2>Problem updating Candle ID $candleID</h2>\n";
}
?>
