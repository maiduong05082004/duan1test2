<form action="index.php?act=addaccount" method="post" enctype="multipart/form-data" class="form-add">
    <div class="container-add">
        <div class="avatar-section-add">
            <div class="avatar-content-add">
                <img src="../upload/images.png" alt="Avatar" class="avatar-image" width="300px">
            </div>
            <div class="avatar-add">Avatar</div>
            <input type="file" id="avatar" name="avatar" accept="image/*" class="avatar-input" onchange="previewAvatar()">
        </div>
        <div class="form-section-add">
            <div class="input-group-add">
                <div class="name">Tên</div>
                <input type="text" class="firstname-add" id="firstname" name="firstname" placeholder="Họ">
                <input type="text" id="lasttname" name="lasttname" placeholder="Tên">
            </div>
            <div class="input-group-add">
                <div class="nameaccount">Tài khoản</div>
                <input type="text" id="nameaccount" name="nameaccount" placeholder="">
                <textarea id="text" class="text" rows="4" cols="48" name="hobby" placeholder="Sở thích"></textarea>
            </div>
            <div class="input-group-add">
                <div class="password">Password</div>
                <input type="password" id="password" name="password" placeholder="Duong1234@">
            </div>
            <div class="input-group-add">
                <div class="email">Email</div>
                <input type="email" id="email" name="email" placeholder="mai123@gmail.com">
            </div>
            <div class="input-group-add">
                <div class="phone">Phone</div>
                <input type="tel" id="phone" name="tel" placeholder="+84">
            </div>
            <div class="input-group-add">
                <div class="address">Địa chỉ</div>
                <input type="text" id="address" name="address" placeholder="">
            </div>
            <!-- <div class="input-group-add" name="role">
                <div>Vai trò</div>
                <input type="radio" id="admin"  value="admin">
                <label for="1">Quản trị</label>
                <input type="radio" id="manage"  value="manage">
                <label for="2">Quản lý</label>
                <input type="radio" id="user"  value="user">
                <label for="3">Khách hàng</label>
            </div> -->
            <div class="input-group-add">
                <div>Vai trò</div>
                <select class="form-select" name="role" style="border: 1px solid #b1b0b0;width: 41%;padding: 10px;border-radius: 5px;">
                    <option value="1">Quản trị</option>
                    <option value="2">Quản lý</option>
                    <option value="3">Khách hàng</option>
                </select>
                
            </div>
            <a href="index.php?act=showaccount"> <input class="submit-btn" type="button" value="Xem tài khoản"></a>
            <input class="submit-btn" type="submit" value="Thêm tài khoản" name="addaccount">
            <button type="reset" class="submit-btn">Nhập lại</button>
            <div style="margin:10px;color:black">
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
            </div>
        </div>
    </div>
</form>