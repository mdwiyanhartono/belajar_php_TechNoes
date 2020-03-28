<?php
include"Connection.php";

$id = $_POST['id'];
$isActive = 1;
$isDelete = 1;
$user_update = "SYSTEM";
$date_update = date('Y-m-d H:i:s');
$query = "UPDATE t_user SET f_isActive = '".$isActive."', f_isDelete = '".$isDelete."' ,f_user_update = '".$user_update."' ,
f_date_update = '".$date_update."' WHERE f_id = '".$id."'";

$execute = mysqli_query($conn,$query);
if($execute == TRUE){
    header("location: index.php");
} else {
    echo "Gagal Delete Data <a href='index.php' > Go to Home </a> ".mysqli_error($conn);
}


?>
