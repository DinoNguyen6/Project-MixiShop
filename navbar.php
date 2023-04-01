<!-- -----------NAVBAR------------ -->
<nav class="navbar">
            <div class="grid">
                <div class="navbar-list">
                    <div class="grid__row">
                        <div class="grid__column-2">
                            <a href="./index.php"><img src="./assets/img/logo-mixi-tét.png" alt=""></a>
                        </div>
                        <div class="grid__column-5">
                            <form method="post" action="timkiem.php" class="navbar-seach">
                                <input type="text" onkeyup="myKeyup()" name="txtsearch" placeholder="Tìm kiếm..." autocomplete="off">
                                <button name="btntim">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                
                            </form>
                        </div>
                        <div class="grid__column-3">
                        <div class="account-list">
                            <?php 

                            // session_start();
                            
                                if (isset($_SESSION['tendangnhap']) && $_SESSION['tendangnhap'])
                                {
                                //echo "<div><a href='dangxuat.php'>Đăng xuất</a></div>";
                                if (isset($_SESSION['loainguoidung']) && $_SESSION['loainguoidung']=='admin')
                                {
                                    echo "<div class='navv-link'>
                                            <a href='#!'class='navbar-link'>Quản lý Admin</a>
                                            <ul class='list-items'>
                                                <li>
                                                    <a href='./quanlyshopmixibox/quanlynguoidung.php' class='menu-link'>Quản lý người dùng</a>
                                                </li>
                                                <li>
                                                    <a href='./quanlyshopmixibox/quanlysanpham.php' class='menu-link'>Quản lý sách</a>
                                                </li>
                                                <li>
                                                    <a href='./quanlyshopmixibox/quanlyloaisanpham.php' class='menu-link'>Quản lý loại sách</a>
                                                </li>
                                            </ul>
                                        </div>";
                                }
                                if (isset($_SESSION['loainguoidung']) && $_SESSION['loainguoidung']=='user')
                                {
                                    if (isset($_SESSION['loainguoidung']) && $_SESSION['loainguoidung']=='user')
                                    {
                                        $kt=1;
                                        if(isset($_SESSION['giohang']))
                                        {
                                            foreach($_SESSION['giohang'] as $k => $v)
                                            {
                                                if(isset($v))
                                                {
                                                    $kt=2;
                                                }
                                            }
                                        }
                                        if($kt!=2)
                                        {
                                            echo 'Chưa có hàng';
                                        }
                                        else
                                        {
                                            $sachchon=$_SESSION['giohang'];
                                            // echo "<a href='giohang.php'> ".count($sachchon)." món hàng </a>";
                                            echo "<div class='giohang-list'>
                                                <a href='giohang.php'>
                                                    <i class='fa-solid fa-bag-shopping account-items giohang-cart'></i>
                                                    <a href='giohang.php' class='number-sp'> ".count($sachchon)." </a>
                                                </a>
                                            </div>";
                                        }
                                    }
                                }
                                echo "<div class='list-log-out'>
                                        <i class='fa-solid fa-user log-out'></i>
                                        <div class='log-out-items'>
                                        <p id='dn'>".$_SESSION['tendangnhap']."</p>
                                            <a href='dangxuat.php' class='dangxuat'>Đăng xuất</a>
                                        </div>
                                </div>
                                ";
                                }
                                else{
                                echo "<div class='account-items'>
                                        <i class='fa-solid fa-right-to-bracket'></i>
                                        <a href='./dangnhap.php'>Đăng Nhập</a>
                                    </div>";
                                echo "<div class='account-items'>
                                        <i class='fa-regular fa-pen-to-square'></i>
                                        <a href='./dangki.php'>Đăng Ký</a>
                                    </div>";
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>