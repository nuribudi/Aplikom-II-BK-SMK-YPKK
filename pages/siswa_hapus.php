
<html>
<body>

<?Php



	
	if ($tidak){
		echo("<script language=javascript>window.location='?mod=siswa&sub=siswaView';</script>");
	}else{
	
		$perintah1=mysql_query("DELETE FROM siswa WHERE id_siswa='$id'");
		$perintah2=mysql_query("DELETE FROM siswa_pelanggaran WHERE id_siswa='$id'");
	
		echo"<br><br><center>Data siswa berhasil dihapus<br>";
		?>
		<a href="?mod=siswa&sub=siswaView">OK</a></center>
		
		<?Php
		
	}

{

echo("<script language=javascript>window.location='./';</script>");}

?>



</body>
</html>
