<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="index.php?page=siswa_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th align="right" scope="row">NIS</th>
    <td><label for="nis"></label>
    <input type="text" name="nis" id="nis" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">NISN</th>
    <td><label for="nisn"></label>
    <input type="text" name="nisn" id="nisn" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Nama</th>
    <td><label for="nama"></label>
    <input type="text" name="nama" id="nama" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Jenis Kelamin</th>
    <td><select name="jenis_kelamin" id="jenis_kelamin">
      <option value="L">Laki - laki</option>
      <option value="P">Perempuan</option>
    </select></td>
  </tr>
  <tr>
    <th align="right" scope="row">Alamat</th>
    <td><label for="alamat"></label>
    <input type="text" name="alamat" id="alamat" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Siswa</th>
    <td><label for="tlpn_siswa"></label>
    <input type="text" name="tlpn_siswa" id="tlpn_siswa" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Orang Tua</th>
    <td><label for="tlpn_orang_tua"></label>
    <input type="text" name="tlpn_orang_tua" id="tlpn_orang_tua" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Kelas</th>
    <td>
    <select name="id_kelas" id="id_kelas">
 <option value="">Pilih kelas</option>
    <?php 
  $q=mysql_query("select * from kelas");
  while($r=mysql_fetch_array($q)){
  ?>
      <option value="<?php echo $r['id_kelas'] ?>"><?php echo $r['nama_kelas'] ?></option>
    <?php }?>
      </select>
    </td>
  </tr>
  <tr>
    <th align="right" scope="row">Status</th>
    <td><select name="status" id="status">
      <option value="aktif">Aktif</option>
      <option value="tidak aktif">Tidak Aktif</option>
    </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>