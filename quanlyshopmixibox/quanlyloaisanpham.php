<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÝ LOẠI SÁCH</title>
    <link rel="stylesheet" href="../assets/css/resets.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- <link rel="stylesheet" href="../assets/img/"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <div class="appQLS">  
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-25">
                    <div class="background-left-admin">
                        <a href="#!" class="namequanly">QUẢN LÝ ADMIN</a>
                        <div class="quanly-admin">
                            <a href="../index.php" class="vetrangchu">Về Trang chủ</a>
                            <a href="./quanlynguoidung.php" class="vetrangchu">Quản lý người dùng</a>
                            <a href="./quanlysanpham.php" class="vetrangchu">Quản lý sản phẩm</a>
                            <a href="./quanlyloaisanpham.php" class="vetrangchu">Quản lý loại sản phẩm</a>
                        </div>
                    </div>

                </div>
                <div class="grid__column-75">
                    <!-- <div class="grid"> -->
                    <table class="table-list-QL table-list-QL-list" cellspacing="0" cellpadding="0">
                        <caption>DANH SÁCH QUẢN LÝ LOẠI SẢN PHẨM MIXISHOP</caption>
                        <tr class="list-items">
                            <th class="items-text">MÃ SẢN PHẨM</th>
                            <th class="items-text">MÃ THỂ LOẠI</th>
                            <th class="items-text">TÊN THỂ LOẠI</th>
                            <th class="items-text">CHỨC NĂNG</th>
                        </tr>
                        <?php
                            include '../ketnoi.php';
                            $conn = MoKetNoi();
                            if ($conn->connect_error) {
                                echo "Không kết nối được với MySQL !!!";
                            }
                            mysqli_select_db($conn, "CSDL_MixiShop");
                            $conn=mysqli_connect("localhost", "root", "","CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI;";
                            $result = mysqli_query($conn, $sql);
                            //in ra danh sách dữ liệu
                            while ($row = mysqli_fetch_assoc($result)) {
                                $MALOAI = $row['MALOAI'];
                                $LOAISP = $row['LOAISP'];
                                $MASP = $row['MASP'];

                        ?>
                        <tr class="list-items">
                            <td class="item-text"><?php echo $MASP ?></td>
                            <td class="item-text"><?php echo $MALOAI ?></td>
                            <td class="item-text"><?php echo $LOAISP ?></td>
                            <td>
                                <a href="xulyxoa.php?idMS=<?php echo $MASP; ?>">Xóa</a>
                                <a href="suadulieu.php?idMS=<?php echo $MASP; ?>">Sửa</a>
                            </td>
                        </tr>
                        <?php
                            }
                            DongKetNoi($conn);
                        ?>
                        <tr>
                            <td colspan="10" align="center">
                                <button type="button" class="themmoi" onclick="myFunction()">THÊM MỚI</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script>
            function myFunction(){
                location.replace("./themmoidulieu.php");//điều hướng tới trang thêm mới dữ liệu
            }
        </script>
    </div>
</body>
</html>