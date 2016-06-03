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
    <td><label for="tingkat_kelas"></label>
      <select name="tingkat_kelas" id="tingkat_kelas">
        <option value="10">X</option>
        <option value="11">XI</option>
        <option value="12">XII</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">Jurusan</th>
    <td><label for="tingkat_kelas"></label>
      <select name="tingkat_kelas" id="tingkat_kelas">
        <option value="10">RPL</option>
        <option value="11">Farmasi</option>
        <option value="12">Akutansi</option>
    </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>