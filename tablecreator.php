<?php
include "connection.php";

// lakukan query untuk menampilkan semua poli
$daftarpoli = $conn->query("select * from poli");

// lakukan query untuk membuat tabel dari setiap poli
while ($rows = $daftarpoli->fetch_assoc()){
    echo "Makan";
    $conn->query(
        "CREATE TABLE `antrean_poli{$rows['id_poli']}` (
            `id_poli` int(1) NOT NULL,
            `no_antrean` int(3) NOT NULL AUTO_INCREMENT,
            `nik` varchar(16) NOT NULL,
            `nama_pasien` varchar(50) NOT NULL,
            `jeniskelamin` varchar(1) NOT NULL,
            `tgllahir` date NOT NULL,
            `alamat` varchar(50) NOT NULL,
            `notelp` varchar(20) NOT NULL,
            PRIMARY KEY (`no_antrean`)
           );"
    );
}
?>