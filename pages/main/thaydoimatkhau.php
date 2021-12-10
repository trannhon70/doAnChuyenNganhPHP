
<?php 
    
    if(isset($_POST['doimatkhau'])){
        if(isset($_POST['doimatkhau'])){
            $taikhoan = $_POST['email'];
            $matkhau_cu = md5($_POST['password_cu']);
            $matkhau_moi = md5($_POST['password_moi']);
            $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);
            if($count>0){
                $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
                echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
            }else{
                echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
            }
        } 
    }
?>
<div class="row">
        <div class="col-4"></div>
        <aside class="col-sm-4">
            
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Đổi mật khẩu</h4>
                    <hr>
                    <form action=""  method="post">
                        <div class="form-group">
                            <input name="email" class="form-control" placeholder="Email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input class="form-control" name="password_cu" placeholder="Mật khẩu cũ" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input class="form-control" name="password_moi" placeholder="Mật khẩu mới" type="text">
                        </div> <!-- form-group// -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" name="doimatkhau" class="btn btn-primary btn-block"> Đổi mật khẩu </button>
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