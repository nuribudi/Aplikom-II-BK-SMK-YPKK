<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$id_kelas=$_GET['id_kelas'];
$query=mysql_query("SELECT * FROM `kelas` where id_kelas='$id_kelas'");
$data=mysql_fetch_array($query);
?>
<body>
<form action="index.php?page=kelas_edit_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
<?php /*
  <tr>
    <th align="right" scope="row">Id Kelas</th>
    <td><label for="id_kelas"></label>
    <input type="text" name="id_kelas" id="id_kelas" value="<?php echo $data['id_kelas'] ?>" /></td>
  </tr>
*/?>  
  <tr>
    <th align="right" scope="row">Kelas</th>
    <td><label for="nama_kelas"></label>
	<input type="hidden" name="id_kelas" value="<?php echo $data['id_kelas'] ?>" />
      <select name="nama_kelas" id="nama_kelas">
        <option <?php echo $data['nama_kelas'] == 'X' ? 'selected="selected"' : '';?> value="X">X</option>
        <option <?php echo $data['nama_kelas'] == 'XI' ? 'selected="selected"' : '';?>value="XI">XI</option>
        <option <?php echo $data['nama_kelas'] == 'XII' ? 'selected="selected"' : '';?>value="XII">XII</option>
      </select>
  </tr>
  <tr>
    <th align="right" scope="row">Jurusan</th>
    <td><label for="id_jurusan"></label>
    <select name="id_jurusan" id="id_jurusan">
 <option value="">Pilih Jurusan</option>
    <?php 
  $q=mysql_query("select * from jurusan");
  while($r=mysql_fetch_array($q)){
  ?>
      <option <?php echo $r['id_jurusan'] == $data['id_jurusan'] ? 'selected="selected"' : '';?> value="<?php echo $r['id_jurusan'] ?>"><?php echo $r['nama_jurusan'] ?></option>
    <?php }?>
      </select></td>
  </tr>
    <th align="right" scope="row">Status Kelas</th>
    <td>
      <label for="status"></label>
      <select name="status" id="status">
        <option <?php echo $data['status'] == 'aktif' ? 'selected="selected"' : '';?> value="aktif">aktif</option>
        <option <?php echo $data['status'] == 'tidak aktif' ? 'selected="selected"' : '';?>value="tidak aktif">tidak aktif</option>
      </select></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row">
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>