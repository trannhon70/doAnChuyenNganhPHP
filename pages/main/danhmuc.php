<?php

$sql_pro = "SELECT * FROM  tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//get tên danh mục  
$sql_cate = "SELECT * FROM  tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>


<!-- cắt chuỗi -->
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
    <h3 class=" text-center  text-danger">Danh sách điện thoại : <?php echo $row_title['tendanhmuc'] ?></h3>
</div>

<div class="row col-12 pb-4">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-3 d-block">
            <div class="card" style="width: 18rem;">

                <img height="180px" class="card-img-top" src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                <div class="card-body text-center bg-primary  ">
                    <h5 class="card-title">Điện thoại : <?php echo _substr($row_pro['tensanpham'],5) ?></h5>
                    <div class="card-text row">
                        <span style="margin: auto;" class="float-left col-4 text-right">Giá : </span>
                        <span style="font-size: 20px;" class="text-danger font-weight-bold col-8 text-left"><?php echo number_format($row_pro['giasp'], 0, ',', '.') . 'vnđ' ?></span>
                    </div>

                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="btn btn-danger">Xem chi tiết</a>
                </div>

            </div>
        </div>
    <?php } ?>
</div>