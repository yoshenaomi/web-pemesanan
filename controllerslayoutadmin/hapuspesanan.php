<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tbl_registrasi where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../layoutsadmin/daftar_pesanan.php");
 
?>