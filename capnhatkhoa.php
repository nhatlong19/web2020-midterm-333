<?php
$link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
$db_selected = mysqli_select_db($link, "csdl");
$sql = "SELECT * FROM khoa";
$rs = mysqli_query($link,$sql);
echo '<Form action = "xulicapnhat.php">';
echo '<table border = "1" width = "100%">';
echo '<caption> Du lieu bang Khoa</caption>';
echo '<TR><TH>Mã Khoa</TH><TH>Tên Khoa</TH><TH>Năm Thành Lập</TH><TH>Xoa</TH></TR>';
while ($row=  mysqli_fetch_array($rs))
{
    echo
    '<TR><TD>' .$row['MaKhoa'].'<a href="form_capnhat_makhoa.php?MaKhoa='.$row['TenKhoa'].'">...</a><TD>' .$row['TenKhoa'].'<a href="form_capnhat_tenkhoa.php?TenKhoa='.$row['TenKhoa'].'">...</a><TD>' .$row['NamThanhLap'].'<TD><a href="xulixoa.php?IDPB='.$row['MaKhoa'].'">xoa</a></TD></TR>';    
}
echo '</table';
echo '</form>';
mysqli_free_result($rs);
mysqli_close($link);
?>
