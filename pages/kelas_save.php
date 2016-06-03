<?php
$nama_kelas=$_POST['nama_kelas'];
$jurusan=$_POST['jurusan'];
$status_kelas=$_POST["aktif"];
$query=mysql_query("INSERT INTO `bk_smk`.`kelas`
            (
             `nama_kelas`,
             `jurusan`,
             `status_kelas`)
VALUES (0,
        '$nama_kelas',
        '$jurusan',
        '$status_kelas')");
?>
<!-- <meta http-equiv="refresh" content="0;index.php?page=kelas"/> -->