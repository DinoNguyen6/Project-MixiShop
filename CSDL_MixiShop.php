<?php 
    include 'ketnoi.php' ;
    $conn=MoKetNoi();
    if($conn->connect_error)
    {
        echo "không kết nối được MySQL";
    }
    //Tạo database NGUOIDUNG
    $sql="CREATE DATABASE IF NOT EXISTS CSDL_MixiShop";
    if(mysqli_query($conn,$sql))
    {
        echo "Thành công tạo database CSDL_MixiShop rồi nha";
    }
    else
    {
        echo "không tạo được database CSDL_MixiShop ".mysqli_error($conn);
    }
    //chọn mở database CSDL_MIXISHOP
        mysqli_select_db($conn,"CSDL_MixiShop");
    //Tạo bảng NGUOIDUNG
    $NGUOIDUNG = "CREATE TABLE IF NOT EXISTS NGUOIDUNG (
        TENDANGNHAP varchar(20) NOT NULL,
        MATKHAU varchar(255) NOT NULL,
        HOTEN varchar(255) NOT NULL,
        DIACHI varchar(255) NOT NULL,
        SDT int(10) default 0,
        EMAIL varchar (255) NOT NULL,
        PHANLOAI varchar (20) default 'user',
        PRIMARY KEY (TENDANGNHAP,SDT))";
    $results = mysqli_query($conn,$NGUOIDUNG)or die (mysqli_error($conn));
    $DataNGUOIDUNG="INSERT INTO NGUOIDUNG (TENDANGNHAP,MATKHAU,HOTEN,DIACHI,SDT,EMAIL,PHANLOAI)".
                    "VALUES ('admin123', 'admin123', 'Nguyễn Hữu Bằng', '123 acb', 1234567890, '123a@','admin')";
    $results = mysqli_query($conn,$DataNGUOIDUNG) or die(mysqli_errno($conn));

    //Tao bang SANPHAM
    $SANPHAM = "CREATE TABLE IF NOT EXISTS SANPHAM (
        MASP varchar(20) primary key,
        MALOAI varchar(20) NOT NULL,
        HINH varchar(255) NOT NULL,
        TENSP varchar(255) NOT NULL,
        GIAMOI int(20) default 0,
        GIACU int(20) default 0,
        MOTASP varchar(2000) NOT NULL)";
    $results = mysqli_query($conn,$SANPHAM) or die (mysqli_error($conn));
    $DataSANPHAM = "INSERT INTO SANPHAM (MASP,MALOAI,HINH,TENSP,GIAMOI,GIACU,MOTASP)".
                    "VALUE ('ABS1','CMN','./assets/img/muathu1.jpg','ÁO BA LỖ HÍ ANH EM',299000,335000,'Sản phẩn mang thương hiệu của 1 streamer số 1 của VN trong thời điểm hiện tại, anh ấy đã cống hiến hết mình cho khán giả trong mỗi giờ live, và giờ đấy anh Phùng Thanh Độ dã cho ra mắt sẳn phẩm này có logo là Hí Anh EM, với chất liệu thoáng mắt và thoải mái'),".
                    "('ABS2','CMN','./assets/img/muathu2.jpg','ÁO PHÔNG BỘ TỘC',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS3','CMN','./assets/img/muathu3.jpg','ÁO BA LO QUẨY LÊN QNT',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS4','CMN','./assets/img/muathu4.jpg','SET THU ĐÔNG',399000, 535000,'Bộ set thu đông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS5','CMN','./assets/img/muathu5.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS6','CMN','./assets/img/muathu6.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS7','CMN','./assets/img/muathu7.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS8','CMN','./assets/img/muathu8.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS9','CMN','./assets/img/muathu9.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS10','CMN','./assets/img/muathu11.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS11','CMN','./assets/img/muathu12.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS12','CMN','./assets/img/muathu13.jpg','SET THU ĐÔNG',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    
                    "('ABS13','ADS','./assets/img/muadong1.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS14','ADS','./assets/img/muadong2.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS15','ADS','./assets/img/muadong3.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS16','ADS','./assets/img/muadong4.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS17','ADS','./assets/img/muadong5.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS18','ADS','./assets/img/muadong6.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS19','ADS','./assets/img/muadong7.jpg','SET ĐỒ MÙA THU',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS20','ADS','./assets/img/muadong8.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS21','ADS','./assets/img/muadong11.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS22','ADS','./assets/img/muadong12.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS23','ADS','./assets/img/muadong13.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS24','ADS','./assets/img/muadong14.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS25','ADS','./assets/img/muadong15.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    
                    "('ABS220','ACB','./assets/img/ao.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS26','ACB','./assets/img/ao1.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS27','ACB','./assets/img/ao2.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS28','ACB','./assets/img/ao3.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS29','ACB','./assets/img/ao4.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS211','ACB','./assets/img/ao5.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS212','ACB','./assets/img/ao6.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS213','ACB','./assets/img/ao7.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS214','ACB','./assets/img/ao8.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS215','ACB','./assets/img/ao9.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS216','ACB','./assets/img/ao10.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    
                    "('ABS217','ALN','./assets/img/aolen1.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS218','ALN','./assets/img/aolen2.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS219','ALN','./assets/img/aolen3.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS221','ALN','./assets/img/aolen4.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS222','ALN','./assets/img/aolen5.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS223','ALN','./assets/img/aolen6.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    
                    "('ABS224','BAC','./assets/img/quan1.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS225','BAC','./assets/img/quan2.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS226','BAC','./assets/img/quan3.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS228','BAC','./assets/img/quan5.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    
                    "('ABS229','AHO','./assets/img/hoodie1.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS231','AHO','./assets/img/hoodie2.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS232','AHO','./assets/img/hoodie3.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS233','AHO','./assets/img/hoodie4.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS234','AHO','./assets/img/hoodie5.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS235','AHO','./assets/img/hoodie6.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS236','AHO','./assets/img/hoodie7.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS237','AHO','./assets/img/hoodie8.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát'),".
                    "('ABS238','AHO','./assets/img/hoodie9.jpg','SET ĐỒ MÙA HÈ',299000, 335000,'ÁO Phông mang thương hiệu của MixiShop do anh Phùng Thanh Độ và cộng sự của mình lên ý tưởng với thiết kế đơn giản và thoáng mát')"
                    ;
    $results = mysqli_query($conn,$DataSANPHAM) or die (mysqli_error($conn));
    $ORDERS = "CREATE TABLE IF NOT EXISTS ORDERS (
        HOTEN varchar(50) primary key,
        MASANPHAM varchar(25) NOT NULL,
        THANHTIEN int(200) default 0,
        createDATE datetime default NULL,
        SOLUONG int(20) default 0
    )";
    $results = mysqli_query($conn,$ORDERS) or die (mysqli_error($conn));
    $DataORDERS = "INSERT INTO ORDERS (HOTEN,MASANPHAM,THANHTIEN,createDATE,SOLUONG)".
                "VALUE ('Nguyễn Hữu Bằng','ABS29',299000,'2023-03-31 14:30:00',1)";
    $results = mysqli_query($conn,$DataORDERS) or die (mysqli_error($conn));

    $LOAI = "CREATE TABLE IF NOT EXISTS LOAI (
        MALOAI varchar(20) primary key,
        LOAISP varchar(255) NOT NULL)";
    $results = mysqli_query($conn,$LOAI) or die (mysqli_error($conn));
    $DataLOAI = "INSERT INTO LOAI (MALOAI, LOAISP)".
                "VALUE ('ACB','ÁO '),".
                        "('BAC','QUẦN'),".
                        "('ADS','SET MÙA ĐÔNG'),".
                        "('CMN','SET MÙA THU'),".
                        "('AHO','ÁO HOODIE'),".
                        "('ALN','ÁO LEN')";
    $results = mysqli_query($conn,$DataLOAI) or die (mysqli_error($conn));    
?>