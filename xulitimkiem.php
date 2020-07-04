<?php
$link = mysqli_connect("localhost", "root", "") or die("khong the ket noi CSDL");
$db_selected = mysqli_select_db($link, 'DULIEU');
$set = $_POST['search'];
$sql = "SELECT * FROM nhanvien where Hoten='$set'";
$rs = mysqli_query($link, $sql);
if (mysqli_num_rows($rs) == 0)
    header("Location:timkiem.php");
else {
    echo '<table border = "1" width="100%" cellspacing="0">';
    echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
    while ($row = mysqli_fetch_array($rs)) {
        echo '<TR>
            <TD>' . $row['IDNV'] . '</TD>
            <TD>' . $row['Hoten'] . '</TD>
            <TD>' . $row['IDPB'] . '</TD>
            <TD>' . $row['Diachi'] . '</TD></TR>';
        
    }
}