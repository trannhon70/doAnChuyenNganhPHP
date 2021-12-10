<?php
$mysqli = new mysqli("localhost","admin","123456","data_banhang");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối MSQLi lỗi  " . $mysqli -> connect_error;
  exit();
}
?>
