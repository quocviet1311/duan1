<?php
function insert_danhmuc($tenloai)
{
    $sql = "insert into danh_muc(ten_danh_muc) values('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danh_muc order by ten_danh_muc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_danhmuc($tenloai)
{
    $sql = "delete from danh_muc where id_danh_muc=" . $tenloai;
    pdo_execute($sql);
}
function loadone_danhmuc($id_danh_muc)
{
    $sql = "select * from danh_muc where id_danh_muc=" . $id_danh_muc;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "update danh_muc set ten_danh_muc='" . $tenloai . "' where id_danh_muc=" . $id;
    pdo_execute($sql);
    //làm việc
}
