<?php
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
$query_pro = mysqli_query($mysqli,$sql_pro);
 
?>

<!-- hàm xử lý chuỗi -->
<?php
function _substr($str, $length, $minword = 3)
{
    $sub = '';
    $len = 0;
    foreach (explode(' ', $str) as $word) {
        $part = (($sub != '') ? ' ' : '') . $word;
        $sub .= $part;
        $len += strlen($part);
        if (strlen($word) > $minword && strlen($sub) >= $length) {
            break;
        }
    }
    return $sub . (($len < strlen($str)) ? '...' : '');
}
?>

<div class="row d-block">
    <h3 class=" text-center  text-danger">Danh sách sản phẩm  <?php echo $_POST['tukhoa']; ?></h3>
</div>

<div class="row col-12 pb-4">
    <?php
    while($row = mysqli_fetch_array($query_pro)){
    ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-3 d-block">
            <div class="card" style="width: 18rem;">

                <img height="180px" class="card-img-top" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="Card image cap">
                <div class="card-body text-center bg-primary  ">
                <h5 class="card-title">Điện thoại : <?php echo _substr($row['tensanpham'], 5) ?></h5>
                    <div class="card-text row">
                        <span style="margin: auto;" class="float-left col-4 text-right">Giá : </span>
                        <span style="font-size: 20px;" class="text-danger font-weight-bold col-8 text-left"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></span>
                    </div>
                    
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="btn btn-danger">Xem chi tiết</a>
                </div>

            </div>
        </div>
    <?php } ?>
</div>