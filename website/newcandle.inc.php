<!--Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu-->
<h2>Enter New Candle Information</h2>
<form name="newcandle" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Candle ID:</td>
           <td><input type="text" name="CandleID" size="4"></td>
       </tr>
       <tr>
           <td>Candle Code:</td>
           <td><input type="text" name="CandleCode" size="4"></td>
       </tr>
       <tr>
           <td>Candle Name:</td>
           <td><input type="text" name="CandleName" size="20"></td>
       </tr>
       <tr>
           <td>Candle Description:</td>
           <td><input type="text" name="CandleDescription" size="50"></td>
       </tr>
       <tr>
        <td>Candle Size:</td>
        <td><input type="text" name="CandleSize" size="10"></td>
       </tr>
       <tr>
        <td>Candle Burn Time:</td>
        <td><input type="text" name="CandleBurnTime" size="5"></td>
       </tr>
       <tr>
        <td>Candle Color:</td>
        <td><input type="text" name="CandleColor" size="10"></td>
       </tr>
       <tr>
        <td>Candle Type ID:</td>
        <td><input type="text" name="CandleTypeID" size="4"></td>
       </tr>
       <tr>
        <td>Candle Whole Sale Price:</td>
        <td><input type="text" name="CandleWholesalePrice" size="5"></td>
       </tr>
       <tr>
        <td>Candle List Price:</td>
        <td><input type="text" name="CandleListPrice" size="5"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Candle">
   <input type="hidden" name="content" value="addcandle">
</form>