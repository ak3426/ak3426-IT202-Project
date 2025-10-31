<?php
//Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu//
if (!isset($_POST['candleID']) or (!is_numeric($_POST['candleID']))) {
?>
   <h2>You did not select a valid Candle Id value</h2>
   <a href="index.php?content=listcandles">List Candles</a>
   <?php
} else {
   $candleID = $_POST['candleID'];
   $candle = Candle::findCandle($candleID);
   if ($candle) {
   ?>
       <h2>Update Candle <?php echo $candle->CandleID; ?></h2><br>
       <form name="candles" action="index.php" method="post">
           <table>
               <tr>
                   <td>Candle ID</td>
                   <td><?php echo $candle->CandleID; ?></td>
               </tr>
               <tr>
                   <td>Candle Code</td>
                   <td><input type="text" name="CandleCode" value="<?php echo $candle->CandleCode; ?>"></td>
               </tr>
               <tr>
                   <td>Candle Name</td>
                   <td><input type="text" name="CandleName" value="<?php echo $candle->CandleName; ?>"></td>
               </tr>
               <tr>
                   <td>Candle Description</td>
                   <td><input type="text" name="CandleDescription" value="<?php echo $candle->CandleDescription; ?>"></td>
               </tr>
               <tr>
                   <td>Candle Size</td>
                   <td><input type="text" name="CandleSize" value="<?php echo $candle->CandleSize; ?>"></td>
               </tr>
               <tr>
                   <td>Candle Burn Time</td>
                   <td><input type="text" name="CandleBurnTime" value="<?php echo $candle->CandleBurnTime; ?>"></td>
               </tr>
               <tr>
                    <td>Candle Color</td>
                    <td><input type="text" name="CandleColor" value="<?php echo $candle->CandleColor; ?>"></td>
               </tr>
               <tr>
                    <td>Candle Type ID</td>
                    <td><input type="text" name="CandleTypeID" value="<?php echo $candle->CandleTypeID; ?>"></td>
               </tr>
               <tr>
                    <td>Candle Whole Sale Price</td>
                    <td><input type="text" name="CandleWholesalePrice" value="<?php  echo $candle->CandleWholesalePrice; ?>"></td>
               </tr>
               <tr>
                    <td>Candle List Price</td>
                    <td><input type="text" name="CandleListPrice" value="<?php echo $candle->CandleListPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Candle">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="candleID" value="<?php echo $candleID; ?>">
           <input type="hidden" name="content" value="changecandle">
       </form>
   <?php
   } else {
   ?>
       <h2>Sorry, candle <?php echo $candleID; ?> not found</h2>
       <a href="index.php?content=listcandles">List Candles</a>
<?php
   }
}
?>