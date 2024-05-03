<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pesona Blambangan</title>
</head>

<body>
    <!-- Perintah PHP untuk pemanggilan file navbar-->
    <?php
    include '../navbarfooter/navbaradmin.php'
    ?>
    <!-- End navbar -->

    <!-- Content untuk menampilkan data yang ada pada tabel paket wisata pada database -->
    <div class="row m-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Daftar Tipe Kamar</h3>
                    <!-- Script untuk button tambah data paket wisata -->
                    <a href="../controllerslayoutadmin/tambah_wisata.php" class="btn btn-sm btn-primary" style="margin-bottom: 20px;">Tambah Tipe Kamar</a>
                    <!-- End script untuk button tambah data paket wisata -->
                </div>
                <div class="card-body">
                    <table class="table table-condesed" border="1">
                        <thead>
                            <tr>
                                <th>Nama Kamar</th>
                                <th>Tanggal Tersedia</th>
                                <th>Jam Tersedia</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Koneksi ke database
                            $servername = "localhost";
                            $username = "root"; // username MySQL
                            $password = ""; // password MySQL Anda
                            $dbname = "registrasi"; // nama database

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Periksa koneksi
                            if ($conn->connect_error) {
                                die("Koneksi gagal: " . $conn->connect_error);
                            }

                            // Ambil data dari database
                            $sql = "SELECT * FROM tour_packages";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Tampilkan data dalam bentuk tabel
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['tanggal'] . "</td>";
                                    echo "<td>" . $row['jam'] . "</td>";
                                    echo "<td>" . $row['deskripsi'] . "</td>";
                                    echo "<td>" . $row['harga'] . "</td>";
                                    echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row['gambar']) . '" width="100"/></td>';
                                    echo '<td><a class="btn btn-danger" href="../controllerslayoutadmin/hapus_wisata.php?id=' . $row['id'] . '">Hapus</a></td>';
                                    echo "</tr>";
                                }
                            } else {
                                echo "Tidak ada data yang ditemukan";
                            }

                            // Tutup koneksi
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End content untuk menampilkan data yang ada pada tabel paket wisata pada database -->
    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html