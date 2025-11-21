<?php
//Arghavan Katebi-11/21/2025-IT202:Internet Applications-Section003-Phase 4 Assignment/ak3426@njit.edu//
 require_once('database.php');
 $emailAddress = htmlspecialchars($_POST['emailAddress']);
 $password = $_POST['password'];
  if(filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
 $query = "SELECT firstName, lastName, pronouns FROM CandleManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
 $db = getDB();
 $stmt = $db->prepare($query);
 $stmt->bind_param("ss", $emailAddress, $password);
 $stmt->execute();
 $stmt->bind_result($firstName, $lastName, $pronouns);
 $fetched = $stmt->fetch();
 $name = "$firstName $lastName ($pronouns)";
 if ($fetched && isset($name)) {
  echo "<h2>Welcome to Candle Store Website, $name</h2>\n";
   $_SESSION['login'] = $name;
   $_SESSION['firstName']= $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['pronouns'] = $pronouns;
   header("Location: index.php");
 } else {
   echo "<h2>Sorry, login incorrect to Candle Store</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
 }
} else{
  echo "<h2>Please enter a valid email address</h2>\n";
  echo '<a href= "index.php"> Please try again</a>';
}
?>
