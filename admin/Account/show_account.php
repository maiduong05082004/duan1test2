<div class="admin-content">
    <h1>Danh sách tài khoản khách hàng</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="search-container">
            <input type="text" placeholder="Tìm kiếm..." class="search-input" name="kyw">
            <button class="search-btn" name="listok">Tìm kiếm</button>
        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Sở thích</th>
                <th>Vai trò</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listaccount as $account) {
                extract($account);
                $suatk = "index.php?act=updateaccount&id=" . $acc_id;
                $xoatk = "index.php?act=xoaaccount&id=" . $acc_id;
                $hinhpart = "../upload/" . $acc_avatar;
                if (is_file($hinhpart)) {
                    $avatar = "<img src='" . $hinhpart . "' height='90px' width='90px'>";
                } else {
                    $avatar = "no poto";
                }
                switch ($role) {
                    case 1:
                        $roleText = "Admin";
                        break;
                    case 2:
                        $roleText = "Quản lý";
                        break;
                    case 3:
                        $roleText = "Khách hàng";
                        break;
                    default:
                        $roleText = "Vai trò không xác định";
                }
                echo '<tr>                                <td>' . $avatar . '</td>
                                <td>' . $acc_user . '</td>
                                <td>' . $acc_password . '</td>
                                <td>' . $acc_name . '</td>
                                <td>' . $acc_email . '</td>
                                <td style="width: 300px;">' . $acc_address . '</td>
                                <td>' . $acc_tel . '</td>
                                <td>' . $acc_hobby . '</td>
                                <td>' . $roleText . '</td>
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