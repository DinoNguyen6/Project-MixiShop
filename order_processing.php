<?php
include './header.php';
session_start();
// error_reporting(0);
include 'ketnoi.php';
$conn = MoKetNoi();
if ($conn->connect_error) {
    echo "Không kết nối được với MySQL";
}
mysqli_select_db($conn, "CSDL_MixiShop");
if (isset($_GET['action'])) {
    $masp = $_POST['MASP'];
    $tensp = $_POST['TENSP'];
    $gia = $_POST['GIAMOI'];
    $tenkhachhang = $_SESSION['tendangnhap'];
    $createdate = date("Y-m-d", time());
    $DataORDERS = "INSERT INTO ORDERS (HOTEN,MASANPHAM,THANHTIEN,createDATE,SOLUONG) 
    VALUE('$tenkhachhang','$masp','$tensp','$createdate','$gia')";
    if (mysqli_query($conn, $DataORDERS)) {
        echo "Dữ liệu đã được lưu vào cơ sở dữ liệu thành công";
    } else {
        echo "Lỗi: " . $DataORDERS . "<br>" . mysqli_error($conn);
    }
    unset($_SESSION['giohang']);
    echo"<div class='notify__checkout'><p class='header__notify__checkout'>Thanh toán thành công! </p></br><p>Cám ơn bạn đã mua hàng của Electro, Chúng tôi sẽ giao hàng trong thời gian sớm nhất</p></br><a href='index.php' class='btn-back'>Tiếp tục mua hàng</a></div>";
    
}
?>