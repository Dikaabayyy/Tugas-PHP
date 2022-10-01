<?php 
require 'Pegawai.php';

$dika = new Pegawai('001','Andhika', 'Manager', 'Islam', 'Sudah Menikah');
$ridwan = new Pegawai('123', 'Ridwan', 'Staff', 'Islam', 'Belum Menikah');
$anto = new Pegawai('173', 'Novrianto', 'Kabag', 'Kristen', 'Sudah Menikah');
$hendra = new Pegawai('145', 'Hendrawan', 'Asisten', 'Islam', 'Sudah Menikah');
$iman = new Pegawai('187', 'Iman', 'Staff', 'Kristen', 'Belum Menikah');

echo '<h3 align="center">'.Pegawai::JUDUL.'</h3>';

$dika->mencetak();
$ridwan->mencetak();
$anto->mencetak();
$hendra->mencetak();
$iman->mencetak();

echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>