<!--Arghavan  Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu-->
<h2>Enter New Candle Information</h2>
<form name="newcandle" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Candle ID:</td>
           <td><input type="number" name="CandleID" size="4" min="1000" max="9999" required></td>
       </tr>
       <tr>
           <td>Candle Code:</td>
           <td><input type="text" name="CandleCode" size="4" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Candle Name:</td>
           <td><input type="text" name="CandleName"  minlength="10" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Candle Description:</td>
           <td><input type="text" name="CandleDescription" minlength="100" maxlength="500" required></td>
       </tr>
       <tr>
        <td>Candle Size:</td>
        <td><input type="text" name="CandleSize" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
        <td>Candle Burn Time:</td>
        <td><input type="text" name="CandleBurnTime" minlength="2" maxlength="6" required></td>
       </tr>
       <tr>
        <td>Candle Color:</td>
        <td><input type="text" name="CandleColor" minlength="3" maxlength="20" required></td>
       </tr>
       <tr>
        <td>Candle Type ID:</td>
        <td><input type="number" name="CandleTypeID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
        <td>Candle Whole Sale Price:</td>
        <td><input type="number" name="CandleWholesalePrice" min= "0.01" max="999.99" step="0.01" required></td>
       </tr>
       <tr>
        <td>Candle List Price:</td>
        <td><input type="number" name="CandleListPrice" min="0.01" max="999.99" step="0.01" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Candle">
   <input type="hidden" name="content" value="addcandle">
</form>