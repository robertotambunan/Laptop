<?php
session_start();
$id=$_GET['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$prodi=$_POST['prodi'];
$no_loker=$_POST['noloker'];
$status=$_POST['status'];
$foto=$_POST['foto'];



$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = 'UPDATE t_mahasiswa 
            SET nim=?, nama=?, prodi=?, no_loker=?, status=?, foto=?
            WHERE id=?';
$statement = $database->prepare($query);
$statement->bind_param('ssssssi', $nim, $nama, $prodi, $no_loker, $status, $foto,$id);
$statement->execute();
$result_set = $statement->get_result();
header('location:all.php');


