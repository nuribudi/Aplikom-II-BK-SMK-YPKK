
<?php
$nama_kelas=$_POST['nama_kelas'];
$id_jurusan=$_POST['id_jurusan'];
$status=$_POST['status'];
$query=mysql_query("INSERT INTO kelas
VALUES 		('',
			 '$nama_kelas',
             '$id_jurusan',
             '$status')");

$hasil=mysql_query($query);
if ($query){
	echo"DATA BERHASIL DISIMPAN";?> <meta http-equiv="refresh" content="0;index.php?page=kelas"/>
	<?php }
	else {echo "gagal".mysql_error();}
	?>
