<?php
session_start();
include('../../admincp/config/config.php');
require('../../mail/sendmail.php');
$id_khachhang = $_SESSION['id_khachhang'];
$code_oder = rand(0, 9999);
$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('" . $id_khachhang . "','" . $code_oder . "',1)";
$cart_query = mysqli_query($mysqli, $insert_cart);
if ($cart_query) {
    //insert gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_oder_details = "INSERT INTO  tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('" . $id_sanpham . "','" . $code_oder . "','" . $soluong . "')";
        mysqli_query($mysqli, $insert_oder_details);
    }
    $tieude = "Đặt hàng website bán hàng online thành công!";
    $noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng : " . $code_oder . "</p>";
    $noidung .= "<h4>Đơn hàng đặt bao gồm :</h4p>";

    foreach($_SESSION['cart'] as $key => $val){
        $noidung.= "<ul style='border:1px solid blue;margin:10px;'>
            <li>Tên sản phẩm : ".$val['tensanpham']."</li>
            <li>Mã sản phẩm : ".$val['masp']."</li>
            <li>Số lượng : ".$val['soluong']." cái</li>
            <li>Giá sản phẩm : ".number_format($val['giasp'],0,',','.')." vnđ</li>
            
            </ul>";
    }

    $maildathang = $_SESSION['email'];
    $mail = new Mailer();
    $mail->dathangmail($tieude, $noidung, $maildathang);
}
unset($_SESSION['cart']);
header('Location:../../index.php?quanly=camon');


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>