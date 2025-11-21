<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
if (!isset($_REQUEST['candleTypeID']) or (!is_numeric($_REQUEST['candleTypeID']))) {
?>
 <h2>You did not select a valid CandleTypeID to view.</h2>
 <a href="index.php?content=listcandletypes">List Candle Types</a>
 <?php
} else {
 $candleTypeID = $_REQUEST['candleTypeID'];
 $candleType = CandleType::findCandleType($candleTypeID);
 if ($candleType) {
   echo $candleType;
   $candles = Candle::getCandlesByCandleTypes($candleTypeID);
   if ($candles) {
 ?>
     <br><br>
     <b>Candles:</b><br>
     <table>
       <tr>
         <th>Candle ID</th>
         <th>Candle Code</th>
         <th>Candle  Name</th>
         <th>Candle Description</th>
         <th>Candle Burn Time</th>
         <th>Candle Color</th>
         <th>Candle Type ID </th>
         <th>Candle Whole Sale Price ($)</th>
         <th>Candle List Price($)</th>
       </tr>
       <?php
       $candletotal = 0;
       foreach ($candles as $candle) {
       ?>
         <tr>
           <td><?php echo $candle->CandleID; ?></td>
           <td><?php echo $candle->CandleCode; ?></td>
           <td><?php echo $candle->CandleName; ?></td>
           <td><?php echo $candle->CandleDescription; ?></td>
           <td><?php echo $candle->CandleBurnTime; ?></td>
           <td><?php echo $candle->CandleColor; ?></td>
           <td><?php echo $candle->CandleTypeID; ?></td>
           <td><?php echo $candle->CandleWholesalePrice; ?></td>
           <td><?php echo $candle->CandleListPrice; ?></td>
          </tr>
       <?php
         $candletotal = $candletotal + $candle->CandleListPrice;
       }
       ?>
       <tr>
         <td></td>
         <td>Candle List Price Total</td>
         <td><?php echo '$' . number_format($candletotal, 2); ?></td>
       </tr>
     </table>
<?php
   } else {
     echo "<h2>There are no candles for this candle type</h2>\n";
   }
 } else {
   echo "<h2>Sorry, candle type $candleTypeID not found</h2>\n";
 }
}
?>