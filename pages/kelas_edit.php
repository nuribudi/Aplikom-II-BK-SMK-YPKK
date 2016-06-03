<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$id_kelas=$_GET['id_kelas'];
$query=mysql_query("SELECT
  `id_kelas`,
  `nama_kelas`,
  `tingkat_kelas`,
  `status_kelas`
FROM `sma3_bk`.`kelas`
where id_kelas='$id_kelas'");
$data=mysql_fetch_array($query);
?>
<body>
<form action="index.php?page=kelas_edit_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th align="right" scope="row">Id Kelas</th>
    <td><label for="id_kelas"></label>
    <input type="text" name="id_kelas" id="id_kelas" value="<?php echo $data['id_kelas'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Kelas</th>
    <td><label for="nama_kelas"></label>
    <input type="text" name="nama_kelas" id="nama_kelas" value="<?php echo $data['nama_kelas'] ?>" /></td>
  </tr>
    <th align="right" scope="row">Status Kelas</th>
    <td><label for="status_kelas"></label>
      <label for="status_kelas2"></label>
      <select name="status_kelas" id="status_kelas2">
        <option value="aktif">aktif</option>
        <option value="tidak aktif">tidak aktif</option>
      </select></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row">
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>