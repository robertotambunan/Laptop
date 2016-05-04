<?php
session_start();
include_once('functions.php');

$username = $_POST['username'];
$password = $_POST['password'];
$database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
$query = 'SELECT * FROM t_duktek WHERE username=? AND password=?';
$statement = $database->prepare($query);
$statement->bind_param('ss', $username, $password);
$statement->execute();
$result_set = $statement->get_result();

while($rows= mysqli_fetch_assoc($result_set)){
    $id=$rows['id'];    
}

if ($result_set->num_rows) {
    $_SESSION['is_logged_in'] = $username;  
    $_SESSION['id']=$id;
} 
redirect('admin.php');