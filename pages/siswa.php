<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Siswa
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
<a href="index.php?page=siswa_add">Tambah Siswa </a>
<?php 
$query = mysql_query("SELECT
     siswa.nis
    ,siswa.nisn
    , siswa.nama
    , siswa.jenis_kelamin
    , siswa.alamat
    , siswa.tlpn_siswa
    , siswa.tlpn_orang_tua
    , kelas.nama_kelas
    , siswa.status
FROM `bk_smk`.`siswa`
    Left JOIN `bk_smk`.`kelas` 
        ON (siswa.id_kelas = kelas.id_kelas) order BY kelas.nama_kelas");
?>
<table class="table table-striped table-bordered table-hover" >
  <thead>
  <tr>
  <th scope="col">NO</th>
    <th scope="col">NIS</th>
    <th scope="col">NISN</th>
    <th scope="col">Nama</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Alamat</th>
    <th scope="col">Telp Siswa</th>
    <th scope="col">Telp Ortu</th>
    <th scope="col">Kelas</th>
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
    <td><?php echo $data['nis'] ?></td>
    <td><?php echo $data['nisn'] ?></td>
    <td><?php echo $data['nama'] ?></td>
    <td><?php echo $data['jenis_kelamin'] ?></td>
    <td><?php echo $data['alamat'] ?></td>
    <td><?php echo $data['tlpn_siswa'] ?></td>
    <td><?php echo $data['tlpn_orang_tua'] ?></td>
    <td><?php echo $data['nama_kelas'] ?></td>
    <td><?php echo $data['status'] ?></td>
    <td><a href="index.php?page=siswa_edit&nis=<?php echo $data['nis'] ?>">edit</a></td>
  </tr>
  <?php 
  $no++;
  }
  ?>
  </tbody>
</table>
</div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>