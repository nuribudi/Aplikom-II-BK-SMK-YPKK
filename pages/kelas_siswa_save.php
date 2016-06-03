<?php
$kelas=$_POST['kelas'];
$nis=$_POST['nis'];
$query=mysql_query("INSERT INTO `sma3_bk`.`kelas_siswa`
            (`nis`,
             `id_kelas`,
             `id_tahun_ajaran`,
             `semester`)
VALUES ('$nis',
        '$kelas',
        '1',
        'ganjil');");
?>