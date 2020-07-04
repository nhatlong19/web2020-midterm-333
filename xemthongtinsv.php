       <?php
        $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
        mysqli_select_db($link,"csdl");
        $sql="SELECT * FROM sinhvien";
        $result = mysqli_query($link,$sql);
        echo '<table border = "1" width="100%" cellspacing = "0">';
        echo '<caption> Dữ liệu bảng Sinh viên </caption>';
        echo '<TR><TH>Mã SV</TH><TH>Họ</TH><TH>NgaySinh</TH><TH>Email</TH><TH>Mã lớp</TH></TR>';
        while ($row=  mysqli_fetch_array($result))
        {
            echo 
            '<TR><TD>'.$row['MaSV'].'</TD><TD>'.$row['HoTen'].'</TD><TD>'.$row['NgaySinh'].'</TD><TD>'.$row['Email'].'</TD><TD>'. $row['MaLop'].'</TD></TR>';            
        }
        echo '</table>';
        mysqli_free_result($result);
        mysqli_close($link);
                