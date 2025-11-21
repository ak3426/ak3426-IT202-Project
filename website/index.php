<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
session_start();
require_once("config.php");
require_once("candletype.php");
require_once("candle.php");
?>
<!DOCTYPE html>
<html>
<head><title>Candle Store Website</title></head>
<link rel="stylesheet" type="text/css" href="ih_styles.css">
<link rel="icon" type="image/jpg" href="images/logo.jpg">
<body>
    <header>
       <?php include("header.inc.php"); ?>
   </header>
    <section style="height: 375px;">
     <nav>
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
    <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>