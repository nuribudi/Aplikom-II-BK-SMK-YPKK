<?php
//print_r($_POST);
//exit();
$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$id_jurusan=$_POST['id_jurusan'];
$status=$_POST['status'];
$query=mysql_query("UPDATE `kelas`
SET 
  `nama_kelas` = '$nama_kelas',
  `id_jurusan` = '$id_jurusan',
  `status` = '$status'
WHERE `id_kelas` = '$id_kelas';");
?>
<meta http-equiv="refresh" content="0;index.php?page=kelas"/>