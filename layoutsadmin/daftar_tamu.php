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
    <!-- Content menampilkan isi dari tabel buku tamu yang ada di database -->
    <div class="row m-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Daftar Buku Tamu</h3>
                </div>
                <div class="card-body">
                    <table class="table table-condesed" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Kritik atau Saran</th>
                                <th>Tanggal Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../koneksi.php'; // pastikan koneksi.php sudah benar
                            $result = mysqli_query($conn, "SELECT * FROM buku_tamu");
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['namapemesan'] ?></td> <!-- sesuaikan nama kolom -->
                                    <td><?= $row['kritiksaran'] ?></td> <!-- sesuaikan nama kolom -->
                                    <td><?= $row['tanggalpesan'] ?></td> <!-- sesuaikan nama kolom -->
                                    <td>
                                        <a class="btn btn-danger" href="../controllerslayoutadmin/hapusbukutamu.php?id=<?= $row['id'] ?>">Hapus</a>
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
    <!-- Content menampilkan isi dari tabel buku tamu yang ada di database -->
    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>