<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once('candle.php');
if (isset($_SESSION['login'])) {
$candleID = filter_input(INPUT_POST,'CandleID', FILTER_VALIDATE_INT);
if ((trim($candleID) == '') or (!is_int($candleID))) {
   echo "<h2>Sorry, you must enter a valid candle ID number</h2>\n";
} else {
   $candleCode = htmlspecialchars($_POST['CandleCode']);
   $candleName = htmlspecialchars($_POST['CandleName']);
   $candleDescription = htmlspecialchars($_POST['CandleDescription']);
   $candleSize = htmlspecialchars($_POST['CandleSize']);
   $candleBurnTime = htmlspecialchars($_POST['CandleBurnTime']);
   $candleColor =htmlspecialchars($_POST['CandleColor']);
   $candleTypeID = htmlspecialchars($_POST['CandleTypeID']);
   $candleWholesalePrice =htmlspecialchars($_POST['CandleWholesalePrice']);
   $candleListPrice = htmlspecialchars($_POST['CandleListPrice']);
   $candleTypeID = filter_input(INPUT_POST, 'CandleTypeID', FILTER_VALIDATE_INT);
   $candleWholesalePrice = filter_input(INPUT_POST, 'CandleWholesalePrice', FILTER_VALIDATE_FLOAT);
   $candleListPrice = filter_input(INPUT_POST, 'CandleListPrice', FILTER_VALIDATE_FLOAT);
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
