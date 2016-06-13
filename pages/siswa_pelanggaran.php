<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Siswa Pelanggaran
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
<body>
<a href="index.php?page=siswa_pelanggaran_add">Tambah Siswa Pelanggaran </a>
<?php 
$query = mysql_query("SELECT
    `siswa_pelanggaran`.`id_siswa_pelanggaran`, 
    `user`.`nama`, 
    `siswa`.`nama`, 
    `siswa_pelanggaran`.`poin_total`, 
    `kelas`.`nama_kelas`, 
    `siswa_pelanggaran`.`tanggal_pelanggaran`, 
    `pelanggaran`.`nama_pelanggaran`, 
    `tahun_ajaran`.`nama_tahun_ajaran`, 
    `siswa`.`status` 
FROM `siswa_pelanggaran` LEFT JOIN `user` ON (`siswa_pelanggaran`.`nip`=`user`.`nip`) ORDER BY `user`.`nama`);
FROM `siswa_pelanggaran` LEFT JOIN `pelanggaran` ON (`siswa_pelanggaran`.`id_pelanggaran`=`pelanggaran`.`id_pelanggaran`) ORDER BY `pelanggaran`.`nama_pelanggaran`);
FROM `siswa_pelanggaran` LEFT JOIN `tahun_ajaran` ON (`siswa_pelanggaran`.`id_tahun_ajaran`=`tahun_ajaran`.`id_tahun_ajaran`) ORDER BY `tahun_ajaran`.`nama_tahun_ajaran`);
FROM `siswa_pelanggaran` LEFT JOIN `kelas` ON (`siswa_pelanggaran`.`id_kelas`=`kelas`.`id_kelas`) ORDER BY `kelas`.`nama_kelas`);
FROM `siswa_pelanggaran` LEFT JOIN `siswa` ON (`siswa_pelanggaran`.`id_siswa`=`siswa`.`id_siswa`) ORDER BY `siswa`.`nama`");

?>
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Siswa</th>
    <th scope="col">Nip</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Kelas</th>
    <th scope="col">Pelanggaran</th>
    <th scope="col">Tahun Ajaran / Semester</th>
    <th scope="col">Point Total</th>
    <th scope="col">Admin</th>
    <th scope="col">Action</th>
  </tr>

  <tbody>
  <?php if($query != null) {
  $i = 0;
  while($data = mysql_fetch_array($query)) {
  $i++; ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data['nama'] ?></td>
      <td><?php echo $data['nama'] ?></td>
      <td><?php echo $data['poin_total'] ?></td>
      <td><?php echo $data['nama_kelas'] ?></td>
      <td><?php echo $data['tanggal_pelanggaran'] ?></td>
      <td><?php echo $data['nama_pelanggaran'] ?></td>
      <td><?php echo $data['nama_tahun_ajaran'] ?></td>
      <td><?php echo $data['status'] ?></td>
      <td><a href="index.php?page=siswa_edit&nis=<?php echo $data['nis'] ?>">edit</a><a href="index.php?page=siswa_hapus&nis=<?php echo $data['nis'] ?>">hapus</a></td>

    </tr>
  <?php }
  } else {?>
  data kosong
  <?php }?>
  </tbody>
</table>
</body>
</html>