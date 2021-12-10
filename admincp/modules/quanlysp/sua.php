<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<table style="border: 1px; width: 50%; border-collapse: collapse;">
    <?php
    while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
        <form border="1" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="post" enctype="multipart/form-data">

            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"> </td>
            </tr>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"> </td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"> </td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"> </td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"> </td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt=""></td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td><textarea name="tomtat" id="" cols="30" rows="10" style="resize: none;"><?php echo $row['tomtat'] ?></textarea> </td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea name="noidung" id="" cols="30" rows="10" style="resize: none;"><?php echo $row['noidung'] ?></textarea> </td>
            </tr>
            <tr>
                <td>Danh mục sản phẩm </td>
                <td>
                    <select name="danhmuc" id="">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php } else { ?>
                                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang" id="">
                        <?php if ($row['tinhtrang'] == 1) {

                        ?>
                            <option value="1" selected>kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php } else { ?>
                            <option value="1">kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr colspan="2">
                <td><input type="submit" name=suasanpham value="Sửa sản phẩm "> </td>
            </tr>
        </form>
    <?php } ?>

</table>