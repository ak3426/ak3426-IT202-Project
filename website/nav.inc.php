  <?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
   if (isset($_SESSION['login'])) {
   ?>
    <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
      <table width="100%" cellpadding="3">
        <?php
         echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>";
         ?>
        <tr>
           <td><img src="images/home.png" alt="Home Icon" width="15" height="15">&nbsp;<a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
          <td><img src="images/candletype.jpg" alt="CandleTypes Icon" width="15" height="15">&nbsp;<strong>Candle Types</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcandletypes">
              <strong>List Candle Types</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcandletype">
              <strong>Add New Candle Type</strong></a></td>
        </tr>
        <tr>
           <td><img src="images/candles.jpg" alt="Candles Icon" width="15" height="15">&nbsp;<strong>Candles</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcandles">
              <strong>List Candles</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcandle">
              <strong>Add New Candle</strong></a></td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td><a href="index.php?content=logout">
              <img src="images/logout.png" alt="Logout Icon" width="15" height="15"></a>&nbsp;
              <a href="index.php?content=logout">
              <strong>Logout</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Candle:</label><br>
              <input type="text" name="candleID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="updatecandle" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Candle Type:</label><br>
              <input type="text" name="candleTypeID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="displaycandletype" />
            </form>
          </td>
        </tr>
      </table>
    </div>
  <?php
   }
   ?>