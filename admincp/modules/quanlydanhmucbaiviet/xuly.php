<?php

    include('../../config/config.php');
    $tendanhmucbaiviet  = $_POST['tendanhmucbaiviet'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmucbaiviet'])){
        //thêm danh mục
        $sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet,thutu) VALUE('".$tendanhmucbaiviet."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');
    }
    else if(isset($_POST['suadanhmucbaiviet']))
    {
        //sửa danh mục
        $sql_update = "UPDATE tbl_danhmucbaiviet SET tendanhmuc_baiviet='".$tendanhmucbaiviet."', thutu='".$thutu."' WHERE id_baiviet='$_GET[idbaiviet]'";
        mysqli_query($mysqli,$sql_update);
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');

    }
    else {
        //xóa danh mục
        $id = $_GET['idbaiviet'];
        $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet='".$id."'";
        mysqli_query($mysqli,$sql_xoa);    
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');
    }
?>