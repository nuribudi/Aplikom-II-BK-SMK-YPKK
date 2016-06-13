<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Pelanggaran
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
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
    <th scope="col">Nama Pelanggaran</th>
    <th scope="col">Poin Pelanggaran</th>
    <th scope="col">Jenis Pelanggaran</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
  </tr>
  <?php
  $no=1;
  while($data=mysql_fetch_array($query)){
    $nama_pelanggaran=$data['nama_pelanggaran'];
	  $poin_pelanggaran=$data['point_pelanggaran'];
    $nama_jenis_pelanggaran=$data['nama_jenis_pelanggaran'];
    $status=$data['status'];
     
	  
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $nama_pelanggaran ?></td>
    <td><?php echo $poin_pelanggaran ?></td>
    <td><?php echo $nama_jenis_pelanggaran ?></td>
    <td><?php echo $status ?></td>
    <td><a href="index.php?page=pelanggaran_edit&nis=<?php echo $data['nis'] ?>">edit</a> &nbsp
    <a href="index.php?page=siswa_hapus&nis=<?php echo $data['nis'] ?>">hapus</a></td>
  </tr>
  <?php
  $no++;}
  ?>
</table>
</body>
</html>