<?php 
require '../koneksi.php';

session_start();

//kode koneksi ke db
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

//mengambil nilai dari atribut name yang ada pada form pemesanan
$nama = $_POST['namapemesan'];
$nohp = $_POST['nohp'];
$no_identitas = $_POST['no_identitas'];
$tanggalpesan = $_POST['tanggalpesan'];
$durasi = $_POST['durasi'];
$jumlahpeserta = $_POST['jumlahpeserta'];
$hargapaket = $_POST['hargapaket'];
$hargapaketbf = $_POST['hargapaketbf'];
$jumlahtagihan = $_POST['jumlahtagihan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$diskon = $_POST['diskon'];

//perintah untuk menambahkan data yang telah dimasukkan pada tabel tbl_registrasi
$query_sql = "INSERT INTO tbl_registrasi (namapemesan, nohp, no_identitas, tanggalpesan, durasi, jumlahpeserta, hargapaket, hargapaketbf,diskon, jenis_kelamin, jumlahtagihan) 
VALUES ('$nama','$nohp','$no_identitas','$tanggalpesan','$durasi','$jumlahpeserta','$hargapaket','$hargapaketbf','$diskon','$jenis_kelamin','$jumlahtagihan')";

if(mysqli_query($conn, $query_sql)) {
    $last_id = $conn->insert_id;
    
    // Simpan ID dalam session
    $_SESSION['last_insert_id'] = $last_id;
    header("Location: ../layoutsuser/kwitansi.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
