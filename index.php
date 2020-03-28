<html>
  <table border="2">
    <thead>
      <tr>
        <th>No</th>
        <th>User ID</th>
        <th>Is Update</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php include"TampilDataUser.php";
    $no = 1 ;
    foreach($data as $a){?>
      <tr>
        <td><?php echo $no++ ; ?> </td>
        <td><?php echo $a['f_user_ID']; ?> </td>
        <td><?php echo $a['f_date_update']; ?> </td>
        <td>
          <form action="Edit.php" method="POST">
          	<input type = "hidden" name="id" value="<?php echo $a['f_id']; ?>">
          	<input type = "submit" value="Edit" name="edit">
          </form>
          <form action="HapusDataUser.php" method="POST">
          	<input type = "hidden" name="id" value="<?php echo $a['f_id']; ?>">
          	<input type = "submit" value="hapus" name="Hapus">
          </form>
        </td>
      </tr>
    <?php } ?>
    </tbody>
</table>
</html>
