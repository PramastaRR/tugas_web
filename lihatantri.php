<?php
include "connection.php";
?>


<!DOCTYPE html> 
<html> 
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
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

            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                font-family: sans-serif;
                font-size: 15px;
            }

            b {
                font-family: sans-serif;
                font-size: 20px;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 10px;
                font-family: sans-serif;
                font-size: 25px;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 1% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s;
            }

            @-webkit-keyframes animatezoom {
                from {
                    -webkit-transform: scale(0);
                }

                to {
                    -webkit-transform: scale(1);
                }
            }

            @keyframes animatezoom {
                from {
                    transform: scale(0);
                }

                to {
                    transform: scale(1);
                }
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }

                .cancelbtn {
                    width: 100%;
                }
            }

            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                display: inline-block;
                position: relative;
                background-color: #f1f1f1;
                color: #666;
                top: 10px;
                height: 30px;
                width: 30px;
                border: 0;
                border-radius: 50px;
                cursor: pointer;
                margin-right: 7px;
                outline: none;
            }

            .form-radio:checked::before {
                position: absolute;
                font: 13px/1 'Open Sans', sans-serif;
                left: 11px;
                top: 7px;
                content: '\02143';
                transform: rotate(40deg);
            }

            .form-radio:hover {
                background-color: #f7f7f7;
            }

            .form-radio:checked {
                background-color: #f1f1f1;
            }

            label {
                font: 300 16px/1.7 'Open Sans', sans-serif;
                color: #666;
                cursor: pointer;
            }

            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
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

            .container {
                padding: 2px 16px;
            }
        </style>         
    </head>     
    <body> 
        <?php 
        include "header.php";
        ?>
        <script>
            // menentukan tombol header yang aktif
            document.getElementById("lihat_antrean").setAttribute("class", "active");
        </script>         
        
        <div class="container"> 
            <div class="grid-container" style="padding-left: 84px;
    padding-right: 141px;"> 
                <label> 
                    <h1 ali>Lihat Nomor Antrean</h1> 
                </label>                 
                <div class="nik"> 
                  
                            <label class="control-label">NIK atau Nomor HP/Telepon</label>
                        </div>
                        <div class="col-md-3">
                            <form>
                            <input type="text" name="search" placeholder="Masukan nomor NIK atau Nomor HP/Telepon yang ingin dicari..." 
                                > 
                            <button type="submit">Cari</button>                             
                            </form>
                        </div>                         
                    </div>


        <div class="container"> 
            <div class="grid-container" style="padding-left: 84px;
    padding-right: 141px;"> 
                <label> 
                    <h1></h1> 
                </label>                 
                
                        <table>
                            <tr>
                                <th>No Antrean</th>
                                <th>Nama Poli</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>NIK</th>
                                <th>No Telpon</th>
                            </tr>
                            <?
                            if (!empty($_GET['search'])){
                                $search = $_GET['search'];
                                for ($i=1; $i<=5; $i++){
                                    $hasil_pencarian = $conn -> query("
                                        select * from antrean_poli{$i} 
                                        A left join poli B 
                                        on A.id_poli = B.id_poli 
                                        where nik='{$search}' or notelp='{$search}'
                                    ");
                                    while ($rows = $hasil_pencarian -> fetch_assoc()){
                                    
                            ?>
                            <tr>
                            <td> <?= $rows['no_antrean'] ?></td>
                            <td> <?= $rows['nama_poli'] ?></td>
                            <td> <?= $rows['nama_pasien'] ?></td>
                            <td> <?= $rows['jeniskelamin'] ?></td>
                            <td> <?= $rows['tgllahir'] ?></td>
                            <td> <?= $rows['alamat'] ?></td>
                            <td> <?= $rows['nik'] ?></td>
                            <td> <?= $rows['notelp'] ?></td>
                            </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                           
                        </table>
                    </body>
                </html>
            </div>             
        </div>
    </body>     
</html>
