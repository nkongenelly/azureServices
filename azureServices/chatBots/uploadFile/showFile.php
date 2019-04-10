<?php
// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'id4520195_test';
$userdb = 'id4520195_test';
$passdb = '123456789';


  // Connect and create the PDO object
  $db = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $messenger_id = $_GET['messenger_user_id'];
$stmt = $db->prepare("select * from users where messenger_id = $messenger_id");
$stmt->execute();
$myarr=array();
while($data=$stmt->fetch()){
    $myarr[]=$data;
    
}

    
  // echo json_encode($myarr);
   
   $file = fopen('image.json' ,'w');
   fwrite($file, json_encode($myarr, JSON_FORCE_OBJECT));
   
   $url = 'image.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed

//echo $characters[0]->image_url;
//echo $characters[0]->last_name;
//echo $characters[0]->email_address;
//echo json_encode($data);

?>

