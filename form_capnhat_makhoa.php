<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật thông tin</title>
    </head>
    <body>

        <?php
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
        $mapb = $_REQUEST['MaKhoa'];
        mysqli_select_db($link, "csdl");
        $sql = "select * from khoa where Makhoa = '$makhoa'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        ?>
        <h2 align='center'>Cập nhật thông tin Khoa</h2>
        <form action="xulicapnhat.php?MaKhoa=<?php echo $row['MaKhoa']; ?>" method="post">
            <table align='center'>
                <tr>
                    <td>Mã Khoa:</td> 
                    <td><input type="text" name="txtMaKhoa" value="<?php echo $row['MaKhoa'] ?>"></td>
                </tr>
                <tr align='center'>
                    <td colspan="2"><input type="submit" value="OK" ><input type="reset" value="Reset"></td>
            </table>
        </form>        
        <?php
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </body>
</html>