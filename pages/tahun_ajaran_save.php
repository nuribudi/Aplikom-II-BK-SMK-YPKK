<?php
$nama_tahun_ajaran=$_POST['nama_tahun_ajaran'];
$semester=$_POST['semester'];
$query=mysql_query("insert into tahun_ajaran values(0,'$nama_tahun_ajaran','$semester','aktif')") or die(mysql_error());
?>
<meta http-equiv="refresh" content="0;index.php?page=tahun_ajaran"/>