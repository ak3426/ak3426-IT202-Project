<?php
//Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu//
require_once("candle.php");

$candles = Candle::getCandles();

if ($candles) {
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


        $option = $candleID . " - " . $candleCode . " - " . $candleName . " - " .$candleDescription . " - " . $candleSize . " - " . $candleBurnTime . " - " . $candleColor . " - " . $candleTypeID .  " $ " . $candleWholesalePrice . " $ " .$candleListPrice;
        echo "$option<br>";
    }
} else {
    echo "No candles found.";
}
?>
