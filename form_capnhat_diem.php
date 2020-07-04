<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật thông tin</title>
    </head>
    <body>

        <?php
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
        $diem = $_REQUEST['diem'];
        mysqli_select_db($link, "csdl");
        $sql = "select * from ketqua where diem = '$diem'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        ?>
        <h2 align='center'>Cập nhật Điểm</h2>
        <form action="xulicapnhat.php?diem=<?php echo $row['diem']; ?>" method="post">
            <table align='center'>
                <tr>
                    <td>Điểm:</td> 
                    <td><input type="text" name="txtdiem" value="<?php echo $row['diem'] ?>"></td>
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