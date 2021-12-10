<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			//header('Location:index.php?quanly=giohang');
		}
	}
?>
<h3 class="text-center text-danger">Đăng ký tài khoản</h3>
<hr>
<form class="col-8" action="" method="POST">
    <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" name="hovaten" class="form-control" placeholder="Họ và tên">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="email">
    </div>
    <div class="form-group">
        <label">Điện thoại</label>
            <input type="text" name="dienthoai" class="form-control" placeholder="số điện thoại">
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
    </div>
    <div class="form-group">
        <label>Mật khẩu</label>
        <input type="password" name="matkhau" class="form-control" placeholder="mật khẩu">
    </div>
    <div class="col-12">
        <button type="submit" name="dangky" class="btn btn-success text-center ">Đăng ký</button>
        <a href="index.php?quanly=dangnhap">Đăng nhập nếu bạn đã có tài khoản</a>
    </div>

</form>