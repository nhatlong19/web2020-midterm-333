<?php
    $mapb = $_REQUEST['IDPB'];
    $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
    $db_selected = mysqli_select_db($link,"DULIEU");
    $sql = "delete from phongban where IDPB='$mapb'";
    $rs = mysqli_query($link,$sql);
    if($rs){
    header("Location:capnhat.php");
} else{
    echo "ERROR: khong the thuc thi $sql. " . mysqli_error($link);
}
mysqli_close($link)
?>