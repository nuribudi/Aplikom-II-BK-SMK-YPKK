<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="index.php?page=pelanggaran_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th align="left" scope="row">Nama Pelanggaran</th>
    <td><input type="text" name="nama_pelanggaran" id="nama_pelanggaran" /></td>
  </tr>
  <tr>
    <th align="left" scope="row">Jenis Pelanggaran</th>
    <td><label for="jenis_pelanggaran"></label>
      <select name="jenis_pelanggaran" id="jenis_pelanggaran">
      <option value="0">Pilih Jenis Pelanggaran </option>
    <?php 
	$q=mysql_query("select * from jenis_pelanggaran");
	while($r=mysql_fetch_array($q)){
	?>
      <option value="<?php echo $r['id_jenis_pelanggaran'] ?>"><?php echo $r['nama_jenis_pelanggaran'] ?></option>
    <?php }?>
      </select></td>
  </tr>
  <tr>
    <th align="left" scope="row">Poin</th>
    <td><input type="text" name="point" id="point" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Status</th>
    <td><select name="status" id="status">
      <option value="aktif">Aktif</option>
      <option value="tidak aktif">Tidak Aktif</option>
    </select></td>
  </tr>
  <tr>
  <tr>
    <th colspan="2" scope="row"><label for="Simpan"></label>
    Simpan      
      <input type="submit" name="Simpan" id="Simpan" value="Submit" /></th>
  </tr>
</table></form>
</body>
</html>