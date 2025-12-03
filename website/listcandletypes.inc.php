<script language="javascript">
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
   function listbox_dblclick() {
       document.candleTypes.displaycandletype.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this candle type?");
       }
       if (userConfirmed) {
           if (target == 0) candleTypes.action = "index.php?content=displaycandletype";
           if (target == 1) candleTypes.action = "index.php?content=removecandletype";
           if (target == 2) candleTypes.action = "index.php?content=updatecandletype";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<?php
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
<br>
   <input type="submit" onClick="button_click(0)" name="displaycandletype" value="View Candle Type">
   <input type="submit" onClick="button_click(1)" name="deletecandletype" value="Delete Candle Type">
   <input type="submit" onClick="button_click(2)" name="updatecandletype" value="Update Candle Type">
  </form>
<?php
} else {
  echo "<h2>No candle type found.</h2>";
}
?>