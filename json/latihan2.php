<?php 
$data = file_get_contents('tes.json') ; // bisa ambil dari https://........... atau masuk ke folder/

$mahasiswa = json_decode($data, true);
// var_dump($mahasiswa);
echo $mahasiswa[0] ["pembimbing"]["pembimbing1"]

?>