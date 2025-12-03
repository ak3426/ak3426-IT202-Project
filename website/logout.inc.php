<?php
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>
