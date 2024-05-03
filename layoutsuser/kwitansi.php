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
    include '../navbarfooter/navbar.php'
    ?>
    <!-- End navbar -->

    <!-- Content toast bahwa telah berhasil melakukan pemesanan paket wisata -->
    <div class="row mt-3" style="margin-left: 30px;">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> Pesanan anda berhasil tersimpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- End content toast bahwa telah berhasil melakukan pemesanan paket wisata -->

            <!-- Script php untuk akses data dari tabel tbl_registrasi berdasarkan id yang ada ketika sesi itu -->
            <?php include '../koneksi.php';
            session_start();

            $id = $_SESSION['last_insert_id'];
            $data = mysqli_query($conn, "select * from tbl_registrasi where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <!-- End script php -->

                <!-- Content bukti pemesanan paket wisata -->
                <div class="card" text-center>
                    <div class="card-header" style="font-weight:bold;">
                        BUKTI PEMESANAN KAMAR
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td><?= $d['namapemesan'] ?></td>
                            </tr>
                            <tr>
                                <td>Nomer Hp</td>
                                <td><?= $d['nohp'] ?></td>
                            </tr>
                            <tr>
                                <td>Nomer Identitas</td>
                                <td><?= $d['no_identitas'] ?></td> <!-- Menampilkan nomor identitas -->
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?= $d['jenis_kelamin'] ?></td> <!-- Menampilkan jenis kelamin -->
                            </tr>
                            <tr>
                                <td>Tanggal Pesan</td>
                                <td><?= $d['tanggalpesan'] ?></td>
                            </tr>
                            <tr>
                                <td>Durasi</td>
                                <td><?= $d['durasi'] ?></td>
                            </tr>
                            <!-- <tr>
                                <td>Jumlah Peserta</td>
                                <td><?= $d['jumlahpeserta'] ?></td>
                            </tr> -->
                            <tr>
                                <td>Harga Paket</td>
                                <td><?= $d['hargapaket'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Breakfast</td>
                                <td><?= $d['hargapaketbf'] ?></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td><?php echo 'Rp ' . $d['diskon']; ?></td> <!-- Menampilkan nilai diskon dari database -->
                            </tr>
                            <tr>
                                <td>Jumlah Tagihan</td>
                                <td><?= $d['jumlahtagihan'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- End content bukti pemesanan tipe kamar lain -->

    <!-- Content untuk button pesan kembali -->
    <div class="card text-center" style="margin-top: 20px; margin-bottom: 20px">
        <span style="margin-bottom:5px">Pesan Tipe Kamar Lain? </span>
        <row style="margin-bottom:5px">
            <a href="pemesanan.php" class="btn btn-sm btn-primary">Iya</a>
            <a href="index.php" class="btn btn-sm btn-danger">Tidak</a>
        </row>
    </div>
    <!-- End content untuk button pesan kembali -->

    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>