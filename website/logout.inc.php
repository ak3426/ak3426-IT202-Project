<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>
