<!--Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu-->
<h2>Enter New Candle Type Information</h2>
<form name="newcandletype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Candle Type ID:</td>
           <td><input type="text" name="CandleTypeID" size="4"></td>
       </tr>
       <tr>
           <td>Candle Type Code:</td>
           <td><input type="text" name="CandleTypeCode" size="10"></td>
       </tr>
       <tr>
           <td>Candle Type Name:</td>
           <td><input type="text" name="CandleTypeName" size="10"></td>
       </tr>
       <tr>
        <td>Shelf Number:</td>
        <td><input type="text" name="ShelfNumber" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Candle Type">
   <input type="hidden" name="content" value="addcandletype">
</form>