
<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm</p>
<table style="border: 1px; width: 50%; border-collapse: collapse;">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">
       <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
       ?>
        <tr>
            <th>Điền danh mục sản phẩm</th>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"> </td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"> </td>
        </tr>
        <tr colspan="2">
            <td><input type="submit" name=suadanhmuc value="Sửa danh mục sản phẩm "> </td>
        </tr>
        <?php }?>
    </form>

</table>