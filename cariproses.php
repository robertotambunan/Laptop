<?php

session_start();
$nim = $_POST['nim'];


$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
//$database = new mysqli('127.0.0.1', 'user', 'user', 'prpl');
$query = "SELECT * FROM t_mahasiswa WHERE nim=?";
$statement = $database->prepare($query);
$statement->bind_param('s', $nim);
$statement->execute();
$result_set = $statement->get_result();

$row = $result_set->fetch_assoc();
$id = $row['id'];
$_SESSION['id_mhs'] = $id;
header('location:cari.php');
