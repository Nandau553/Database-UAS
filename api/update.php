<?php

include "../config/koneksi.php";

$Id = @$_POST['Id'];
$Jam = @$_POST['Jam'];
$keterangan = @$_POST['keterangan'];

$data = [];

$query = mysqli_query($kon, "UPDATE `Jadwal`
SET `Jam` ='". $Jam."',
`keterangan`  = '". $keterangan ."'
WHERE `Id` ='". $Id ."'");

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