<?php 
    session_start();
    include'./header.php';
    include'./navbar.php';
    // include'./banner-two.php';
?>
<div class="banner-two">
    <div class="banner-tow-list">
        <div class="grid">
        <ul class="banner-tow-list-menu">
            <li><a href="./index.php">Trang chủ</a></li>
            <li class="banner-tow-menu-items">
                <a href="#!">Sản Phẩm</a>
                <ul class="banner-two-menu-items">
                <li>
                        <?php 
                            include 'ketnoi.php';
                            $conn=MoKetNoi();
                            if($conn->connect_error)
                            {
                                echo "không kết nối được MySQL";
                            }
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='ÁO'";
                            $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            $dong=mysqli_fetch_array($ketqua);
                            echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                    ÁO
                                </a>";
                        ?>
                    </li>
                    
                    <li>
                        <?php 
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='QUẦN'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                        QUẦN
                                    </a>";
                        ?>
                    </li>
                    <li>
                        <?php 
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='SET MÙA ĐÔNG'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                        SET MÙA ĐÔNG
                                    </a>";
                        ?>
                    </li>
                    <li>
                        <?php 
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='SET MÙA THU'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                        SET MÙA THU
                                    </a>";
                        ?>
                    </li>

                    <li>
                        <?php 
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='ÁO HOODIE'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                    ÁO HOODIE
                                    </a>";
                        ?>
                    </li>

                    <li>
                        <?php 
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='ÁO LEN'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                    ÁO LEN
                                    </a>";
                        ?>
                    </li>
                        
                </ul>
            </li>
            <li><a href="#!">Blog</a></li>
            <li><a href="#!">Giới thiệu về MixiShop</a></li>
            <li><a href="#!">Hệ thống hiệu sách</a></li>
            <li><a href="#!">Hình thức thanh toán</a></li>
        </ul>
        <div class="banner-tow-list-texts">
        <?php
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                // Tiếp tục xử lý thông tin sản phẩm với $id đã lấy được
                } else {
                echo "Không tìm thấy sản phẩm";
                }
            $index = "SELECT * FROM SANPHAM AS SP, LOAI AS L WHERE SP.MALOAI=L.MALOAI AND MASP = '$id'";
            $ketqua = mysqli_query($conn,$index) or die(mysqli_error($conn));
            $dong=mysqli_fetch_array($ketqua); 
            echo '<h2 class="sub-title">'.$dong['LOAISP'].'</h2>
                    <div class="banner-tow-texts-items">
                        <a href="./index.php">Trang chủ</a>
                        <span aria-hidden="true">/</span>
                        <span>'.$dong['LOAISP'].'</span>
                    </div>';
            ?>
            
        </div>
    </div>
    </div>
</div>
<div class="muasanpham">
    <div class="grid">
        <?php
            $truyvan = "SELECT * FROM SANPHAM AS SP, LOAI AS L WHERE SP.MALOAI=L.MALOAI AND MASP = '$id'"; // truy vấn lấy thông tin sản phẩm
            $ketqua = mysqli_query($conn,$truyvan) or die(mysqli_error($conn));
            $noidung = mysqli_fetch_array($ketqua);
            $tensanpham = $noidung['TENSP'];
            $hinhanh = $noidung['HINH'];
            $motasanpham = $noidung['MOTASP'];
            $giacu = $noidung['GIACU'];
            $giamoi = $noidung['GIAMOI'];
        ?>

        <div class="muasanpham-list">
            <div class="grid__column-40">
                <div class="product-detail__left">
                    <img src="<?php echo $hinhanh ?>" alt="<?php echo $tensanpham ?>">
                </div>
            </div>
            <div class="grid__column-60">
                <div class="product-detail__right">
                    <h1 class="sub-title"><?php echo $tensanpham ?></h1>
                    <div class="product-detail__right-list-gia">
                        <p class="giamoi"><?php echo number_format($giamoi, 0, ',', '.') ?><sup><u>đ</u></sup></p>
                        <p class="giacu"><?php echo number_format($giacu, 0, ',', '.') ?><sup><u>đ</u></sup></p>
                    </div>
                    <div class="product-detail__right-list-thongtin">
                        <p class="noidung">Đang cập nhật nội dung cho sản phẩm</p>
                        <p class="noidung"><i class="fa fa-phone item-phone"></i>Hỗ trợ giờ hành chính: <a href="tel:0865476228" class="lienhe">0865476228</a></p>
                    </div>
                    
                    <?php
                    if ($noidung) {
                        echo "<div class='product-detail__right-list-btn'>
                                    <a href='./them.php?sachchon=".$noidung['MASP']."' class='buy-item'>THÊM VÀO GIỎ HÀNG</a>
                                    </div>";
                    }
                    ?>
                </div>
            </div>
            <!-- <a href='./muangay.php?sachchon=$tuasach' class='buy-item>MUA NGAY</a> -->
        </div>
        <div class="product-detail__description-bottom">
            <h3 class="sub-title">GIỚI THIỆU SẢN PHẨM</h3>
            <p class="desc"><?php echo $motasanpham ?></p>
        </div>
    </div>
</div>

<?php 
    include'./footer.php';
?> --

