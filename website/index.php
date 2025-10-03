<?php
//Arghavan  Katebi-10/2/2025-IT202:Internet Applications-Section003-Phase 1 Assignment/ak3426@njit.edu//
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Candle Store Website</title></head>
<body>
   <section id="container">
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
</body>
