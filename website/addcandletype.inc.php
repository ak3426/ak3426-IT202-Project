<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once("candletype.php");
if (isset($_SESSION['login'])) {
$CandleTypeID = filter_input(INPUT_POST,'CandleTypeID', FILTER_VALIDATE_INT);
if ((trim($CandleTypeID) == '') or (!is_int($CandleTypeID))) {
  echo "<h2>Sorry, you must enter a valid Candle Type ID number</h2>\n";
} else if (CandleType ::findCandleType($CandleTypeID)) {
  echo "<h2>Sorry, A candle type with the ID #$CandleTypeID already exists</h2>\n";
}
else {
  $CandleTypeCode =htmlspecialchars($_POST['CandleTypeCode']);
  $CandleTypeName = htmlspecialchars($_POST['CandleTypeName']);
  $ShelfNumber = htmlspecialchars($_POST['ShelfNumber']);
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
