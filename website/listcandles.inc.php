<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
require_once("candle.php");
$candles = Candle::getCandles();
if ($candles) {
    ?>
 <h2>Select Candle</h2>
  <form name="candle" method="post">
   <select name="candleID" size="20">
       <?php
       foreach ($candles as $candle) {
        $candleID = $candle->CandleID;
        $candleCode = $candle->CandleCode;
        $candleName = $candle->CandleName;
        $candleDescription = $candle->CandleDescription;
        $candleSize = $candle->CandleSize;
        $candleBurnTime = $candle->CandleBurnTime;
        $candleColor = $candle ->CandleColor;
        $candleTypeID = $candle ->CandleTypeID;
        $candleWholesalePrice = $candle->CandleWholesalePrice;
        $candleListPrice = $candle->CandleListPrice;


        $option = $candleID . " - " . $candleCode . " - " . $candleName . " - " .$candleDescription  . $candleSize . " - " . $candleBurnTime . " - " . $candleColor . " - " . $candleTypeID ." - " .  " $ " . $candleWholesalePrice. " - ". " $ " .$candleListPrice;
        echo "<option value=\"$candleID\">$option</option>\n";
    }
    ?>
   </select>
 </form>
<?php
} else {
    echo "No candles found.";
}
?>