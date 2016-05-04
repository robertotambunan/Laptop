<?php

session_start();
$nim = $_POST['nim'];


$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = "SELECT * FROM t_mahasiswa WHERE nim=?";
$statement = $database->prepare($query);
$statement->bind_param('s', $nim);
$statement->execute();
$result_set = $statement->get_result();

$row = $result_set->fetch_assoc();
$id = $row['id'];
$_SESSION['id_mhs'] = $id;
$status1 = "Belum_tersimpan";
$status2 = "Tersimpan";


if ($row['status'] == "Tersimpan") {
    $kuery = "UPDATE t_mahasiswa SET nim=?, nama=?, prodi=?, no_loker=?, status=?, foto=? where id=?";
    $state = $database->prepare($kuery);
    $state->bind_param('ssssssi', $nim, $row['nama'], $row['prodi'], $row['no_loker'], $status1, $row['foto'], $id);
    $state->execute();
    $result_set = $statement->get_result();
}
else{
    $kuery = "UPDATE t_mahasiswa SET nim=?, nama=?, prodi=?, no_loker=?, status=?, foto=? where id=?";
    $state = $database->prepare($kuery);
    $state->bind_param('ssssssi', $nim, $row['nama'], $row['prodi'], $row['no_loker'], $status2, $row['foto'], $id);
    $state->execute();
    $result_set = $statement->get_result();
}

header('location:index.php');
