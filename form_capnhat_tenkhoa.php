<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật thông tin</title>
    </head>
    <body>

        <?php
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
        $mapb = $_REQUEST['TenKhoa'];
        mysqli_select_db($link, "csdl");
        $sql = "select * from khoa where TenKhoa = '$TenKhoa'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        ?>
        <h2 align='center'>Cập nhật thông tin Tên Khoa</h2>
        <form action="xulicapnhat.php?TenKhoa=<?php echo $row['TenKhoa']; ?>" method="post">
            <table align='center'>
                <tr>
                    <td>Tên Khoa:</td> 
                    <td><input type="text" name="txtTenKhoa" value="<?php echo $row['TenKhoa'] ?>"></td>
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