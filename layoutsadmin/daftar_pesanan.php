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

    <!-- Content tabel untuk menampilkan data yang ada pada tabel di database -->
    <div class="row m-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
            <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Daftar Pesanan Tipe Kamar</h3>
            </div>
            <div class="card-body">
                <table class="table table-condesed" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nomer Hp</th>
                            <th>Tanggal Pesan</th>
                            <th>Durasi</th>
                            <th>Harga Tipe Kamar</th>
                            <th>Harga Breakfast</th>
                            <th>Diskon</th>
                            <th>Jumlah Tagihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include '../koneksi.php'; // pastikan koneksi.php sudah benar
                        $result = mysqli_query($conn, "SELECT * FROM tbl_registrasi");
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['namapemesan'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['nohp'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['tanggalpesan'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['durasi'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['hargapaket'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['hargapaketbf'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['diskon'] ?></td> <!-- sesuaikan nama kolom -->
                                <td><?= $row['jumlahtagihan'] ?></td> <!-- sesuaikan nama kolom -->
                                <td>
                                <a class="btn btn-danger" href="../controllerslayoutadmin/hapuspesanan.php?id=<?= $row['id'] ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- End content tabel untuk menampilkan data yang ada pada tabel di database -->
    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>