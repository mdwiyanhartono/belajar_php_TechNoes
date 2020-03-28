<?php
include"Connection.php";
    $id = $_POST['id'];
// $id = $_GET['id'];

$query = "SELECT * FROM t_user WHERE f_id = '".$id."'";
$execute = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($execute);
include"EditDataUser.php";
?>
