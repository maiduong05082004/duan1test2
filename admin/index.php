<?php
include "controllers/admin.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "showaccount":
            if (isset($_POST["listok"]) && $_POST["listok"]) {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            $listaccount = loadall_account($kyw);
            include "Account/show_account.php";
        break;
        case "addaccount":
            if (isset($_POST["addaccount"]) && ($_POST["addaccount"])) {
                $firstName = $_POST['firstname'];
                $lastName = $_POST['lasttname'];
                $fullName = $firstName . ' ' . $lastName ?? '';
                $user = $_POST['nameaccount'] ?? '';
                $password = $_POST['password'] ?? '';
                $email = $_POST['email'] ?? '';
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $role = $_POST['role'] ?? '';
                $hobby = $_POST['hobby'];
                if (empty($firstName) || empty($lastName) || empty($user) || empty($password) || empty($email)) {
                    $thongbao = "Vui lòng nhập đủ thông tin bắt buộc.";
                } else {
                    $avatar = $_FILES['avatar']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_account($user, $password, $email, $tel, $address, $avatar, $fullName, $hobby, $role);
                    $thongbao = "thêm tài khoản thành công";
                }
            }
            include "Account/add_account.php";
            break;
        case "updateaccount":
            if (isset($_POST['id'])) {
                $id = $_GET['id'];
                $account = check_account_admin($id);
            }
            include "Account/update_account.php";
            break;
        case 'editkh':
            if (isset($_POST['btn_updatekh'])) {
                $id = $_POST['id'];
                $user = $_POST['nameaccount'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                $name = $_POST['name'];
                $password = $_POST['password'];
                $hobby = $_POST['hobby'];
                $avatar = $_FILES['avatar']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_account_admin($id, $user, $password, $email, $tel, $address, $avatar, $name, $hobby, $role);
                $thongbao = "Sửa thành công";
            }
            $listaccount = loadall_account($kyw = "");
            require 'Account/show_account.php';
            break;
        case 'xoaaccount':
            $id = $_GET['id'];
            delete_account_admin($id);
            $listaccount = loadall_account($kyw = "");
            $thongbao = "Xóa thành công";
            include 'Account/show_account.php';
            break;
        case 'showcomment':
            $listcomment = loadall_comment();
            include "Account/comment_account.php";
            break;
        case 'xoacomment':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_comment($_GET['id']);
            }
            $listcomment = loadall_comment();
            include "Account/comment_account.php";
        break;
        case "showmovie":
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $genre_id = $_POST['genre_id'];
            } else {
                $kyw = "";
                $genre_id = 0;
            }
            $listtheloai = loadall_theloai();
            $listphim = loadall_phim($kyw, $genre_id);
            include "movie/show_movie.php";
        break;
        case 'showtopping':
            $listtopping = loadall_topping();
            include "Topping/show_topping.php";
        break;
        case "updatetopping":
            if (isset($_POST['id'])) {
                $id = $_GET['id'];
                $account = check_topping_admin($id);
            }
            include "Topping/upload_topping.php";
            break;
        case 'edittopping':
            $listtopping = loadall_topping();
            include "Topping/show_topping.php";
        break;
        case "thongke":
            $soLuongPhim = load_soluong_phim_dm();
            $doanhthu = load_doanhthu();
            include "thongke/thongkepage.php";
        break;
    }
} else {
    include "home.php";
}

include "footer.php";
