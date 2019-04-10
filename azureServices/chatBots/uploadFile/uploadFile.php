<?php

// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'id4520195_test';
$userdb = 'id4520195_test';
$passdb = '123456789';


  // Connect and create the PDO object
  $db = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $messenger_id = $_GET['messenger_user_id'];
 $image=$_GET['imageurl'];
  //Query 2: Attempt to update the user's profile.
  $sql = "UPDATE `users` SET `image_url`='$image' WHERE `messenger_id`=$messenger_id";
  $count = $db->exec($sql);

  $conn = null;        // Disconnect





?>

