<?php

include "../config/koneksi.php";

$Jam = @$_POST['Jam'];
$keterangan = @$_POST ['keterangan'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO `jadwal`
( `Jam` , 
  `keterangan ` )
  VALUES
  ('". $Jam ."',
  '". $Pesan ."')");

if($query){
    $status = true;
    $pesan = "request success";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "request failed";
}

$json = [
  "status" => $status,
  "pesan" => $pesan,
  "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>