<?php 
require '../koneksi.php';

session_start();

//kode untuk perintah koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

//mengambil nilai dari atribut name yang ada pada form buku tamu
$namapemesan = $_POST['namapemesan'];
$kritiksaran = $_POST['kritiksaran'];

//menambahkan data baru yang telah diinputkan pada form ke tabel buku_tamu
$query_sql = "INSERT INTO buku_tamu (namapemesan, kritiksaran) 
VALUES ('$namapemesan','$kritiksaran')";


if(mysqli_query($conn, $query_sql)) {
    echo "Tersimpan";
    header("Location: ../layoutsuser/index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
