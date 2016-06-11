<?php
include('koneksi.php');
$id = $_GET['id_siswa'];
if ($id) {
mysql_query("delete from siswa where id_siswa='{$id}'");
mysql_query("delete from siswa_pelanggaran where id_siswa='{$id}'");
}
    header('location:siswa.php?message=DELETE');
    exit;
?>