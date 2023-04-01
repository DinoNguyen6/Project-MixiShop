<?php
include '../ketnoi.php';
$conn = MoKetNoi();
if ($conn->connect_error) {
    echo "Không kết nối được với MySQL !!!";
}
mysqli_select_db($conn, "CSDL_MixiShop");
if(isset($_GET['idMS'])){
    $MASP = $_GET['idMS'];
    $sql = "DELETE FROM SANPHAM WHERE MASP = '$MASP'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "Xóa dữ liệu thành công";
    } else {
        echo "Xóa dữ liệu thất bại";
    }
}
DongKetNoi($conn);
?>
