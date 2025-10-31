<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once("candletype.php");
if (isset($_SESSION['login'])) {
$CandleTypeID = $_POST['CandleTypeID'];
if ((trim($CandleTypeID) == '') or (!is_numeric($CandleTypeID))) {
  echo "<h2>Sorry, you must enter a valid Candle Type ID number</h2>\n";
} else {
  $CandleTypeCode = $_POST['CandleTypeCode'];
  $CandleTypeName = $_POST['CandleTypeName'];
  $ShelfNumber = $_POST['ShelfNumber'];
  $candleType = new CandleType($CandleTypeID, $CandleTypeCode, $CandleTypeName, $ShelfNumber);
  $result = $candleType->saveCandleType();
  if ($result) {
      echo "<h2>New Candle Type #$CandleTypeID successfully added</h2>\n";
      echo "<h2>$candleType</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that Candle Type</h2>\n";
  }
} } else {
   echo "<h2>Please log in first</h2>\n";
}
?>
