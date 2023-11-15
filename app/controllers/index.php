<?php
include "../models/connect.php";
include "../models/pdo.php";
include "../models/danhmuc.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case "themdanhmuc":
            include "danhmuc/themdanhmuc.php";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "thêm thành công";
            } else {
                $thongbao = "Lỗi";
            }
            break;

        case "home":
            include "home.php";
            break;
        case "danhsachdanhmuc":
            $list = loadall_danhmuc();
            include "danhmuc/danhsachdanhmuc.php";
            break;
        case "xoadanhmuc":
            if(isset($_GET['id_danh_muc'])&&($_GET['id_danh_muc']>0)){
                delete_danhmuc($_GET['id_danh_muc']);
            }
            $list = loadall_danhmuc();
            include "danhmuc/danhsachdanhmuc.php";
            break;
        case "capnhatdanhmuc":
            if(isset($_GET['id_danh_muc'])&&($_GET['id_danh_muc']>0)){    
                $dm= loadone_danhmuc($_GET['id_danh_muc']);
                 }
                 include "danhmuc/capnhatdanhmuc.php";
                 break;    
                 case 'updatedm':
                     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                         $tenloai=$_POST['tendm'];
                         $id=$_POST['id'];
                         update_danhmuc($id,$tenloai);
                         $thongbao="cập nhật thành công";}
                         $listdanhmuc=loadall_danhmuc();
                         $list = loadall_danhmuc();
                     include "danhmuc/danhsachdanhmuc.php";
                     break;
            
            break;
        case "themsanpham":
            include "sanpham/themsanpham.php";
            break;
        case "danhsachsanpham":
            include "sanpham/danhsachsanpham.php";
            break;
        case "capnhatsanpham":
            include "sanpham/capnhatsanpham.php";
            break;
        case "danhsachtaikhoan":
            include "taikhoan/danhsachtaikhoan.php";
            break;
        case "themtaikhoan":
            include "taikhoan/themtaikhoan.php";
            break;
        case "danhsachdonhang":
            include "donhang/danhsachdonhang.php";
            break;
        case "chitietdonhang":
            include "donhang/chitietdonhang.php";
            break;
        case "bieudo":
            include "thongke/bieudo.php";
            break;
        case "binhluan":
            include "binhluan/binhluan.php";
            break;
        case "thongtinadmin":
            include "thongtinadmin/info.php";
            break;

        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include "footer.php";
