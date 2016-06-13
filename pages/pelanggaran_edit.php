<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$id_pelanggaran=$_GET['id_pelanggaran'];
$query=mysql_query("SELECT * FROM `pelanggaran` where id_pelanggaran='$id_pelanggaran'");
$data=mysql_fetch_array($query);
?>
<body>
<form action="index.php?page=pelanggaran_edit_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  
  <input type="hidden" name="id_pelanggaran" value="<?php echo $data['id_pelanggaran']?>"/> 

  <tr>
    <th align="right" scope="row">Nama Pelanggaran</th>
    <td><label for="nama_pelanggaran"></label>
    <input type="text" name="nama_pelanggaran" id="nama_pelanggaran" value="<?php echo $data['nama_pelanggaran'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Point</th>
    <td><label for="point"></label>
    <input type="text" name="piont" id="point" value="<?php echo $data['point'] ?>"/></td>
  </tr>
  <tr>
    <th align="right" scope="row">Jenis Pelanggaran</th>
    <td><label for="id_jenis_pelanggaran"></label>
    <select name="id_jenis_pelanggaran" id="id_jenis_pelanggaran" value="<?php echo $data['id_jenis_pelanggaran'] ?>">
 <option value="">Pilih Pelanggaran</option>
    <?php 
  $q=mysql_query("select * from kelas");
  while($r=mysql_fetch_array($q)){
  ?>
      <option <?php echo $r['id_jenis_pelanggaran'] == $data['id_jenis_pelanggaran'] ? 'selected=selected' : '';?> value="<?php echo $r['id_jenis_pelanggaran'] ?>"><?php echo $r['jenis_pelanggaran'] ?></option>
    <?php }?>
      </select></td>
  </tr>
  <tr>
    <th align="right" scope="row">status</th>
    <td><label for="status"></label>
      <select name="status" id="status">
        <option value="aktif" <?php if ($data['status']=="aktif")echo 'selected="selected"'; ?>>aktif</option>
        <option value="tidak aktif" <?php if ($data['status']=="tidak aktif")echo 'selected="selected"'; ?>>tidak aktif</option>
        <option value="alumni" <?php if ($data['status']=="alumni")echo 'selected="selected"'; ?>>alumni</option>
      </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>