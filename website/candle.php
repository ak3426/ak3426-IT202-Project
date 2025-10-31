<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once('database.php');
class Candle
{
   public $CandleID;
   public $CandleCode;
   public $CandleName;
   public $CandleDescription;
   public $CandleSize;
   public $CandleBurnTime;
   public $CandleColor;
   public $CandleTypeID;
   public $CandleWholesalePrice;
   public $CandleListPrice;
   function __construct(
        $CandleID,
        $CandleCode,
        $CandleName,
        $CandleDescription,
        $CandleSize,
        $CandleBurnTime,
        $CandleColor,
        $CandleTypeID,
        $CandleWholesalePrice,
        $CandleListPrice

       ) {
       $this->CandleID = $CandleID;
       $this->CandleCode = $CandleCode;
       $this->CandleName = $CandleName;
       $this->CandleDescription = $CandleDescription;
       $this->CandleSize = $CandleSize;
       $this->CandleBurnTime = $CandleBurnTime;
       $this->CandleColor = $CandleColor;
       $this->CandleTypeID = $CandleTypeID;
       $this->CandleWholesalePrice = $CandleWholesalePrice;
       $this->CandleListPrice = $CandleListPrice;
   }
   function __toString()
   {
       $output = "<h2>Candle ID: $this->CandleID</h2>" .
       "<h2>Candle Code: $this->CandleCode</h2>\n" .
       "<h2>Candle Name: $this->CandleName</h2>\n" .
       "<h2>Candle Description: $this->CandleDescription</h2>\n" .
       "<h2>Candle Size: $this->CandleSize</h2>\n" .
       "<h2>Candle Burn Time: $this->CandleBurnTime</h2>\n".
       "<h2>Candle Color: $this->CandleColor</h2>\n".
       "<h2>Candle type ID: $this->CandleTypeID</h2>\n" .
       "<h2>Candle Whole Price Sale: $this->CandleWholesalePrice</h2>\n" .
       "<h2>Candle List Price: $this->CandleListPrice</h2>\n" ;

       return $output;
   }
   function saveCandle()
   {
       $db = getDB();
       $query = "INSERT INTO Candles (CandleID, CandleCode, CandleName, CandleDescription, CandleSize, CandleBurnTime, CandleColor, CandleTypeID, CandleWholesalePrice, CandleListPrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssssidd",
           $this->CandleID,    
           $this->CandleCode,   
           $this->CandleName,
           $this->CandleDescription,   
           $this->CandleSize,
           $this->CandleBurnTime,
           $this->CandleColor,
           $this->CandleTypeID,
           $this->CandleWholesalePrice,
           $this->CandleListPrice

       );
       $result = $stmt->execute();
       $db->close();
       return $result;
    }
   static function getCandles()
   {
       $db = getDB();
       $query = "SELECT * FROM Candles";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $candles = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $candle = new Candle(
                   $row['CandleID'],
                   $row['CandleCode'],
                   $row['CandleName'],
                   $row['CandleDescription'],
                   $row['CandleSize'],
                   $row['CandleBurnTime'],
                   $row['CandleColor'],
                   $row['CandleTypeID'],
                   $row['CandleWholesalePrice'],
                   $row['CandleListPrice']
               );
               array_push($candles, $candle);
           }
           $db->close();
           return $candles;
       } else {
           $db->close();
           return NULL;
       }
   }
  static function findCandle($candleID)
   {
       $db = getDB();
       $query = "SELECT * FROM Candles WHERE CandleID = $candleID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $candle = new Candle(
              $row['CandleID'],
              $row['CandleCode'],
              $row['CandleName'],
              $row['CandleDescription'],
              $row['CandleSize'],
              $row['CandleBurnTime'],
              $row['CandleColor'],
              $row['CandleTypeID'],
              $row['CandleWholesalePrice'],
              $row['CandleListPrice']
 
           );
           $db->close();
           return $candle;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCandle()
   {
       $db = getDB();
       $query = "UPDATE Candles SET CandleID= ?, " .
           "CandleCode= ?, CandleName= ?, CandleDescription=?, CandleSize=?, CandleBurnTime=?, CandleColor=?, CandleTypeID=?, CandleWholesalePrice=?, CandleListPrice=? WHERE CandleID = $this->CandleID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssssidd",
           $this->CandleID,
           $this->CandleCode,
           $this->CandleName,
           $this->CandleDescription,
           $this->CandleSize,
           $this->CandleBurnTime,
           $this->CandleColor,
           $this->CandleTypeID,
           $this->CandleWholesalePrice,
           $this->CandleListPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
function removeCandle()
   {
       $db = getDB();
       $query = "DELETE FROM Candles WHERE CandleID = $this->CandleID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

   static function getCandlesByCandleTypes($candleTypeID)
   {
       $db = getDB();
       $query = "SELECT * from Candles where candleTypeID = $candleTypeID";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $candles = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $candle = new Candle(
                   $row['CandleID'],
                   $row['CandleCode'],
                   $row['CandleName'],
                   $row['CandleDescription'],
                   $row['CandleSize'],
                   $row['CandleBurnTime'],
                   $row['CandleColor'],
                   $row['CandleTypeID'],
                   $row['CandleWholesalePrice'],
                   $row['CandleListPrice']
               );
               array_push($candles, $candle);
           }
           $db->close();
           return $candles;
       } else {
           $db->close();
           return NULL;
       }
   }
}
?>