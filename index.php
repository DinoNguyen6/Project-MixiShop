<!-- --------------HEADEER------------------ -->
<?php 
    session_start();
    include './header.php';
    include './navbar.php';
    include './banner-one.php';
?>


        

        <!-- CONTENT-1 -->
        <div class="content-1">
            <div class="grid">
                <div class="content-text-top">
                    <h2 id="moi-phat-hanh" class="sub-title">
                        <a href="#moi-phat-hanh">SẢN PHẨM MỚI PHÁT HÀNH</a>
                    </h2>
                    <p class="desc">Quần áo MixiBook mới phát hành. Mời bạn xem sản phảm của chúng tôi.</p>
                </div>
                <!-- <div class="grid__row"> -->
                <?php
                    $sql = "SELECT * FROM SANPHAM
                            JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI
                    ";

                    $ketqua = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    echo "<div class='grid__row'>";  
                    if (mysqli_num_rows($ketqua) > 0) {
                        while ($dong = mysqli_fetch_array($ketqua)) {
                            echo "<div class='grid__column-20'>
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
                    } else {
                        echo "No products found.";
                    }
                    echo "</div>";
                ?>

            </div>
        </div>
        <hr>
        


<?php 
    include'./footer.php';
    // mysqli_close($conn);
?>