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

    <!-- Content form tambah data paket wisata -->
    <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Tambah Tipe Kamar</h3>
    <form action="../controllerslayoutadmin/proses_tambah_data_wisata.php" method="POST" enctype="multipart/form-data" style="margin-left: 40px; padding:30px;">
        <div class="form-group">
            <label for="nama">Nama Tipe Kamar:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="form-group" style="margin-top: 10px;">
            <label for="tanggal">Tanggal Tersedia:</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group" style="margin-top: 10px;">
            <label for="jam">Jam Tersedia:</label>
            <input type="text" class="form-control" id="jam" name="jam" required>
        </div>

        <div class="form-group" style="margin-top: 10px;">
            <label for="deskripsi">Deskripsi Tipe Kamar:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
        </div>

        <div class="form-group" style="margin-top: 10px;">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group" style="margin-top: 10px;">
            <label for="gambar">Gambar:</label>
            <input type="file" style="margin-left: 20px;" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-sm btn-success" style="margin-top: 10px;">Tambah Data</button>
    </form>
    <!-- Content form tambah data paket wisata -->

    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>