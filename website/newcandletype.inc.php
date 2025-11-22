<!--Arghavan  Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu-->
<h2>Enter New Candle Type Information</h2>
<form name="newcandletype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Candle Type ID:</td>
           <td><input type="number" name="CandleTypeID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Candle Type Code:</td>
           <td><input type="text" name="CandleTypeCode" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Candle Type Name:</td>
           <td><input type="text" name="CandleTypeName" minlength="5" maxlength="100" required></td>
       </tr>
       <tr>
        <td>Shelf Number:</td>
        <td><input type="text" name="ShelfNumber" minlength="2" max="5" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Candle Type">
   <input type="hidden" name="content" value="addcandletype">
</form>