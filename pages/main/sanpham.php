<p style="text-align: center; font-size: 40px; font-weight: bold;">Sản phẩm chi tiết </p>
<?php

$sql_chitiet = "SELECT * FROM  tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chotiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chotiet)) {


?>
    <div class="container-fluid pb-5">
        <div class="row pb-4">
            <div class="col-12  col-md-6">
                <img style="width: 400px; height: 350px;" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
            </div>
            <form class="col-12  col-md-6 pt-2" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="post">
                <div>
                    <h3>Tên sản phẩm : <strong style="color: red;"><?php echo $row_chitiet['tensanpham'] ?></strong> </h3>
                    <h3>Mã sản phẩm : <strong style="color: red;"><?php echo $row_chitiet['masp'] ?></strong> </h3>
                    <h3>Giá sản phẩm : <strong style="color: red;"><?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . ' vnđ' ?></strong> </h3>
                    <h3>Số lượng sản phẩm : <strong style="color: red;"><?php echo $row_chitiet['soluong'] ?> cái</strong> </h3>
                    <h3>Loại sản phẩm : <strong style="color: red;"><?php echo $row_chitiet['tendanhmuc'] ?></strong> </h3>

                    <h3><input class="btn-danger p-2" type="submit" name="themgiohang" value="Thêm vào giỏ hàng"> </h3>

                </div>
            </form>
        </div>
        <div class="tabs">
            <ul id="tabs-nav">
                <li><a href="#tab1">Thông số kỹ thuật</a></li>
                <li><a href="#tab2">Nội dung chi tiết</a></li>
                <!-- <li><a href="#tab3">Hình ảnh</a></li> -->

            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="tab1" class="tab-content">
                    <?php echo $row_chitiet['tomtat'] ?>
                </div>
                <div id="tab2" class="tab-content">
                    <?php echo $row_chitiet['noidung'] ?>
                </div>
                <!-- <div id="tab3" class="tab-content">
                    <img style=" height: 500px;" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
                </div> -->

            </div> <!-- END tabs-content -->
        </div> <!-- END tabs -->

    </div>
<?php } ?>
<style>
    .tabs {
        width: 100%;
        background-color: #0a0a0ac7;
        border-radius: 5px 5px 5px 5px;
    }

    ul#tabs-nav {
        list-style: none;
        margin: 0;
        padding: 5px;
        overflow: auto;
    }

    ul#tabs-nav li {
        float: left;
        font-weight: bold;
        margin-right: 2px;
        padding: 8px 10px;
        border-radius: 5px 5px 5px 5px;
        /*border: 1px solid #d5d5de;
  border-bottom: none;*/
        cursor: pointer;
    }

    ul#tabs-nav li:hover,
    ul#tabs-nav li.active {
        background-color: #0a0a0ac7;
    }

    #tabs-nav li a {
        text-decoration: none;
        color: #FFF;
    }

    .tab-content {
        padding: 10px;
        border: 5px solid #0a0a0ac7;
        background-color: #FFF;
    }
</style>