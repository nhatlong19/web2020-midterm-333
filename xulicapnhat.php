<?php
    $tenpb = $_REQUEST['txtTenPB'];
    $myID = $_REQUEST['IDPB'];
    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
    $db_selected = mysqli_select_db($link, "dulieu");
    $sql = "Update phongban set TenPB = '$tenpb' where IDPB='$myID'";
    $rs = mysqli_query($link, $sql);
    header("Location:capnhat.php");
?>