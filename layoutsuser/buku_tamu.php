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

    <?php
    date_default_timezone_set("Asia/Bangkok");
    ?>

    <!-- Content form buku tamu -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
        <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Buku Tamu Pelanggan</h3>
            <form action="../controllerslayoutuser/proses_buku_tamu.php" method="post" autocomplete="off" style="margin-left: 80px;">
                <div class="row" >
                    <div class="mb-3 col-12 col-md-6">
                        <label for="namapemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-control-sm" id="namapemesan" name="namapemesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="kritiksaran" class="form-label">Kritik atau Saran</label>
                        <input type="text" class="form-control form-control-sm" id="kritiksaran" name="kritiksaran" placeholder="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tanggalpesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-control-sm" id="tanggalpesan" name="tanggalpesan" placeholder="" required>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom: 20px; margin-left:80px;"
                name="submit" value=<?php echo date("h:i:sa"); ?>>Simpan</button>
            </form>
        </div>
    </div>
    <!-- End content buku tamu -->

    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>