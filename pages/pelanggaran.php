<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$query = mysql_query("SELECT
    `pelanggaran`.`id_pelanggaran`
    , `pelanggaran`.`nama_pelanggaran`
    , `pelanggaran`.`point_pelanggaran`
    , `jenis_pelanggaran`.`nama_jenis_pelanggaran`
    , `pelanggaran`.`status`
   FROM `bk_smk`.`pelanggaran`
    Left JOIN `bk_smk`.`jenis_pelanggaran` 
        ON (pelanggaran.id_jenis_pelanggaran = jenis_pelanggaran.id_jenis_pelanggaran) order BY jenis_pelanggaran.nama_jenis_pelanggaran");

    ?>
<a href="index.php?page=pelanggaran_add">Tambah Pelanggaran</a>

<table class="table table-striped table-bordered table-hover" >
  <tr>
    <th scope="col">No</th>
    <th scope="col">Id Pelanggaran</th>
    <th scope="col">Nama Pelanggaran</th>
    <th scope="col">Poin Pelanggaran</th>
    <th scope="col">Jenis Pelanggaran</th>
    <th scope="col">Status</th>
  </tr>
  <?php
  $no=1;
  while($data=mysql_fetch_array($query)){
	  $id_pelanggaran=$data['id_pelanggaran'];
    $nama_pelanggaran=$data['nama_pelanggaran'];
	  $poin_pelanggaran=$data['point_pelanggaran'];
    $nama_jenis_pelanggaran=$data['nama_jenis_pelanggaran'];
    $status=$data['status'];
	  
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $id_pelanggaran ?></td>
    <td><?php echo $nama_pelanggaran ?></td>
    <td><?php echo $poin_pelanggaran ?></td>
    <td><?php echo $nama_jenis_pelanggaran ?></td>
    <td><?php echo $status ?></td>
  </tr>
  <?php
  $no++;}
  ?>
</table>
</body>
</html>