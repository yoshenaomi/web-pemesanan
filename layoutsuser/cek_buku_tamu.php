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
                <strong>Selamat</strong> Data berhasil tersimpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- End content toast bahwa telah berhasil melakukan pengisian buku tamu -->

            <!-- Script php untuk akses data dari tabel buku_tamu berdasarkan id yang ada ketika sesi itu -->
            <?php include '../koneksi.php';
            session_start();

            $id = $_SESSION['last_insert_id'];
            $data = mysqli_query($conn, "select * from buku_tamu where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <!-- End script php -->

                <!-- Content bukti isi buku tamu -->
                <div class="card" text-center>
                    <div class="card-header" style="font-weight:bold;">
                        BUKTI ISI BUKU TAMU
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td><?= $d['namapemesan'] ?></td>
                            </tr>
                            <tr>
                                <td>Kritik atau Saran</td>
                                <td><?= $d['kritiksaran'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pesan</td>
                                <td><?= $d['tanggalpesan'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- End content bukti isi buku tamu -->
            <?php
            }
            ?>
        </div>
    </div>
    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>