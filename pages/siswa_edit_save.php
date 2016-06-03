<?php
$id_siswa=$_POST['id_siswa'];
$nis=$_POST['nis'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$tlpn_siswa=$_POST['tlpn_siswa'];
$tlpn_orang_tua=$_POST['tlpn_orang_tua'];
$id_kelas=$_POST['id_kelas'];
$status=$_POST['status'];
$query=mysql_query("UPDATE `siswa`
SET `nis` = '$nis',
	`nisn` = '$nisn',
  `nama` = '$nama',
  `jenis_kelamin` = '$jenis_kelamin',
    `alamat` = '$alamat',
  `tlpn_siswa` = '$tlpn_siswa',
  `tlpn_orang_tua` = '$tlpn_orang_tua',
   `id_kelas` = '$id_kelas',
  `status` = '$status'
WHERE `id_siswa` = '$id_siswa';");



$hasil=mysql_query($query);
if ($query){
	echo"DATA BERHASIL DIUPDATE";?> <meta http-equiv="refresh" content="0;index.php?page=siswa"/>
	<?php }
	else {echo "gagal".mysql_error();}
	?>
