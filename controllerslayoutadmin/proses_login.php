<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menghubungkan ke database
    $host = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "registrasi";

    $conn = mysqli_connect($host, $username_db, $password_db, $database);

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Melakukan query untuk mencari data pengguna dengan username yang cocok
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // echo $query;
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika sesuai, set session dan arahkan ke halaman admin.php
        $_SESSION['username'] = $username;
        header("Location: ../layoutsadmin/dashboard_admin.php");
        // echo "<br>username dan password benar";
        exit();
    } else {
        // Jika tidak ditemukan pengguna dengan username dan password yang dimasukkan, tampilkan pesan error
        header("Location: ../layoutsadmin/login.php");
        // echo "<br>username dan password salah";
        exit();
    }

}
?>