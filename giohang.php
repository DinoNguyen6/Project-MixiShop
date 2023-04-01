<?php 
    session_start();
    // Kiểm tra phiên đăng nhập
    // if (!isset($_SESSION['username'])) {
    //     header('Location: dangnhap.php');
    //     exit();
    // }
    include'./header.php';
    include'./navbar.php';
    include'./banner-two.php';
    if(!isset($_SESSION['tendangnhap'])) {
?>
<script>
            if(confirm("Bạn cần phải đăng nhập để xem thông tin giỏ hàng. Nhấn OK để đăng nhập hoặc Cancel để hủy.")) {
                window.location.href = "./dangnhap.php";
            } else {
                history.back();
            }
        </script>
<?php
    }
?>
<div class="giohang">
    <div class="grid">
            <form action="giohang.php" method="post">
                <table align="center" class="table-giohang">
                    <caption>
                        DANH SÁCH CÁC MẶT HÀNG CÓ TRONG GIỎ HÀNG
                    </caption>
                    <tr class="gh-tieude">
                        <th class="tieude-items">MÃ SẢN PHẨM</th>
                        <th class="tieude-items">TÊN SẢN PHẨM</th>
                        <th class="tieude-items">GIÁ SẢN PHẨM</th>
                        <th class="tieude-items">SỐ LƯỢNG</th>
                        <th class="tieude-items">THÀNH TIỀN</th>
                        <th></th>
                    </tr>
                    <?php
                        error_reporting(0);
                        $conn = MoKetNoi();
                        if ($conn->connect_error) {
                            echo "Không kết nối được với MySQL";
                        }
                        mysqli_select_db($conn, "CSDL_MixiShop");
                        $danhsach=$_SESSION['giohang'];
                        $tongtien=0;
                        $truyvan = "SELECT * FROM SANPHAM
                        JOIN LOAI ON SANPHAM.MALOAI = LOAI.MALOAI
                        ";
                        $ketqua = mysqli_query($conn,$truyvan) or die (mysqli_error($conn));
                        $n = mysqli_num_rows($ketqua);
                        for($i=0;$i<$n;$i++)
                        {
                            $dong=mysqli_fetch_array($ketqua);
                            if(isset($danhsach[$dong['MASP']]))
                            {
                                echo "<tr class=''>
                                    <td class='text-items'>".$dong['MASP']."</td>
                                    <td class='text-items'>".$dong['TENSP']."</td>
                                    <td class='text-items'>".number_format($dong['GIAMOI'], 0, ',', '.')." <sup><u>đ</u></sub></td>
                                    <td class='text-items'>".$danhsach[$dong['MASP']]."</td>
                                    <td class='text-items'>".number_format($dong['GIAMOI'] *$danhsach[$dong['MASP']], 0, ',', '.')." <sup><u>đ</u></sub></td>
                                    <td class='text-items'>
                                    <form method='post' action=''>
                                        <input type='hidden' name='remove_item' value='".$dong['MASP']."'/>
                                        <input type='submit' name='remove' value='Xóa'/>
                                    </form>
                                </td>
                                </tr>";
                                if (isset($_POST['remove'])) {
                                    $remove_item = $_POST['remove_item'];
                                    unset($_SESSION['giohang'][$remove_item]);
                                    echo "<meta http-equiv='refresh' content='0'>";
                                }
                                if (isset($_POST['remove_all'])) {
                                    unset($_SESSION['giohang']);
                                    echo "<meta http-equiv='refresh' content='0'>";
                                }
                                $tongtien=$tongtien+$dong['GIAMOI'] *$danhsach[$dong['MASP']];
                            }
                        }
                    ?>
                    <tr>
                        <td colspan="6" align="center" class="SUM_BUY">
                            Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.'); ?> <sup><u>đ</u></sub>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center" class="btngiohang-list">
                            
                            <form method="post" action="">
                                <button type="button" class="btngiohang-link" onclick="myFunctionIndex()">Tiếp tục mua sách</button>
                                <input type="submit" class="btn-item-gh" name="remove_all" id="btnThanhtoan" value="Thanh Toán">
                            </form>
                        </td>
                    </tr>
                </table>        
            </form>
            <script>
                function myFunctionIndex() {
                    location.replace("./index.php");//điều hướng về trang chủ
                }
                
            </script>
    </div>
</div>

<?php 
    include'./footer.php';
?>