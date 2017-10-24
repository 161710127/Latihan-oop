<?php

require_once 'identitas.php';

$identitas = new identitas;
$identitas->set_nama('Hidayat');
$identitas->set_tempat_lahir('Bandung');
$identitas->set_tanggal_lahir('16 oktober 1990');
$identitas->set_kelas('XI RPL 2');
$identitas->set_status('Mahasiswa');
echo "Nama :".$identitas->nama.'<br>';
echo "Tempat Lahir :".$identitas->tempat_lahir.'<br>';
echo "Tanggal Lahir :".$identitas->Tanggal_Lahir.'<br>';
echo "Kelas :".$identitas->Kelas.'<br>';
echo "Status :".$identitas->Status.'<br>';
?>