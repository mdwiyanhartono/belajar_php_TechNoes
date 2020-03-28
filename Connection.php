<?php
  $host = "localhost"; // variable host di isi dengan host server local "localhost"
  $username = "root"; // variable username isi dengan username database local "root"
  $password = ""; // variable password isi dengan password database jika ada dan jika tidak ada isi dengan ""
  $database = "belajar_web"; // variable database isi dengan database yang kita buat

  $conn = mysqli_connect( $host, $username, $password, $database); // untuk connection database menggunakan mysqli_connect

  // if($conn){
  //     echo "Connection Success";
  // } else {
  //     echo "Connection Failed";
  // }
?>
