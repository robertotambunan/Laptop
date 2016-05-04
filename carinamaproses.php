<?php

session_start();
$nama = $_POST['nama'];


$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = "SELECT * FROM t_mahasiswa WHERE nama=?";
$statement = $database->prepare($query);
$statement->bind_param('s', $nama);
$statement->execute();
$result_set = $statement->get_result();

$row = $result_set->fetch_assoc();
$id = $row['id'];
$_SESSION['id_mhs_1'] = $id;
header('location:nama.php');
