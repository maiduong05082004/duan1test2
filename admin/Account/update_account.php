<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tk = check_account_admin($id);
    extract($tk); 
}
?>
<form action="index.php?act=editkh" method="post" enctype="multipart/form-data" class="form-add">
    <div class="container-add">
        <div class="avatar-section-add">
        <div class="avatar-content-add">
    <?php
        if (isset($acc_avatar) && $acc_avatar != "") {
            $avatar_path = "../upload/" . $acc_avatar; 
        } else {
            $avatar_path = "../upload/images.png";
        }
    ?>
    <img src="<?= $avatar_path ?>" alt="Avatar" class="avatar-image
            </div>
            <div class="avatar-add">Avatar</div>
            <input type="file" id="avatar" name="avatar" accept="image/*" class="avatar-input" onchange="previewAvatar()">
        </div>
        <div class="form-section-add">
            <div class="input-group-add">
                <div class="name">Tên</div>
                <input type="text" class="firstname-add" id="firstname" name="name" value="<?= $acc_name ?>">
                <input type="text" id="lasttname" name="hobby" value="<?=$acc_hobby ?>">
            </div>
            <div class="input-group-add">
                <div class="nameaccount">Tài khoản</div>
                <input type="text" id="nameaccount" name="nameaccount" value="<?= $acc_user ?>">
            </div>
            <div class="input-group-add">
                <div class="password">Password</div>
                <input type="password" id="password" name="password" value="<?= $acc_password ?>">
            </div>
            <div class="input-group-add">
                <div class="email">Email</div>
                <input type="email" id="email" name="email" value="<?= $acc_email ?>">
            </div>
            <div class="input-group-add">
                <div class="phone">Phone</div>
                <input type="tel" id="phone" name="tel" value="<?= $acc_tel ?>">
            </div>
            <div class="input-group-add">
                <div class="address">Địa chỉ</div>
                <input type="text" id="address" name="address" value="<?= $acc_address ?>">
            </div>

            <div class="input-group-add">
                <div>Vai trò</div>
                <select class="form-select" name="role" style="border: 1px solid #b1b0b0;width: 41%;padding: 10px;border-radius: 5px;">
                    <option value="1" <?php if ($role == 1) echo 'selected'; ?>>Quản trị</option>
                    <option value="2" <?php if ($role == 2) echo 'selected'; ?>>Quản lý</option>
                    <option value="3" <?php if ($role == 3) echo 'selected'; ?>>Khách hàng</option>
                </select>
                
            </div>
            <input type="hidden" name="id" value="<?= $id ?>">
            <a href="index.php?act=showaccount"> <input class="submit-btn" type="button" value="Xem tài khoản"></a>
            <input class="submit-btn" type="submit" value="Sửa tài khoản" name="btn_updatekh">
            <button type="reset" class="submit-btn">Nhập lại</button>
            <div style="margin:10px;color:black">
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
            </div>
        </div>
    </div>
</form>