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
                            JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='SET MÙA ĐÔNG'";
                            $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            $dong=mysqli_fetch_array($ketqua);
                            echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                    SET MÙA ĐÔNG
                                </a>";
                        ?>
                    </li>
                    <li>
                        <?php 
                            // include 'ketnoi.php';
                            // $conn=MoKetNoi();
                            // if($conn->connect_error)
                            // {
                            //     echo "không kết nối được MySQL";
                            // }
                            mysqli_select_db($conn,"CSDL_MixiShop");
                            $sql = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='SET MUA THU'
                            ";
                                $ketqua = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                $dong=mysqli_fetch_array($ketqua);
                                echo "<a href='./collections.php?id=".$dong['LOAISP']."'>
                                        SET MUA THU
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
        <div class="banner-tow-list-texts">
        <?php
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                // Tiếp tục xử lý thông tin sản phẩm với $id đã lấy được
                } else {
                echo "Không tìm thấy sản phẩm";
                }
            $index = "SELECT * FROM SANPHAM
                            JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI
                            AND LOAISP = '$id'";
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
<!-- ====================content-tow==================== -->
<div class="content-two">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-25">
                <div class="content-two-left">
                    <h2 class="sub-title">
                        LOẠI SẢN PHẨM HIỆN CÓ
                    </h2>
                    <?php
                        $index = "SELECT * FROM SANPHAM
                                    JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI
                                        AND LOAISP='$id'";
                        $ketqua = mysqli_query($conn,$index) or die(mysqli_error($conn));
                        for($i=1;$i<=1;$i++)
                        {
                            $dong=mysqli_fetch_array($ketqua);
                            if($dong) {
                                echo "<p class='desc'>".$dong['LOAISP']."</p>";
                            }
                        }
                    ?>
                    
                </div>
            </div>
            <div class="grid__column-75">
                <div class="content-two-right">
                    <div class="content-two-right-lisst">
                        <?php
                            $index = "SELECT * FROM SANPHAM
                                            JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI
                                            AND LOAISP='$id'";
                            $ketqua = mysqli_query($conn,$index) or die(mysqli_error($conn));
                            for($i=1;$i<=1;$i++)
                            {
                                $dong=mysqli_fetch_array($ketqua);
                                if($dong) {
                                    echo "<h2 class='sub-title'>".$dong['LOAISP']."</h2>";
                                }
                            }
                        ?>
                    
                        <div class="content-two-right-sapxep">
                            <p class="desc">
                                Sắp xếp
                                <select name="SortBy" id="SortBy">
                                    <option value="manual">Tùy chọn</option>
                                    <option value="best-selling">Sản phẩm bán chạy</option>
                                    <option value="title-ascending">Theo bảng chữ cái từ A-Z</option>
                                    <option value="title-descending">Theo bảng chữ cái từ Z-A</option>
                                    <option value="price-ascending">Giá từ thấp tới cao</option>
                                    <option value="price-descending">Giá từ cao tới thấp</option>
                                    <option value="created-descending">Mới nhất</option>
                                    <option value="created-ascending">Cũ nhất</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div>
                        <?php
                        $index = "SELECT * FROM SANPHAM
                                JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI AND LOAISP='$id'";
                        $ketqua = mysqli_query($conn,$index) or die(mysqli_error($conn));
                        echo "<div class='grid__row'>";   
                        for($i=1;$i<=100;$i++)
                        {
                            $dong=mysqli_fetch_array($ketqua);
                            if($dong) {
                                echo "<div class='grid__column-25'>
                                    <a href='./muasanpham.php?id=".$dong['MASP']."' class='buy-item'>      
                                        <div class='list-sanpham-texts'>
                                            <img src='".$dong['HINH']."' class='image'> 
                                            <div class='item-texts'>
                                                <h3 class='sub-title'>".$dong['TENSP']."</h3>
                                                <div class='gia-sp'>
                                                    <p class='desc'>".number_format($dong['GIAMOI'])."<sub>đ</sub></p>
                                                    <p class='desc'>".number_format($dong['GIACU'])."<sub>đ</sub></p>
                                                </div>
                                            </div>
                                            </div>
                                    </a>
                                    </div>";
                            }
                        }
                        echo "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include'./footer.php';
?>
