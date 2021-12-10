<?php
$sql_sua_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
$query_sua_lh = mysqli_query($mysqli, $sql_sua_lh);
?>
<h2 class="text-center text">Liên hệ với cửa hàng</h2>


<?php
        while ($row = mysqli_fetch_array($query_sua_lh)) {
        ?>
    <p><?php echo $row['thongtinlienhe'] ?></p>
    <?php } ?>
