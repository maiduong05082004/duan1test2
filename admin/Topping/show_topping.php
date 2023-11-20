<div class="admin-content">
    <h1>Danh sách topping của rạp</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="search-container">
            <input type="text" placeholder="Tìm kiếm..." class="search-input" name="kyw">
            <button class="search-btn" name="listok">Tìm kiếm</button>
        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th style="width: 230px;">Ảnh</th>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th style="width: 50px;">Sửa</th>
                <th style="width: 50px;">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listtopping as $topping) {
                extract($topping);
                $suatk = "index.php?act=updateaccount&id=" . $topping_id;
                $xoatk = "index.php?act=xoaaccount&id=" . $topping_id;
                $hinhpart = "../upload/" . $topping_image;
                if (is_file($hinhpart)) {
                    $image = "<img src='" . $hinhpart . "' height='130px' width='180px'>";
                } else {
                    $image = "no poto";
                }
                
                echo '<tr>                                
                        <td>' . $image . '</td>
                        <td>' . $topping_name . '</td>
                        <td>' . $topping_price . '</td>
                        <td>' . $topping_size . '</td>
                        <td>
                            <a href="' . $suatk . '"><input type="button" class="submit-btn" value="Sửa"></a> 
                        </td>
                        <td>
                            <a href="' . $xoatk . '"><input type="button" class="submit-btn" value="Xóa"></a>
                        </td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?act=addaccount"> <input class="submit-btn" id="btn" type="button" value="NHẬP THÊM"></a>
</div>