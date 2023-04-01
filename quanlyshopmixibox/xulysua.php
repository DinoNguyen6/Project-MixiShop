<?php

include '../ketnoi.php';
$conn = MoKetNoi();

if ($conn->connect_error) {
    echo "Không kết nối được với MySQL !!!";
}

mysqli_select_db($conn, "CSDL_MixiShop");

if(isset($_POST["btnSave"]))
{
    $MASP = $_POST['txtMASP'];
    $MALOAI = $_POST['txtMALOAI'];
    $HINH = $_POST['txtHINH'];
    $TENSP = $_POST['txtTENSP'];
    $GIACU = $_POST['txtGIACU'];
    $GIAMOI = $_POST['txtGIAMOI'];
    $MOTASP = $_POST['txtMOTASP'];
    $LOAISP = $_POST['txtLOAISP'];

    $sql = "INSERT INTO SANPHAM (MASP, MALOAI, HINH, TENSP, GIACU, GIAMOI, MOTASP) 
            VALUES ('$MASP', '$MALOAI', '../assets/img/".$HINH."', '$TENSP', '$GIACU', '$GIAMOI', '$MOTASP')
            ON DUPLICATE KEY UPDATE MALOAI = '$MALOAI', HINH = '../assets/img/".$HINH."', TENSP = '$TENSP', GIACU = '$GIACU', GIAMOI = '$GIAMOI', MOTASP = '$MOTASP';";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "<a href='../index.php' class='vetrangchu'>VỀ TRANG CHỦ</a>";
        echo "Cập nhật dữ liệu thành công";
    } else {
        echo "Cập nhật dữ liệu thất bại";
    }
}
?>
