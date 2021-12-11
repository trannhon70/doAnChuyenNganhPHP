
<?php 
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";

        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else{
            echo '<scripts>alert("Tài khoản hoặc mật khẩu của bạn không đúng, vui lòng nhập lại !");</scripts>';
            header("Location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <title>Đăng nhập Admin</title>

</head>

<body>
    
    <div class="row">
        <div class="col-4 p-4">
            <h4 class="">Tài khoản : admin</h4>
            <h4>password : 123456</h4>
        </div>
        <aside class="col-sm-4">
            <p style="padding-bottom: 150px;"></p>
            <div class="card">
                <article class="card-body">
                    <!-- <a href="" class="float-right btn btn-outline-primary">Đăng ký</a> -->
                    <h4 class="card-title mb-4 mt-1">Đăng nhập admin</h4>
                    <!-- <p>
                        <a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                        <a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                    </p> -->
                    <hr>
                    <form action=""  method="post">
                        <div class="form-group">
                            <input name="username" class="form-control" placeholder="Tài khoản" type="text">
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





    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</body>

</html>