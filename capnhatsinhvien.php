<?php
$link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
$db_selected = mysqli_select_db($link, "csdl");
$sql = "SELECT * FROM sinhvien";
$rs = mysqli_query($link,$sql);
echo '<Form action = "xulicapnhat.php">';
echo '<table border = "1" width = "100%">';
echo '<caption> Du lieu bang Sinh Viên</caption>';
echo '<TR><TH>Mã SV</TH><TH>Họ tên</TH><TH>Ngay Sinh</TH><TH>Email</TH><TH>Mã lớp</TH><TH>Cập Nhật</TH><TH>Xoa</TH></TR>';
while ($row=  mysqli_fetch_array($rs))
{
    echo
    '<TR><TD>'.$row['MaSV'].'</TD><TD>'.$row['HoTen'].'</TD><TD>'.$row['NgaySinh'].'</TD><TD>'.$row['Email'].'</TD><TD>'. $row['MaLop'].'</TD><TD><a href="form_capnhat_pb.php?MaSV='.$row['IDPB'].'">...</a></TD><TD><a href="xulixoa.php?IDPB='.$row['IDPB'].'">xoa</a></TD></TR>';    
}
echo '</table';
echo '</form>';
mysqli_free_result($rs);
mysqli_close($link);
?>
