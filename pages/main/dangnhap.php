
<?php 
    
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['email'] = $row_data['email'];
			$_SESSION['id_khachhang'] = $row_data['id_khachhang'];
            echo '<div class="alert alert-primary" role="alert">
            Bạn đã đăng nhập thành công
          </div>';
			//header("Location:index.php?quanly=giohang");
            
        }else{
            echo '<div class="alert alert-danger" role="alert">
            Email hoặc mật khẩu của bạn không đúng!
          </div>';
            
        }
        spl_autoload_register();
    }
?>
<div class="row">
        <div class="col-4"></div>
        <aside class="col-sm-4">
            
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Đăng nhập</h4>
                    <hr>
                    <form action=""  method="post">
                        <div class="form-group">
                            <input name="email" class="form-control" placeholder="email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input class="form-control" name="password" placeholder="******" type="password">
                        </div> <!-- form-group// -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" name="dangnhap" class="btn btn-primary btn-block"> Đăng nhập </button>
                                </div> <!-- form-group// -->
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="small" href="#">Forgot password?</a>
                            </div>
                        </div> <!-- .row// -->
                    </form>
                </article>
            </div> <!-- card.// -->
        </aside> <!-- col.// -->
        <div class="col-4"></div>
    </div> <!-- row.// -->