<?php
include"Connection.php";
    $user_id = $_POST['userid'];
    $password = $_POST['password'];
    $isActive = 0;
    $isDelete = 0;
    $user_create = "SYSTEM";
    $date_create = date('Y-m-d H:i:s');
    $user_update = "SYSTEM";
    $date_update = date('Y-m-d H:i:s');
    $insert = "INSERT INTO t_user VALUES(NULL,
      '".$user_id."',
      '".$password."',
      '".$isActive."',
      '".$isDelete."',
      '".$user_create."',
      '".$date_create."',
      '".$user_update."',
      '".$date_update."')";

      $execute = mysqli_query($conn,$insert);

      if($execute == TRUE){
          header("location: index.php");
      } else {
          echo "Gagal Input Data <a href='InsertDataUser.php' > Go to Create </a> ".mysqli_error($conn);
      }
?>
