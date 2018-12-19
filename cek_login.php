<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'connection.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$sql_result = $conn->query("select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql_result);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/admin.php");
}else{
    header("location:cek_login.php?pesan=gagal");
}
?>