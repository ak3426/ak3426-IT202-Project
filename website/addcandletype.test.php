<?php
//Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu//
require_once("candletype.php");
$CandleTypeID = $_POST['CandleTypeID'];
if ((trim($CandleTypeID) == '') or (!is_numeric($CandleTypeID))) {
  echo "<h2>Sorry, you must enter a valid Candle type ID number</h2>\n";
} else {
  $CandleTypeCode = $_POST['CandleTypeCode'];
  $CandleTypeName = $_POST['CandleTypeName'];
  $ShelfNumber = $_POST['ShelfNumber'];
  $candleType = new CandleType($CandleTypeID, $CandleTypeCode, $CandleTypeName, $ShelfNumber);
  $result = $candleType->saveCandleType();
  if ($result) {
      echo "<h2>New Category #$CandleTypeID successfully added</h2>\n";
      echo "<h2>$candleType</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
