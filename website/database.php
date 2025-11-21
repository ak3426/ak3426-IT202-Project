<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'ak3426';
   $username = 'ak3426';
   $password = 'Mamani123@';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  try {
   $db = new mysqli($host, $username, $password, $dbname, $port);
   error_log("You are connected to the $host database!");
   // echo "You are connected to the $host database!";
   return $db;
  } catch (mysqli_sql_exception $e) {
   error_log($e->getMessage(), 0);
   // echo $e->getMessage();
  }
 }
// getDB();
?>