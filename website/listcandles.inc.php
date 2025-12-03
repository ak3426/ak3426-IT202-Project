<script language="javascript">
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
   function listbox_dblclick() {
       document.candles.displaycandle.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this candle?");
       }
       if (userConfirmed) {
           if (target == 0) candle.action = "index.php?content=displaycandle";
           if (target == 1) candle.action = "index.php?content=removecandle";
           if (target == 2) candle.action = "index.php?content=updatecandle";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<?php
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
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycandle" value="View Candle">
   <input type="submit" onClick="button_click(1)" name="deletecandle" value="Delete Candle">
   <input type="submit" onClick="button_click(2)" name="updatecandle" value="Update Candle">
 </form>
<?php
} else {
    echo "No candles found.";
}
?>