<?php
  include('connect.php');
  $IDSanPham = $_GET['IDSanPham'];
  $sql = $conn->prepare("SELECT comment.*, thongtinnguoidung.TenNguoiDung
                            FROM comment
                            INNER JOIN thongtinnguoidung ON comment.IDNguoiDung = thongtinnguoidung.IDNguoiDung
                            WHERE comment.IDSanPham = $IDSanPham and comment.isDel!=1");
	$sql->execute();
  echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_UNESCAPED_UNICODE);