<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
ob_start();
include("candletype.php");
include("candle.php");
// Fetch values using the static methods from category.php and item.php
$totalCandleType = CandleType::getTotalCandleType();

$totalCandles = Candle::getTotalCandles();

$wholepricetotal = Candle::getTotalWholePrice();

$listpricetotal = Candle::getTotalListPrice();

$doc = new DOMDocument("1.0");

$inventoryElement = $doc->createElement("inventory");

$inventoryElement = $doc->appendChild($inventoryElement);

// Add <categories> XML element with value

$candletypesElement = $doc->createElement("candletypes", $totalCandleType);

$candletypesElement = $inventoryElement->appendChild($candletypesElement);

// Add <items> XML element with value

$candlesElement = $doc->createElement("candles", $totalCandles);

$candlesElement = $inventoryElement->appendChild($candlesElement);

// Add <listpricetotal> XML element with value
$wholepricetotalElement = $doc->createElement("wholepricetotal", $wholepricetotal);

$wholepricetotalElement = $inventoryElement->appendChild($wholepricetotalElement);

$listpricetotalElement = $doc->createElement("listpricetotal", $listpricetotal);

$listpricetotalElement = $inventoryElement->appendChild($listpricetotalElement);

$output = $doc->saveXML();

header("Content-type: application/xml");

ob_end_clean();

echo $output;

?>