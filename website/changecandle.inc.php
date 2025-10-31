<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
 require_once("candle.php");
if (isset($_SESSION['login'])) {
   $candleID = $_POST['candleID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Candle") {
      $candleID = $_POST['candleID'];
      $candle = Candle::findCandle($candleID);
      $candle->CandleID = $_POST['candleID'];
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
   } else {
      echo "<h2>Update Canceled for item $candleID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
