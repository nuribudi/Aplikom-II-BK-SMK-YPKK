<?php
$nama_pelanggaran=$_POST['nama_pelanggaran'];
$id_jenis_pelanggaran=$_POST['jenis_pelanggaran'];
$point_pelanggaran=$_POST['point'];
$status=$_POST['status'];
$status=mysql_query("INSERT INTO pelanggaran
            
VALUES ('',
        '$nama_pelanggaran',
        '$point_pelanggaran',
        '$id_jenis_pelanggaran',
        '$status');");

$hasil=mysql_query($query);
if ($query){
    echo"DATA BERHASIL DIUPDATE";?> <meta http-equiv="refresh" content="0;index.php?page=pelanggaran"/>
    <?php }
    else {echo "gagal".mysql_error();}
    ?>
<!-- <meta http-equiv="refresh" content="0;index.php?page=pelanggaran"/> -->

	  