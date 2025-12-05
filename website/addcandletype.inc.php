<?php
/*Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu*/
require_once("candletype.php");
if (isset($_SESSION['login'])) {
    $CandleTypeID = filter_input(INPUT_POST, 'CandleTypeID', FILTER_VALIDATE_INT);
    if ($CandleTypeID === false || $CandleTypeID === null) {
        echo "<h2>Sorry, you must enter a valid Candle Type ID number</h2>";
    } 
    else if (CandleType::findCandleType($CandleTypeID)) {
        echo "<h2>Sorry, A candle type with the ID #$CandleTypeID already exists</h2>";
    }
    else {

        $CandleTypeCode = htmlspecialchars($_POST['CandleTypeCode']);
        $CandleTypeName = htmlspecialchars($_POST['CandleTypeName']);
        $ShelfNumber    = htmlspecialchars($_POST['ShelfNumber']);
        $candleType = new CandleType($CandleTypeID, $CandleTypeCode, $CandleTypeName, $ShelfNumber);
        $result = $candleType->saveCandleType();

        if ($result) {
            echo "<h2>New Candle Type #$CandleTypeID successfully added</h2>";
            echo "<h2>$candleType</h2>";
        } 
        else {
            echo "<h2>Sorry, there was a problem adding that Candle Type</h2>";
        }
    }
}
else {
    echo "<h2>Please log in first</h2>";
}
?>
