<?php
  include('connect.php');

  $sql = $conn->prepare("SELECT * FROM hoadon where isdel=0 and TrangThai =6");
	$sql->execute();
  echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_UNESCAPED_UNICODE);