<?php
function loadall_comment(){
    $sql = "SELECT c.cmt_id, a.acc_name, m.movie_name,c.content, c.date
    FROM comment c
    JOIN account a ON c.acc_id = a.acc_id
    JOIN movie m ON c.movie_id = m.movie_id
    ";

    $result = pdo_query($sql);
    return $result;
}
function delete_comment($id)
{

    $sql = "delete from comment where cmt_id=" . $id;
    pdo_execute($sql);
}
?>