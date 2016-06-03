<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="index.php?page=tahun_ajaran_add">Tambah Tahun Ajaran</a>
<?php 
$query = mysql_query("select * from tahun_ajaran");
?>
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th scope="col">Nama Tahun Ajaran</th>
    <th scope="col">Semester</th>
    <th scope="col">Status</th>
    
  </tr>
  <?php 
  $no = 1;
  while($data = mysql_fetch_array($query))
  {
  ?>
  <tr>
    <td><?php echo $data['nama_tahun_ajaran'] ?></td>
    <td><?php echo $data['semester'] ?></td>
    <td><?php echo $data['status_tahun_ajaran'] ?></td>
    
  </tr>
  <?php 
  $no++;
  }
  ?>
</table>
</body>
</html>