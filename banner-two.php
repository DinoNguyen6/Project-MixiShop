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
                GIỎ HÀNG
            </h2>
            <div class="banner-tow-texts-items">
                <a href="/" title="Quay trở về trang chủ">Trang chủ</a>
                <span aria-hidden="true">/</span>
                <span>Tất cả sản phẩm có trong giỏ hàng</span>
            </div>
        </div>
    </div>
    </div>
</div>
