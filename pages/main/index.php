<?php

if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 4) - 4;
}
$sql_pro = "SELECT * FROM  tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,4";
$query_pro = mysqli_query($mysqli, $sql_pro);


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
    <h3 class=" text-center  text-danger">Sản phẩm mới nhất</h3>
</div>

<div class="row col-12 pb-4">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-3 d-block">
            <div class="card" style="width: 18rem;">

                <img height="180px" class="card-img-top" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="Card image cap">
                <div class="card-body text-center bg-primary  ">
                    <h5 class="card-title">Thương hiệu : <?php echo $row['tendanhmuc'] ?></h5>
                    <div class="card-text row">
                        <span style="margin: auto;" class="float-left col-4 text-right">Giá : </span>
                        <span style="font-size: 20px;" class="text-danger font-weight-bold col-8 text-left"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></span>
                    </div>
                    <h5 class="card-title">Điện thoại : <?php echo _substr($row['tensanpham'], 5) ?></h5>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="btn btn-danger">Xem chi tiết</a>
                </div>

            </div>
        </div>
    <?php } ?>
</div>

<style type="text/css">
    ul.list_trang {
        padding: 0;
       
        list-style: none;
    }

    ul.list_trang li {
        float: left;
        padding: 5px 13px;
        margin: 5px;
        background: burlywood;
    }

    ul.list_trang li a {
        color: #000;
        text-align: center;
        text-decoration: none;
        display: block;
    }
</style>

<!-- Phân trang -->
<?php

$sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count / 4)
?>
<div class=" pt-4 container">
    <div class="row ">
        <ul class="list_trang col-12 ">
            <?php
            for ($i = 1; $i <= $trang; $i++) {
            ?>
                <li class="ml-10" <?php if ($i == $page) {
                        echo 'style="background: brown; "';
                    } else {
                        echo '';
                    }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>