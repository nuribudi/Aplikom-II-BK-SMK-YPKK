<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Kelas
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
<body>
<a href="index.php?page=kelas_add">Tambah Kelas</a> 
<?php 
$query = mysql_query("SELECT
    kelas.id_kelas,
    kelas.nama_kelas,
    jurusan.nama_jurusan,
	kelas.status
FROM `kelas`
    LEFT JOIN `jurusan` 
        ON (kelas.id_jurusan = jurusan.id_jurusan) ORDER BY jurusan.nama_jurusan");
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
  <?php if($query != null) {
	$i = 0;
	while($data = mysql_fetch_array($query)) {
	$i++; ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $data['nama_kelas'] ?></td>
			<td><?php echo $data['nama_jurusan'] ?></td>
			<td><?php echo $data['status'] ?></td>
			<td><a href="index.php?page=kelas_edit&id_kelas=<?php echo $data['id_kelas'] ?>">edit</a> &nbsp 
      <a href="index.php?page=kelas_hapus&id_kelas=<?php echo $data['id_kelas'] ?>">hapus</a></td> 
		</tr>
	<?php }
  } else {?>
  data kosong
  <?php }?>
  </tbody>
</table>
</body>
</html>
