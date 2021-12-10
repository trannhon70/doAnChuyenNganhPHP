
<?php
    $sql_sua_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    $query_sua_danhmucbaiviet = mysqli_query($mysqli,$sql_sua_danhmucbaiviet);
?>
<p>Sửa danh mục bài viết</p>
<table style="border: 1px; width: 50%; border-collapse: collapse;">
    <form action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" method="post">
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucbaiviet)){
        ?>
        <tr>
            <td>Tên danh mục bài viết</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>"  name="tendanhmucbaiviet"> </td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"> </td>
        </tr>
        <tr colspan="2">
            <td><input type="submit" name=suadanhmucbaiviet value="Cập nhật danh mục bài viết "> </td>
        </tr>
        <?php }?>
    </form>

</table>