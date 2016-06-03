<?php
$nis=$_POST['nis'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$tlpn_siswa=$_POST['tlpn_siswa'];
$tlpn_orang_tua=$_POST['tlpn_orang_tua'];
$id_kelas=$_POST['id_kelas'];
$status=$_POST['status'];
$query=mysql_query("INSERT INTO siswa
VALUES 		('',
			 '$nis',
             '$nisn',
             '$nama',
             '$jenis_kelamin',
             '$alamat',
             '$tlpn_siswa',
             '$tlpn_orang_tua',
             '$id_kelas',
             '$status')");

$hasil=mysql_query($query);
if ($query){
	echo"DATA BERHASIL DISIMPAN";?> <meta http-equiv="refresh" content="0;index.php?page=siswa"/>
	<?php }
	else {echo "gagal".mysql_error();}
	?>
