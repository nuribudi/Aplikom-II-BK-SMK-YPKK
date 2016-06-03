<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="index.php?page=kelas_add">Tambah </a> 
<?php 
$query = mysql_query("SELECT
    ,kelas.nama_kelas
    , jurusan.nama_jurusan
    , kelas.status

FROM `bk_smk`.`kelas`
    Left JOIN `bk_smk`.`jurusan` 
        ON (kelas.id_jurusan = jurusan.id_jurusan) order BY jurusan.nama_jurusan");
?>
<table class="table table-striped table-bordered table-hover" >
  <thead>
  <tr>
  <th scope="col">NO</th>
    <th scope="col">Kelas</th>
    <th scope="col">Jurusan</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $no = 1;
  while($data = mysql_fetch_array($query))
  {
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data['nama_kelas'] ?></td>
    <td><?php echo $data['nama_jurusan'] ?></td>
    <td><?php echo $data['status'] ?></td>
    <td><a href="index.php?page=kelas_edit&id_kelas=<?php echo $data['id_kelas'] ?>">edit</a></td> 
  </tr>
  <?php 
  $no++;
  }
  ?>
  </tbody>
</table>
</body>
</html>