
<p>Giỏ hàng <?php
            if (isset($_SESSION['dangky'])) {
              echo 'xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
              //echo $_SESSION['id_khachhang'];
            }
            ?>
</p>
<?php
if (isset($_SESSION['cart'])) {
  // echo '<pre>';
  // print_r($_SESSION['cart']);
  // echo '</pre>';
}
?>
<table border="1" style="width: 100%;text-align: center; border-collapse: collapse;">
  <tr>
    <th>id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền </th>
    <th>Quản lý</th>
  </tr>
  <?php
  if (isset($_SESSION['cart'])) {
    $i = 0;
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
      $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
      $tongtien += $thanhtien;
      $i++;
  ?>
      <tr>
        <td><?php echo $i; ?> </td>
        <td><?php echo $cart_item['masp']; ?></td>
        <td><?php echo $cart_item['tensanpham']; ?></td>
        <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="50px" height="50px"> </td>
        <td>
          <a style="font-size: 25px; text-decoration: none; margin-right: 10px;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>
          <?php echo $cart_item['soluong']; ?>
          <a style="font-size: 25px; text-decoration: none;margin-left: 10px;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
        </td>
        <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . ' vnđ' ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.') . ' vnđ'; ?></td>
        <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
      </tr>
    <?php } ?>
    <tr style="height: 40px;">
      <td colspan="6">Tổng tiền bạn phải thanh toán là :</td>
      <td colspan="1"><?php echo number_format($tongtien, 0, ',', '.') . ' vnđ'; ?></td>
      <td><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></td>
    </tr>
    <tr>
      <?php
      if (isset($_SESSION['dangky'])) {
      ?>
        <td colspan="8"><a href="pages/main/thanhtoan.php"> Đặt hàng</a> </td>
      <?php
      } else {
      ?>
        <td colspan="8"><a href="index.php?quanly=dangky">Đăng ký tài khoản để đặt hàng</a></td>
      <?php } ?>
    </tr>
  <?php

  } else {
  ?>
    <tr style="height: auto;">
      <td colspan="8" style="font-size: 20px; padding: 15.4% 0%;">Hiện tại giỏ hàng của bạn chưa có sản phẩm nào !!! </td>
    </tr>
  <?php } ?>

</table>