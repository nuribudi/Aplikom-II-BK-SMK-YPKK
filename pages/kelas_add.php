<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="index.php?page=kelas_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
   <tr>
    <th scope="row">Kelas</th>
    <td><label for="nama_kelas"></label>
      <select name="nama_kelas" id="nama_kelas">
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">Jurusan</th>
    <td><label for="id_jurusan"></label>
      <select name="id_jurusan" id="id_jurusan">
        <option value="1">RPL</option>
        <option value="2">Farmasi</option>
        <option value="3">Akutansi</option>
    </select></td>
  </tr>
  <tr>
    <th align="right" scope="row">Status</th>
    <td><select name="status" id="status">
      <option value="aktif">Aktif</option>
      <option value="tidak aktif">Tidak Aktif</option>
    </select></td>
  </tr>
  <tr
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>