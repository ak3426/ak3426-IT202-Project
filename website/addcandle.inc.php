<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once('candle.php');
if (isset($_SESSION['login'])) {
$candleID = $_POST['CandleID'];
if ((trim($candleID) == '') or (!is_numeric($candleID))) {
   echo "<h2>Sorry, you must enter a valid candle ID number</h2>\n";
} else {
   $candleCode = $_POST['CandleCode'];
   $candleName = $_POST['CandleName'];
   $candleDescription = $_POST['CandleDescription'];
   $candleSize = $_POST['CandleSize'];
   $candleBurnTime = $_POST['CandleBurnTime'];
   $candleColor = $_POST['CandleColor'];
   $candleTypeID = $_POST['CandleTypeID'];
   $candleWholesalePrice = $_POST['CandleWholesalePrice'];
   $candleListPrice = $_POST['CandleListPrice'];
   $candle = new Candle(
       $candleID,
       $candleCode,
       $candleName,
       $candleDescription,
       $candleSize,
       $candleBurnTime,
       $candleColor,
       $candleTypeID,
       $candleWholesalePrice,
       $candleListPrice
   );
   $result = $candle->saveCandle();
   if ($result)
       echo "<h2>New Candle #$candleID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that candle</h2>\n";
} } else {
   echo "<h2>Please login first</h2>\n";
}
?>

