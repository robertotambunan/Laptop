<?ph<?php
session_start();
include_once('functions.php');
// when no session named 'is_logged_in'? 
if (!isset($_SESSION['is_logged_in'])) {
    redirect('login.php');
}

// retrieve posted form data 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$no_loker = $_POST['noloker'];
$status = $_POST['status'];

$tipe_img = array('image/jpeg', 'image/bmp', 'image/x-png');
$img = "images/";

$gbr = $img.$_FILES ['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
if (in_array(strtolower($tipe), $tipe_img)) {
    $move = move_uploaded_file($_FILES['image']['tmp_name'], $gbr);
   
}

$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = "INSERT  INTO  t_mahasiswa(`nim`,  `nama`,  `prodi`,  `no_loker`, `status`, `foto`) VALUES(?, ?, ?, ?, ?, ?)";
$statement = $database->prepare($query);
$statement->bind_param('ssssss', $nim, $nama, $prodi, $no_loker, $status, $gbr);
$statement->execute();


redirect('all.php');
?>
  