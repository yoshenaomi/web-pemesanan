<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "registrasi"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));

// Siapkan query SQL untuk menyimpan data termasuk gambar
$sql = "INSERT INTO tour_packages (nama, tanggal, jam, deskripsi, harga, gambar) 
VALUES ('$nama', '$tanggal', '$jam', '$deskripsi', '$harga', '$gambar')";

if ($conn->query($sql) === TRUE) {
    // Data berhasil ditambahkan, arahkan kembali ke halaman daftar_wisata.php
    header("Location: ../layoutsadmin/daftar_wisata.php");
    exit(); // Pastikan kode selanjutnya tidak dijalankan setelah mengarahkan halaman
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
