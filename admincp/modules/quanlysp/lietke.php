<?php
    $sql_lietKe_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietKe_sp);
?>
<p>liệt kê sản phẩm   </p>
<table border="1" style=" width: 100%; border-collapse: collapse;">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Mã sản phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>hình ảnh</th>
    <th>Tóm tắt</th>
    <th>Nội dung</th>
    <th>Tình trạng</th>
    
  </tr>
  <?php
    $i =0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
  ?>
  <tr style="text-align: center; width:100%;">
    <td width="3%"><?php echo $i ?></td>
    <td width="10%"><?php echo $row['tensanpham'] ?></td>
    <td width="5%"><?php echo $row['masp'] ?></td>
    <td width="10%"><?php echo number_format($row['giasp'], 0, ',', '.').' vnđ' ?></td>
    <td width="3%"><?php echo $row['soluong'] ?></td>
    <td width="9%"><?php echo $row['tendanhmuc'] ?></td>
    <td width="5%"><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="50px" height="50px" alt=""> </td>
    <td width="20%"><?php echo $row['tomtat'] ?></td>
    <td width="20%"><?php echo $row['noidung'] ?></td>
    <td><?php if($row['tinhtrang']==1){
      echo 'kích hoạt';
    }
    else{
      echo 'Ẩn';
    } ?></td>
    <td><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a></td>
    
  </tr>
  <?php }?>
  
</table>