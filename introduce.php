<?php
    include './header.php';
    include './navbar.php';
?>
<!-- Banner-two -->
<div class="banner-two">
    <div class="banner-tow-list">
        <div class="grid">

        <ul class="banner-tow-list-menu">
            <li><a href="./index.php">Trang chủ</a></li>
            <li class="banner-tow-menu-items ">
                <a href="#!">Sách MixiShop</a>
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
            <li><a href="./introduce.php">Giới thiệu về MixiShop</a></li>
            <li><a href="#!">Hệ thống cửa hàng</a></li>
            <li><a href="#!">Hình thức thanh toán</a></li>
        </ul>
        <div class="banner-tow-list-texts">
            <h2 class="sub-title">
                Giới thiệu về MixiShop
            </h2>
            <div class="banner-tow-texts-items">
                <a href="/" title="Quay trở về trang chủ">Trang chủ</a>
                <span aria-hidden="true">/</span>
                <span>Giới thiệu về MixiShop</span>
            </div>
        </div>
    </div>
    </div>
</div>
            
<!-- Giới thiệu shop -->
    <div class="introduce">
        <div class="grid">
            <h2 class="sub-title">GIỚI THIỆU VỀ CỬA HÀNG MIXISHOP</h2>
            <p class="desc">
                MixiShop là một cửa hàng bán quần áo trực tuyến đang trở thành lựa chọn yêu thích của nhiều người. Với đa dạng sản phẩm từ quần áo cho nam, nữ đến trẻ em, MixiShop mang đến cho khách hàng một trải nghiệm mua sắm tuyệt vời với nhiều ưu đãi hấp dẫn.
            </p>
            <p class="desc">
                Đầu tiên, về sản phẩm, MixiShop luôn cập nhật những mẫu quần áo mới nhất và đa dạng nhất. Khách hàng có thể dễ dàng tìm thấy những sản phẩm phù hợp với phong cách và sở thích của mình, từ những bộ đồ thể thao, đồ bơi cho những chuyến du lịch đến những bộ đồ công sở lịch lãm cho những buổi họp mặt quan trọng.
            </p>
            <p class="desc">
                Thứ hai, MixiShop luôn cam kết về chất lượng sản phẩm. Các sản phẩm được làm từ những chất liệu cao cấp, thoáng mát, an toàn cho sức khỏe và bền đẹp. Bên cạnh đó, MixiShop cũng sở hữu các nhãn hàng nổi tiếng và uy tín như Nike, Adidas, Puma, Zara, Mango, v.v. Đây là đảm bảo cho chất lượng sản phẩm được đảm bảo tốt nhất.
            </p>
            <p class="desc">
                Ngoài ra, MixiShop còn có chính sách vận chuyển nhanh chóng và tiện lợi. Khách hàng chỉ cần đặt hàng trực tuyến và sản phẩm sẽ được giao hàng tận nơi trong thời gian nhanh nhất. MixiShop cũng hỗ trợ cho khách hàng khi có những thắc mắc về sản phẩm, đổi trả hàng hóa nhanh chóng và thuận tiện.
            </p>
            <p class="desc">
                Cuối cùng, MixiShop còn có chính sách giá cả hợp lý. Với nhiều ưu đãi và giảm giá đặc biệt, khách hàng có thể mua được những sản phẩm chất lượng cao với giá cả phải chăng. Bên cạnh đó, MixiShop còn có chương trình tích điểm và khuyến mãi hấp dẫn cho khách hàng thường xuyên.
            </p>
            <p class="desc">
                Tổng kết lại, MixiShop là một cửa hàng bán quần áo trực tuyến đáng tin cậy với những sản phẩm đa dạng, chất lượng cao và giá cả hợp lý. Nếu bạn đang tìm kiếm một địa chỉ mua sắm trực tuyến tiện lợi và đáng tin
            </p>
        </div>
    </div>
<?php
    include './footer.php';
?>