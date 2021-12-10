<?php

$sql_bv = "SELECT * FROM  tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' ORDER BY id DESC";
$query_bv = mysqli_query($mysqli, $sql_bv);
$query_bv_all = mysqli_query($mysqli, $sql_bv);

$row_title_bv = mysqli_fetch_array($query_bv);

?>
<h3 style="margin-left: 10px !important;">Bài viết: <?php echo $row_title_bv['tenbaiviet'] ?> </h3>
<ul class="product_list">
    <?php
    while ($row_bv = mysqli_fetch_array($query_bv_all)) {
    ?>
        <li >

            <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
            <p><?php echo $row_bv['tomtat'] ?></p>
            <p> <?php echo $row_bv['noidung'] ?></p>
        </li>
    <?php } ?>
</ul>