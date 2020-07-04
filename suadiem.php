<?php
$link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
$db_selected = mysqli_select_db($link, "csdl");

$sql = "SELECT * FROM sinhvien,ketqua";
$rs = mysqli_query($link,$sql);
echo '<Form action = "xulicapnhat.php">';
echo '<table border = "1" width = "100%">';
echo '<caption> Du lieu bang Sinh Viên</caption>';
echo '<TR><TH>Họ tên</TH><TH>Điểm</TH></TR>';
while ($row=  mysqli_fetch_array($rs))
{
    echo
    '<TR><TD>'.$row['HoTen'].'</TD><TD>'. $row['Diem'].'<a href="form_capnhat_diem.php?diem='.$row['diem'].'">...</a></TD></TR>';    
}
echo '</table';
echo '</form>';
mysqli_free_result($rs);
mysqli_close($link);
?>
