<style>
/*Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu*/
   form[name="candleTypes"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="candleTypes"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="candleTypes"] input[type="text"] {
       width: 100%;
   }
   form[name="candleTypes"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$candleTypeID = $_POST['candleTypeID'];
$candleType = CandleType::findCandleType($candleTypeID);
if ($candleType) {
?>
   <h2>Update Candle Type <?php echo $candleTypeID; ?></h2><br>
   <form name="candleTypes" action="index.php" method="post">
       <label for="CandleTypeCode">Candle Type Code:</label>
       <input type="text" name="CandleTypeCode" id="CandleTypeCode" value="<?php echo $candleType->CandleTypeCode; ?>">
       <label for="CandleTypeName">Candle Type Name:</label>
       <input type="text" name="CandleTypeName" id="CandleTypeName" value="<?php echo $candleType->CandleTypeName; ?>">
       <label for ="ShelfNumber">Shelf Number:</label>
       <input type="text" name="ShelfNumber" id="ShelfNumber" value="<?php echo $candleType->ShelfNumber; ?>">
       <input type="submit" name="answer" value="Update Candle Type">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="CandleTypeID" value="<?php echo $candleTypeID; ?>">
       <input type="hidden" name="content" value="changecandletype">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $candleTypeID; ?> not found</h2>
   <a href="index.php?content=listcandletypes">List Candle Types</a>
<?php
}
?>
<script language="javascript">
   document.candleTypes.CandleTypeCode.focus();
   document.candleTypes.CandleTypeCode.select();
</script>