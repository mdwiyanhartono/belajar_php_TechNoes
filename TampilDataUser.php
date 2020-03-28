<?php

include"Connection.php";

  $query = "SELECT * FROM t_user WHERE f_isActive = 0 AND f_isDelete = 0 ";

  $data = mysqli_query($conn,$query);

  //$data = mysqli_fetch_assoc($execute);

  // if($execute){
  //     var_dump($data);
  // } else {
  //     echo "gagal " .mysqli_error($conn);
  // }

?>
