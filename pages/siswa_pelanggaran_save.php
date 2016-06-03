<?php
$id_siswa_pelanggaran=$_POST['id_siswa_pelanggaran'];
$nis=$_POST['nis'];
$nip=$_POST['nip'];
$id_kelas=$_POST['id_kelas'];
$id_pelanggaran=$_POST['id_pelanggaran'];
$id_tahun_ajaran=$_POST['id_tahun_ajaran'];
$poin_pelanggaran=$_POST['poin_pelanggaran'];
$tanggal_pelanggaran=$_POST['tanggal_pelanggaran'];
$query=mysql_query("INSERT INTO `sma3_bk`.`siswa_pelanggaran`
            (`id_siswa_pelanggaran`,
 			 `nis`,
 			 `nip`,
 			 `id_kelas`,
 			 `id_pelanggaran`,
 			 `id_tahun_ajaran`,
 			 `poin_pelanggaran`,
  			`tanggal_pelanggaran`)
VALUES ('$nis',
        '$nip',
        '$id_kelas',
        '$id_pelanggaran',
        '$id_tahun_ajaran',
		'$poin_pelanggaran',
		'$tanggal_pelanggaran')");
?>
<meta http-equiv="refresh" content="0;index.php?page=siswa_pelanggaran"/>