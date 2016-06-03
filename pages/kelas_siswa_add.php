<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="index.php?page=kelas_siswa_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th scope="row">Kelas</th>
    <td>
    <?php 
	$q=mysql_query("SELECT
  `id_kelas`,
  `nama_kelas`,
  `tingkat_kelas`,
  `status_kelas`
FROM `sma3_bk`.`kelas`");
	?>
    
    <select name="kelas" id="kelas">
    <option value="0">Pilih Data Kelas </option>
    <?php 
	while($r=mysql_fetch_array($q)){
	?>
      <option value="<?php echo $r['id_kelas'] ?>"><?php echo $r['nama_kelas'] ?></option>
    <?php }?>
    </select></td>
  </tr>
  <tr>
    <th scope="row">Nama Siswa</th>
    <td>
    <?php 
	$q=mysql_query("SELECT
  `nis`,
  `nama`
FROM `sma3_bk`.`siswa`");
	?>
    
    <select name="nis" id="nis">
    <?php 
	while($r=mysql_fetch_array($q)){
	?>
      <option value="<?php echo $r['nis'] ?>"><?php echo $r['nama'] ?></option>
    <?php }?>
    </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table>
</body>
</html>