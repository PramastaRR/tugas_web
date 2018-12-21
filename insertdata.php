<?php
include "connection.php";

// get id_poli dari URL
$id_poli = $_GET['id_poli'];

// ambil variabel POST
$nik = $_POST['nik'];
$nama_pasien = $_POST['nama_pasien'];
$jeniskelamin = $_POST['jeniskelamin'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

// masukkan data ke dalam database
$conn->query("
    insert into antrean_poli{$id_poli} 
    (id_poli, nik, nama_pasien, jeniskelamin, tgllahir, alamat, notelp)
    values 
    ('{$id_poli}', '{$nik}', '{$nama_pasien}', '{$jeniskelamin}', STR_TO_DATE('{$tgllahir}', '%Y-%m-%d'), '{$alamat}', '{$notelp}');
    ");

header("location: /tugas_web/lihatantri.php/?search=$nik")
?>