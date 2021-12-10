<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<?php 
  if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
    
  }
?>
        
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <div>
        <img style="width: 100px; height: 50px;" src="https://iweb.tatthanh.com.vn/pic/3/blog/images/logo-shop-dien-thoai-7.jpg" class="img-fluid"  alt="Responsive image">
    </div>
  <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php?quanly=tintuc">Tin tức <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?quanly=lienhe">Liên hệ</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?quanly=giohang">Giỏ hàng</a>
      </li>
      <?php
        if(isset($_SESSION['dangky'])){
      ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?dangxuat=1">Đăng xuất</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a>
      </li>
      <?php }else{ ?>
        <li class="nav-item">
        <a class="nav-link text-white" href="index.php?quanly=dangky">Đăng ký</a>
      </li>
      <?php }?>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="post">
      <input class="form-control mr-sm-2" type="search" name="tukhoa" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="timkiem"  type="submit">Tìm kiếm</button>
    </form>
  </div>
</nav>