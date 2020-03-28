<html>
<head>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="EditDataUserProccess.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="userid" value="<?php echo $data['f_user_ID'] ?>">
                  <input type="hidden" name="id" value="<?php echo $data['f_id'] ?>">
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" value="<?php echo $data['f_password'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
