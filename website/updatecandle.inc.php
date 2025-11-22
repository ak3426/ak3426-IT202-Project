<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
require_once("candle.php");
if (!isset($_POST['candleID']) || trim($_POST['candleID']) === "" || !is_numeric($_POST['candleID'])) {
?>
   <h2>You did not select a valid Candle ID value.</h2>
   <a href="index.php?content=listcandles">List Candles</a>
<?php
   exit;
}
$candleID = $_POST['candleID'];
$candle   = Candle::findCandle($candleID);
if ($candle) {
?>
    <h2>Update Candle <?php echo htmlspecialchars($candle->CandleID); ?></h2><br>
    <form name="candles" action="index.php" method="post">
        <table>
            <tr>
                <td>Candle ID</td>
                <td><?php echo htmlspecialchars($candle->CandleID); ?></td>
            </tr>

            <tr>
                <td>Candle Code</td>
                <td>
                    <input type="text" name="CandleCode"
                           value="<?php echo htmlspecialchars($candle->CandleCode); ?>"
                           minlength="3" maxlength="10" required>
                </td>
            </tr>
            <tr>
                <td>Candle Name</td>
                <td>
                    <input type="text" name="CandleName"
                           value="<?php echo htmlspecialchars($candle->CandleName); ?>"
                           minlength="10" maxlength="100" required>
                </td>
            </tr>

            <tr>
                <td>Candle Description</td>
                <td>
                    <input type="text" name="CandleDescription"
                           value="<?php echo htmlspecialchars($candle->CandleDescription); ?>"
                           minlength="100" maxlength="500" required>
                </td>
            </tr>

            <tr>
                <td>Candle Size</td>
                <td>
                    <input type="text" name="CandleSize"
                           value="<?php echo htmlspecialchars($candle->CandleSize); ?>"
                           minlength="3" maxlength="10" required>
                </td>
            </tr>

            <tr>
                <td>Candle Burn Time</td>
                <td>
                    <input type="text" name="CandleBurnTime"
                           value="<?php echo htmlspecialchars($candle->CandleBurnTime); ?>"
                           minlength="2" maxlength="6" required>
                </td>
            </tr>
            <tr>
                <td>Candle Color</td>
                <td>
                    <input type="text" name="CandleColor"
                           value="<?php echo htmlspecialchars($candle->CandleColor); ?>"
                           minlength="3" maxlength="20" required>
                </td>
            </tr>
            <tr>
                <td>Candle Type ID</td>
                <td>
                    <input type="number" name="CandleTypeID"
                           value="<?php echo htmlspecialchars($candle->CandleTypeID); ?>"
                           min="100" max="999" required>
                </td>
            </tr>
            <tr>
                <td>Wholesale Price</td>
                <td>
                    <input type="number" step="0.01" name="CandleWholesalePrice"
                           value="<?php echo htmlspecialchars($candle->CandleWholesalePrice); ?>"
                           min="0.01" max="999.99" required>
                </td>
            </tr>

            <tr>
                <td>List Price</td>
                <td>
                    <input type="number" step="0.01" name="CandleListPrice"
                           value="<?php echo htmlspecialchars($candle->CandleListPrice); ?>"
                           min="0.01" max="999.99" required>
                </td>
            </tr>
        </table>
        <br><br>
        <input type="submit" name="answer" value="Update Candle">
        <input type="submit" name="answer" value="Cancel" formnovalidate>
        <input type="hidden" name="candleID" value="<?php echo $candleID; ?>">
        <input type="hidden" name="content" value="changecandle">
    </form>
<?php
} else {
?>
    <h2>Sorry, candle <?php echo htmlspecialchars($candleID); ?> not found</h2>
    <a href="index.php?content=listcandles">List Candles</a>
<?php
}
?>

