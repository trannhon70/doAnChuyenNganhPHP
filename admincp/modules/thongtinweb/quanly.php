<?php
$sql_sua_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
$query_sua_lh = mysqli_query($mysqli, $sql_sua_lh);
?>
<p>quản lý trang web</p>

<table style="border: 1px; width: 50%; border-collapse: collapse;">
<?php
        while ($row = mysqli_fetch_array($query_sua_lh)) {
        ?>
    <form border="1" action="modules/thongtinweb/xuly.php?id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
        
            <tr>
                <td>Thông tin liên hệ</td>
                <td><textarea name="thongtinlienhe" id="" rows="10" style="resize: none;"><?php echo $row['thongtinlienhe'] ?></textarea> </td>
            </tr>

            <tr colspan="2">
                <td><input type="submit" name=capnhat value="Cập nhật "> </td>
            </tr>
       
    </form>
    <?php } ?>
</table>