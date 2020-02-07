<?php 
// $mahasiswa = [
//   [  "nama" => "dicky facturiawan",
//     "nrp" => "09876543212",
//     "email" => "dickyfacturiawan@gmail.com"
// ],
//   [  "nama" => "galih",
//     "nrp" => "09876543212",
//     "email" => "dickyfacturiawan@gmail.com"
//   ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=project1','root','');

$db = $dbh->prepare('SELECT * FROM user_sub_menu');
$db->execute();
$submenu = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($submenu);
echo $data;
?>