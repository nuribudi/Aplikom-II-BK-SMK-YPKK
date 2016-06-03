<?php
//print_r($_POST);
//exit();
$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$tingkat_kelas=$_POST['tingkat_kelas'];
$status_kelas=$_POST['status_kelas'];
$query=mysql_query("UPDATE `sma3_bk`.`kelas`
SET `id_kelas` = '$id_kelas',
  `nama_kelas` = '$nama_kelas',
  `tingkat_kelas` = '$tingkat_kelas',
  `status_kelas` = '$status_kelas'
WHERE `id_kelas` = '$id_kelas';");
?>
<meta http-equiv="refresh" content="0;index.php?page=kelas"/>