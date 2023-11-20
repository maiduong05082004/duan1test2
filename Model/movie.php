<?php
function loadall_theloai()
{
    $sql = "SELECT * FROM movie_genre ORDER BY genre_name";
    $listtheloai = pdo_query($sql);
    return $listtheloai;
}
function loadall_phim($kyw,$genre_id)
{
    $sql = "select * from movie where 1";
    if($kyw != ""){
        $sql.=" and movie_name like '%".$kyw."%'";
    }
    if($genre_id>0){
        $sql.=" and genre_id like '".$genre_id."'";
    }
    $sql.=" order by movie_name";
    pdo_execute($sql);
    $listphim = pdo_query($sql);
    return $listphim;
}
?>