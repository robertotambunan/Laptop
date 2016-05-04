<?php

session_start();
$noloker = $_POST['noloker'];


$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = "SELECT * FROM t_mahasiswa WHERE no_loker=?";
$statement = $database->prepare($query);
$statement->bind_param('s', $noloker);
$statement->execute();
$result_set = $statement->get_result();

$row = $result_set->fetch_assoc();
$id = $row['id'];
$_SESSION['id_mhs_2'] = $id;
header('location:noloker.php');
