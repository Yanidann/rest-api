<?php
//$mahasiswa = [
//  [
//    "nama" => "Yanida Nur Nabila",
//    "nrp" => "193040022",
//    "email" => "yanidanurn@gmail.com"
//  ],
//  [
//    "nama" => "Yuni Setyawati",
//    "nrp" => "193040021",
//    "email" => "yunni@gmail.com"
//  ],
//];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
