<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
require_once("candletype.php");
$candleTypes = CandleType::getCandleTypes();
if ($candleTypes) {
?>
 <h2>Select Candle Type</h2>
  <form name="candleTypes" method="post">
   <select name="candleTypeID" size="20">
       <?php
       foreach($candleTypes as $candleType) {
         $candleTypeID= $candleType->CandleTypeID;
         $info = $candleTypeID . " - " . $candleType->CandleTypeCode . ", " . $candleType->CandleTypeName. " , " . $candleType->ShelfNumber;
         echo "<option value=\"$candleTypeID\">$info</option>\n";
      }
?>
</select>
  </form>
<?php
} else {
  echo "<h2>No candle type found.</h2>";
}
?>