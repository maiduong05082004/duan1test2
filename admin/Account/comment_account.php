<div class="admin-content">
        <h1>Comment Users</h1>
        <div class="search-container">
            <input type="text" placeholder="Tìm kiếm..." class="search-input">
            <button class="search-btn">Tìm kiếm</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Người gửi</th>
                    <th>Phim</th>
                    <th>Nội dung</th>
                    <th>Ngày gửi</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listcomment as $comment) {
                extract($comment);
                $xoatk = "index.php?act=xoacomment&id=" . $cmt_id;
                echo '<tr>
                        <td>' . $acc_name . '</td>
                        <td>' . $movie_name . '</td>
                        <td>' . $content . '</td>
                        <td>' . $date . '</td>
                        <td>
                            <a href="' . $xoatk . '"><button class="submit-btn">Xóa</button></a>
                            <a href="' . $xoatk . '"><button class="submit-btn">block user</button></a>
                        </td>
                    </tr>';
            }
            ?>
                <tr>
                    <td>Nguyễn Văn A</td>
                    <td>The Mystery of the Ancient</td>
                    <td>Tôi rất hài lòng với sản phẩm!</td>
                    <td>01-11-2023</td>
                    <td>
                    <button class="submit-btn">Xóa</button>
                        <button class="submit-btn">block user</button>
                    </td>
                </tr>
                <tr>
                    <td>Nguyễn Long An</td>
                    <td>The Mystery of the Ancient</td>
                    <td>Tôi rất hài lòng với sản phẩm!</td>
                    <td>01-11-2023</td>
                    <td>
                    <button class="submit-btn">Xóa</button>
                        <button class="submit-btn">block user</button>
                    </td>
                </tr>
                <tr>
                    <td>Vũ Minh Long</td>
                    <td>The Mystery of the Ancient</td>
                    <td>Tôi rất hài lòng với sản phẩm!</td>
                    <td>01-11-2023</td>
                    <td>
                        <button class="submit-btn">Xóa</button>
                        <button class="submit-btn">block user</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>