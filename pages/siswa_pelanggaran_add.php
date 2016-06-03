<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
  <?php 
	$q=mysql_query("SELECT
  *
FROM `sma3_bk`.`pelanggaran`");
	?>
    <th scope="row">Nama Pelanggaran</th>
    <td><select name="id_pelanggaran" id="id_pelanggaran">
      <?php 
	while($r=mysql_fetch_array($q)){
	?>
      <option value="<?php echo $r['id_pelanggaran'] ?>"><?php echo $r['nama_pelanggaran'] ?></option>
      <?php }?>
    </select></td>
  </tr>
  <tr>
  <?php 
	$q=mysql_query("SELECT
  `nis`,
  `nama`
FROM `sma3_bk`.`siswa`");
	?>
    <th scope="row">Nama Siswa</th>
    <td><select name="nis" id="nis">
      <?php 
	while($r=mysql_fetch_array($q)){
	?>
      <option value="<?php echo $r['nis'] ?>"><?php echo $r['nama'] ?></option>
      <?php }?>
    </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table>
</body>
</html>