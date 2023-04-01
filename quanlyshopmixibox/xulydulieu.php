<?php
include '../ketnoi.php';   
$conn = MoKetNoi();
if ($conn->connect_error) {
    echo "Không kết nối được với MySQL !!!";
    exit();
}
mysqli_select_db($conn, "CSDL_MixiShop");

if(isset($_POST['btnSave'])) {
    //Thêm dữ liệu cho bảng SANPHAM
    $DataSANPHAM="INSERT INTO SANPHAM (MASP, MALOAI, HINH, TENSP, GIAMOI, GIACU, MOTASP)".
    " VALUES ('".$_POST['txtMASP']."','".$_POST['txtMALOAI']."','../assets/img/".$_POST['txtHINH']."','".$_POST['txtTENSP']."','".$_POST['txtGIAMOI']."','".$_POST['txtGIACU']."','".$_POST['txtMOTASP']."') ON DUPLICATE KEY UPDATE MALOAI=VALUES(MALOAI), HINH=VALUES(HINH), TENSP=VALUES(TENSP), GIAMOI=VALUES(GIAMOI), GIACU=VALUES(GIACU), MOTASP=VALUES(MOTASP)";
    $results = mysqli_query($conn, $DataSANPHAM) or die (mysqli_error($conn));

    //Thêm dữ liệu cho bảng LOAI
    $DataLOAI="INSERT INTO LOAI (MALOAI, LOAISP)".
    " VALUES ('".$_POST['txtMALOAI']."','".$_POST['txtLOAISP']."') ON DUPLICATE KEY UPDATE LOAISP=VALUES(LOAISP)";
    $results = mysqli_query($conn, $DataLOAI) or die (mysqli_error($conn));

    if ($results) {
        // display a success message
        echo "Thêm dữ liệu thành công!";
        echo "<a href='../index.php'>Nhấn vào đây để quay về trang chủ</a> ";
    } else {
        // display an error message
        echo "Lỗi khi thêm dữ liệu: " . mysqli_error($conn);
    }
}
DongKetNoi($conn);
?>
