<?php

session_start();
include_once('functions.php');

// when no session named 'is_logged_in'? 
if (!isset($_SESSION['is_logged_in'])) {
    redirect('admin.php');
} else {
    echo $_SESSION['is_logged_in'];
    $id = $_GET['id'];
    // retrieve posted form data 

    $database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
    mysqli_query($database, "DELETE FROM t_mahasiswa WHERE id=$id");
    mysqli_close($database);
    redirect('all.php');
}
?> 
