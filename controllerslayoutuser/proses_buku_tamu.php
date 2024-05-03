<?php 
require '../koneksi.php';

session_start();

//kode untuk perintah koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

//mengambil nilai dari atribut name yang ada pada form buku tamu
$namapemesan = $_POST['namapemesan'];
$kritiksaran = $_POST['kritiksaran'];
$tanggalpesan = $_POST['tanggalpesan'];

//menambahkan data baru yang telah diinputkan pada form ke tabel buku_tamu
$query_sql = "INSERT INTO buku_tamu (namapemesan, kritiksaran, tanggalpesan) 
VALUES ('$namapemesan','$kritiksaran','$tanggalpesan')";


if(mysqli_query($conn, $query_sql)) {
    $last_id = $conn->insert_id;
    
    // Simpan ID dalam session
    $_SESSION['last_insert_id'] = $last_id;
    header("Location: ../layoutsuser/cek_buku_tamu.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
