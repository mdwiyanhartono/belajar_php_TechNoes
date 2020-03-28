<?php
include"Connection.php";

$user_id = $_POST['userid'];
$id = $_POST['id'];
$password = $_POST['password'];
$user_update = "SYSTEM";
$date_update = date('Y-m-d H:i:s');
$query = "UPDATE t_user SET f_user_ID = '".$user_id."', f_password = '".$password."' , f_user_update = '".$user_update."' ,
f_date_update = '".$date_update."' WHERE f_id = '".$id."'";

$execute = mysqli_query($conn,$query);
if($execute == TRUE){
    header("location: index.php");
} else {
    echo "Gagal Update Data <a href='Edit.php' > Go to Update </a> ".mysqli_error($conn);
}


?>
