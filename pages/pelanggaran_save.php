<?php
$nama_pelanggaran=$_POST['nama_pelanggaran'];
$id_jenis_pelanggaran=$_POST['id_jenis_pelanggaran'];
$poin_pelanggaran=$_POST['poin_pelanggaran'];
$status=$_POST['status'];
$status=mysql_query("INSERT INTO pelanggaran
            
VALUES ('',
        '$nama_pelanggaran',
        '$poin_pelanggaran',
        '$id_jenis_pelanggaran',
        '$status');");

$hasil=mysql_query($query);
if ($query){
    echo"DATA BERHASIL DIUPDATE";?> <meta http-equiv="refresh" content="0;index.php?page=siswa"/>
    <?php }
    else {echo "gagal".mysql_error();}
    ?>
<!-- <meta http-equiv="refresh" content="0;index.php?page=pelanggaran"/> -->

	  