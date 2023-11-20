<?php
function insert_account($user, $password, $email, $tel, $address, $avatar,$name,$hobby, $role)
{
    $sql = "INSERT INTO account (acc_user,acc_password,acc_email,acc_tel,acc_address,acc_avatar,acc_name,acc_hobby,role) VALUES ('$user','$password','$email','$tel','$address','$avatar','$name','$hobby','$role')";
    pdo_query($sql);
}

function loadall_account($kyw = "")
{
    $sql = "SELECT `acc_id`, `acc_user`, `acc_password`, `acc_email`, `acc_tel`, `acc_address`, `acc_avatar`, `acc_name`,`acc_hobby`,`role`  FROM account";
    if ($kyw != "") {
        $sql .= " WHERE acc_user LIKE '%$kyw%' OR acc_name LIKE '%$kyw%'";
    }
    $listaccount=pdo_query($sql);
    return $listaccount;
}
function check_account_admin($id){
    $sql = "SELECT * FROM account WHERE acc_id=$id";
    return pdo_query_one($sql);

}
function update_account_admin($id, $user, $password, $email, $tel, $address, $avatar,$name,$hobby, $role) {
    if($avatar!="")
    $sql = "UPDATE account 
            SET acc_user = '$user', acc_password = '$password', acc_email = '$email', acc_address = '$address', acc_tel = '$tel' ,acc_avatar='$avatar',acc_name='$name',acc_hobby='$hobby', role = '$role'
            WHERE acc_id = '$id'";
    else
    $sql = "UPDATE account 
            SET acc_user = '$user', acc_password = '$password', acc_email = '$email', acc_address = '$address', acc_tel = '$tel' ,acc_name='$name',acc_hobby='$hobby', role = '$role'
            WHERE acc_id = '$id'";
    pdo_execute($sql);
}
function delete_account_admin($id){
    $sql = "DELETE FROM account WHERE `account`.`acc_id` = $id";
    pdo_execute($sql);
}
?>
