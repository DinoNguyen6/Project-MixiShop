<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM MỚI DỮ LIỆU</title>
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
    <form action="xulydulieu.php" method="post" class="appQLS">
    <div class="grid">
            <div class="grid__row">
                <div class="grid__column-25">
                    <div class="background-left-admin">
                        <a href="#!" class="namequanly">QUẢN LÝ ADMIN</a>
                        <div class="quanly-admin">
                            <a href="../index.php" class="vetrangchu">Về Trang chủ</a>
                            <a href="./quanlysanpham.php" class="vetrangchu">Quản lý sản phẩm</a>
                            <a href="./quanlyloaisanpham.php" class="vetrangchu">Quản lý loại sản phẩm</a>
                        </div>
                    </div>

                </div>
                <div class="grid__column-75">
                <table class="table-list-QL">
                    <caption>THÊM DỮ LIỆU SẢN PHẨM</caption>
                    <tr class="list-items-one">
                        <td>MÃ SẢN PHẨM</td>
                        <td><input type="text" class="inputthemdulieusach" id="txtMASP" name="txtMASP" value=""></td>
                    </tr>
                    <tr class="list-items-one">
                        <td>MÃ lOẠI SẢN PHẨM</td>
                        <td><input type="text" class="inputthemdulieusach" id="txtMALOAI" name="txtMALOAI" value=""></td>
                    </tr>
                    <tr class="list-items-one">
                        <td>TÊN SẢN PHẨM</td>
                        <td><input type="text" class="inputthemdulieusach" id="txtTENSP" name="txtTENSP" value=""></td>
                    </tr>

                    <tr class="list-items-one">
                        <td>HÌNH ẢNH</td>
                        <td>
                            <input type="file" class="inputthemdulieusach" id="txtHINH" name="txtHINH" value="" >
                        </td>
                    </tr>
                    <tr class="list-items-one">
                        <td>GIÁ MỚI</td>
                        <td><input type="number" class="inputthemdulieusach" id="txtGIAMOI" name="txtGIAMOI" value=""></td>
                    </tr>
                    <tr class="list-items-one">
                        <td>GIÁ CŨ</td>
                        <td><input type="number" class="inputthemdulieusach" id="txtGIACU" name="txtGIACU" value=""></td>
                    </tr>
                    <tr class="list-items-one">
                        <td>LOẠI SẢN PHẨM</td>
                        <td>
                        <select name="txtLOAISP" id="txtLOAISP" class="inputthemdulieusach">
                                    <option value="manual">ÁO</option>
                                    <option value="best-selling">QUẦN</option>
                                    <option value="title-ascending">SET MÙA ĐÔNG</option>
                                    <option value="title-descending">SET MÙA THU</option>
                                    <option value="price-ascending">ÁO HOODIE</option>
                                    <option value="price-descending">ÁO LEN</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="list-items-one">
                        <td>MÔ TẢ SẢN PHẨM</td>
                        <td><input type="text" class="inputthemdulieusach" id="txtMOTASP" name="txtMOTASP" value=""></td>
                    </tr>
                    <tr class="list-items-one">
                        <td colspan="2" align="center">
                            <input type="submit" name="btnSave" class="inputthemdulieusach" id="btn" value="SAVE">
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
       
    
    </form>
</body>
</html>