<?php
//Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu//
require_once("candletype.php");
$candleTypes = CandleType::getCandleTypes();
foreach($candleTypes as $candleType) {
   $candleTypeID= $candleType->CandleTypeID;
   $info = $candleTypeID . " - " . $candleType->CandleTypeCode . ", " . $candleType->CandleTypeName. " , " . $candleType->ShelfNumber;
   echo "$info<br>";
}
?>
