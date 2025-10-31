<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
require_once('database.php');
class CandleType
{
   public $CandleTypeID;
   public $CandleTypeCode;
   public $CandleTypeName;
   public $ShelfNumber;
   
   function __construct($CandleTypeID, $CandleTypeCode, $CandleTypeName, $ShelfNumber)
   {
       $this->CandleTypeID = $CandleTypeID;
       $this->CandleTypeCode = $CandleTypeCode;
       $this->CandleTypeName = $CandleTypeName;
       $this->ShelfNumber = $ShelfNumber;
    }
   function __toString()
   {
       $output = "<h2>Candle Type Number: $this->CandleTypeID</h2>\n" .
           "<h2>$this->CandleTypeCode, $this->CandleTypeName, $this->ShelfNumber</h2>\n";
       return $output;
   }
 function saveCandleType()
   {
       $db = getDB();
       $query = "INSERT INTO CandleTypes (CandleTypeID, CandleTypeCode, CandleTypeName, ShelfNumber)  VALUES (?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isss",
           $this->CandleTypeID,
           $this->CandleTypeCode,
           $this->CandleTypeName,
           $this->ShelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
 static function getCandleTypes()
   {
       $db = getDB();
       $query = "SELECT * FROM CandleTypes";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $candleTypes = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $candleType = new CandleType(
                   $row['CandleTypeID'],
                   $row['CandleTypeCode'],
                   $row['CandleTypeName'],
                   $row['ShelfNumber']
               );
               array_push($candleTypes, $candleType);
               unset($candleType);
           }
           $db->close();
           return $candleTypes;
       } else {
           $db->close();
           return NULL;
       }
   }
 static function findCandleType($CandleTypeID)
   {
       $db = getDB();
       $query = " SELECT * FROM CandleTypes WHERE CandleTypeID = $CandleTypeID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $candleType = new CandleType(
               $row['CandleTypeID'],
               $row['CandleTypeCode'],
               $row['CandleTypeName'],
               $row['ShelfNumber']
           );
           $db->close();
           return $candleType;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCandleType()
   {
       $db = getDB();
       $query = "UPDATE CandleTypes SET CandleTypeID = ?, CandleTypeCode = ?, " .
           "CandleTypeName = ?, ShelfNumber = ? " .
           "WHERE CandleTypeID = $this->CandleTypeID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isss",
           $this->CandleTypeID,
           $this->CandleTypeCode,
           $this->CandleTypeName,
           $this->ShelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
 function removeCandleType()
   {
       $db = getDB();
       $query = "DELETE FROM CandleTypes WHERE CandleTypeID = $this->CandleTypeID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

}
?>
