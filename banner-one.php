<div class="banner">
<!-- <div class="grid"> -->
    <div id="Slider">
        <div class="aspect-ration-169">
            <img src="./assets/img/Ảnh-bia-mixishop-1-2048x779.jpg" alt="">
            <img src="./assets/img/banner004.jpg" alt="">
            <img src="./assets/img/2.jpg" alt="">
        </div>
        <div class="dot-conteiner">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div class="grid">
        <ul class="banner-list-menu">
            <li><a href="./index.php">Trang chủ</a></li>
            <li class="banner-list-menu-items">
                <a href="!#">Sản Phẩm></a>
                <ul class="banner-menu-items">
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
            <li><a href="#!">Hệ thống hiệu cửa hàng</a></li>
            <li><a href="#!">Hình thức thanh toán</a></li>
        </ul>
        
    </div>

            <!-- </div> -->
</div> 