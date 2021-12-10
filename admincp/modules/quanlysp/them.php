<p>Thêm sản phẩm</p>
<table style="border: 1px; width: 50%; border-collapse: collapse;">
    <form border="1" action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"> </td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp"> </td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp"> </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"> </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"> </td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" id="" cols="50" rows="10" style="resize: none;"></textarea> </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" id="" cols="50" rows="10" style="resize: none;"></textarea> </td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm </td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang" id="">
                    <option value="1">kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr colspan="2">
            <td><input type="submit" name=themsanpham value="Thêm sản phẩm "> </td>
        </tr>
    </form>

</table>