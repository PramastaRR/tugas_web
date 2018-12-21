<?php
include 'connection.php';

// ambil variabel POST
$id_poli = $_POST['id_poli'];
$conn->query("truncate antrean_poli{$id_poli}");
header("location: admin.php/?id_poli={$id_poli}");
?>