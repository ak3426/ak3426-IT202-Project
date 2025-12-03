<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
require_once("candletype.php");
if (isset($_SESSION['login'])) {
   $candleTypeID = $_POST['CandleTypeID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Candle Type") {
      $candleType = CandleType::findCandleType($candleTypeID);
      $candleType->CandleTypeID = $_POST['CandleTypeID'];
      $candleType->CandleTypeCode = $_POST['CandleTypeCode'];
      $candleType->CandleTypeName = $_POST['CandleTypeName'];
      $candleType->ShelfNumber = $_POST['ShelfNumber'];
      $result = $candleType->updateCandleType();
      if ($result) {
         echo "<h2>Candle $candleTypeID updated</h2>\n";
      } else {
         echo "<h2>Problem updating Candle Type $candleTypeID</h2>\n";
      }
   } else {
      echo "<h2>Updated Canceled for candle type $candleTypeID</h2>\n ";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
