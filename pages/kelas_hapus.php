<?php
mysql_connect("localhost","root","");
mysql_select_db("bk_smk");
$i = $_GET['i'];
if ($i == "delete")
{
$nis = $_GET['id_kelas'];
$query = "DELETE FROM kelas WHERE id_kelas = '$nis'";
$hasil = mysql_query($query);
}
?>