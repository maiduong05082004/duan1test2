<div class="admin-content">
    <h1>Danh sách phim</h1>
    <form action="index.php?act=showmovie" method="post">
                <input type="text"  placeholder="Tìm kiếm..." class="search-input" name="kyw" id="">
                <select name="genre_id" style="width: 105px;margin: 46px 10px;padding: 7px;border-radius: 5px;border: 1px solid #bdc3c7;">
                    <option value="" selected>Tất cả</option>
                    <?php
                    foreach ($listtheloai as $theloai) {    
                        extract($theloai);
                        echo '<option value="' . $genre_id . '">' . $genre_name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="OK" class="search-btn">

        </form>
        <table>
        <thead>
            
            <tr>
                <th>Mã Phim</th>
                <th>Tên Phim</th>
                <th>Mô tả</th>
                <th>Đánh giá</th>
                <th>Giá vé</th>
                <th>Thể loại</th>
                <th>Ảnh</th>
                <th>Giờ chiếu</th>
                <th>Vé đã bán</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listphim as $phim) {
                extract($phim);
                $xoaphim = "index.php?act=xoaphim&movie_id=".$movie_id;
                $suaphim = "index.php?act=suaphim&movie_id=".$movie_id;
                $hinhpath = "../upload/".$image;
                if(is_file($hinhpath)){
                    $hinhpath="<img src='".$hinhpath."' height='80'>";
                }else{
                    $hinhpath="Không có ảnh!";
                }

                echo '<tr>
                            <td>' . $movie_id . '</td>
                            <td>' . $movie_name . '</td>
                            <td>' . $movie_description . '</td>
                            <td>' . $movie_evaluate . '</td>
                            <td>' . $ticket_price . '</td>
                            <td>' . $genre_id . '</td>
                            <td>' . $hinhpath . '</td>
                            <td>' . $id_showtime . '</td>
                            <td>' . $tickets_sold . '</td>
                            <td><a href="'.$suaphim.'"><button class="edit-btn">Sửa</button></a></td>
                            <td><a href="'. $xoaphim.'"><button class="delete-btn">Xóa</button></a>
                            </td>
                     </tr>';
            }

            ?>
        </tbody>
    </table>
    <a href="index.php?act=addphim"> <input class="submit-btn" id="btn" type="button" value="NHẬP THÊM"></a>
</div>