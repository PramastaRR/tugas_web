<?php
include "connection.php";
include "header.php";

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

?>
<!DOCTYPE html>
<html>
<head>
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .header {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 5px 10px;
            }

            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
                margin: 2px;
            }

            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }

            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            .header a.active {
                background-color: #4CAF50;
                color: white;
            }

            .header-right {
                float: right;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 40%;
                display: block;
                margin-top: 25px;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                background-color: #f8f8f8 ;
                margin-bottom: 20px;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .container {
                padding: 2px 16px;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: auto;
                margin-right: auto;
                width: auto;
                border: none;
                cursor: pointer;
                border-radius: 10px;
                font-family: sans-serif;
                font-size: 15px;
            }

            button:hover {
                opacity: 0.8;
            }
            label {
                font: 300 16px/1.7 'Open Sans', sans-serif;
                color: #666;
                cursor: pointer;
            }

            .footer {
                position: fixed;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
                margin-top: 100px;
                background-color: #efefef;
                text-align: right
                ;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }

                .header-right {
                    float: none;
                }
            }
        </style>         
    </head>  
</head>
<body>
    <div class="container">
        <div class="grid-container" align="center">
            <label>
                <h1>Pendaftaran berhasil dilakukan.</h1>
            </label>
            <form action="/tugas_web/lihatantri.php/?search=<?= $nik?>" method="post">
                <button type="submit">Lihat nomor antrean</button>                             
            </form>
        </div>             
    </div>
</body>
</html>