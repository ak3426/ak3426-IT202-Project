<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once("candletype.php");
$candleTypeID = $_POST['CandleTypeID'];
$candleType = CandleType::findCandleType($candleTypeID);
$candleType->CandleTypeID = $_POST['CandleTypeID'];
$candleType->CandleTypeCode = $_POST['CandleTypeCode'];
$candleType->CandleTypeName = $_POST['CandleTypeName'];
$candleType->ShelfNumber = $_POST['ShelfNumber'];
$result = $candleType->updateCandletype();
if ($result) {
   echo "<h2>Candle $candleTypeID updated</h2>\n";
} else {
   echo "<h2>Problem updating Candle Type $candleTypeID</h2>\n";
}
?>
