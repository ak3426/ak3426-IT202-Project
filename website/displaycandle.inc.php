<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
if (!isset($_REQUEST['candleID' ]) or (!is_numeric($_REQUEST['candleID']) )) {
?>
    <h2>You did not select a valid candleID to view .< /h2>
    <a href="index.php?content=listcandles">List Candles</a>
    <?php
} else {
    $candleID = $_REQUEST['candleID'];
    $candle = Candle :: findCandle($candleID);
    if ($candle) {
    ?>
    <h2>Candle ID: <?php echo $candle->CandleID; ?></h2>
    <h2>Candle Code: <?php echo $candle->CandleCode; ?></h2>
    <h2>Candle Name: <?php echo $candle->CandleName; ?></h2>
    <h2>Candle Description: <?php echo $candle->CandleDescription; ?></h2>
    <h2>Candle Burn Time: <?php echo $candle->CandleBurnTime; ?></h2>
    <h2>Candle Color: <?php echo $candle->CandleColor; ?></h2>
    <h2>Candle Type ID: <?php echo $candle->CandleTypeID; ?></h2>
    <h2>Candle Whole Sale Price: <?php echo $candle->CandleWholesalePrice; ?></h2>
    <h2>Candle List Price: <?php echo $candle->CandleListPrice; ?></
    <br>
    <?php
    } else {
        echo "<h2>Sorry, candle not found .< /h2>\n";
    }
}
?>