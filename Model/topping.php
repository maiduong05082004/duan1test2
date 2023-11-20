<?php
function loadall_topping()
{
    $sql= "SELECT `topping_id`, `topping_name`, `topping_image`, `topping_price`, `topping_size` FROM `topping`";
    $listtopping=pdo_query($sql);
    return $listtopping;
}
function check_topping_admin($id){
    $sql = "SELECT * FROM topping WHERE topping_id=$id";
    return pdo_query_one($sql);

}
?>