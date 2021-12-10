<?php
    $sql_lietKe_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_danhmucbaiviet = mysqli_query($mysqli,$sql_lietKe_danhmucbaiviet);
?>
<p>liệt kê danh sách sản phẩm   </p>
<table border="1" style=" width: 70%; border-collapse: collapse;">
  <tr>
      <th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
    
  </tr>
  <?php
    $i =0;
    while($row = mysqli_fetch_array($query_lietke_danhmucbaiviet)){
        $i++;
  ?>
  <tr>
      <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td><a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a> | <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet']?>">Sửa</a></td>
    
  </tr>
  <?php }?>
  
</table>