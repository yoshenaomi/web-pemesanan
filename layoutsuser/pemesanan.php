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

    <!-- Content form untuk pemesanan tipe kamar -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Pesan Tipe Kamar</h3>
            <form action="../controllerslayoutuser/proses_pesan.php" method="post" autocomplete="off" style="margin-left: 80px;">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="namapemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-control-sm" id="namapemesan" name="namapemesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nohp" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control form-control-sm" id="nohp" name="nohp" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="no_identitas" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control form-control-user" id="no_identitas" name="no_identitas" maxlength="16" placeholder="Nomor Identitas" required>
                        <small id="errorMessage" class="form-text text-danger"></small>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <div class="">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-group">
                            <label for="jenis_kelamin">Laki-laki</label>
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                        </div>
                        <div class="form-group">
                            <label for="perempuan">Perempuan</label>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tanggalpesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-control-sm" id="tanggalpesan" name="tanggalpesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" placeholder="" required> <br>
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="mb-3 col-12 col-3">
                        <label for="jumlahpeserta" class="form-label">Jumlah Orang</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="jumlahpeserta" name="jumlahpeserta" aria-describedby="basic-addon2" placeholder="" required> <br>
                            <span class="input-group-text" id="basic-addon2">orang</span>
                        </div>
                    </div> -->
                    <div class="mb-3 col-12 col-md-6">
                        <div class="">
                            <label for="">Tipe Kamar</label>
                            <div class="d-lg-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="500000" id="standar" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="standar">standar room (Rp.500.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1500000" id="deluxe" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="deluxe">deluxe room (Rp.1.500.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2000000" id="2000000" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="family">family room (Rp.2.000.000)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <div class="">
                            <label for="">Layanan Breakfast</label>
                            <div class="d-lg-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="80000" id="breakfastya" name="paket1" onclick="sum_jumlah1()">
                                    <label for="form-check-label" for="breakfastya">dengan breakfast (Rp.80.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="breakfastno" name="paket1" onclick="sum_jumlah1()">
                                    <label for="form-check-label" for="breakfastno">tanpa breakfast (Rp.0)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="hargapaket" class="form-label">Harga Tipe Kamar</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="hargapaket" name="hargapaket" aria-describedby="basic-addon2" placeholder="" required> <br>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="hargapaketbf" class="form-label">Harga Breakfast</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="hargapaketbf" name="hargapaketbf" aria-describedby="basic-addon2" placeholder="" required> <br>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="jumlahtagihan" class="form-label">Jumlah Tagihan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="jumlahtagihan" name="jumlahtagihan" aria-describedby="basic-addon2" placeholder="" required>
                            <input type="hidden" id="diskon" name="diskon">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom: 20px;" name="submit" value=<?php echo date("h:i:sa"); ?>>Simpan</button>
                <button type="button" class="btn btn-sm btn-success" style="margin-bottom: 20px;" onclick="hitung()">Hitung</button>

            </form>
        </div>
    </div>
    <!-- End content form pemesanan paket wisata -->

    <!-- Script javascrpit untuk perhitungan -->

    <script type="text/javascript">
        // kode untuk alert
        document.addEventListener('DOMContentLoaded', function() {
            var noIdentitasInput = document.getElementById('no_identitas');
            var errorMessage = document.getElementById('errorMessage');

            noIdentitasInput.addEventListener('input', function() {
                if (this.value.length !== 16) {
                    errorMessage.textContent = 'Isian salah.. data harus 16 digit';
                } else {
                    errorMessage.textContent = '';
                }
            });
        });

        //script js untuk menghitung jumlah dari harga paket yang dipilih
        function sum_jumlah() {
            var paket = document.getElementsByName('paket');
            var hargapaket = 0;
            for (var i = 0; i < paket.length; i++) {
                if (paket[i].checked) {
                    hargapaket += parseFloat(paket[i].value);
                }
            }
            document.getElementsByName('hargapaket')[0].value = hargapaket;

            if (hargapaket == 0) {
                alert("Silakan Pilih Salah Satu")
            }
        }

        function sum_jumlah1() {
            var paket1 = document.getElementsByName('paket1');
            var hargapaketbf = 0;
            for (var i = 0; i < paket1.length; i++) {
                if (paket1[i].checked) {
                    hargapaketbf += parseFloat(paket1[i].value);
                }
            }
            document.getElementsByName('hargapaketbf')[0].value = hargapaketbf;

            if (hargapaketbf == 0) {
                alert("Silakan Pilih Salah Satu")
            }
        }
        //script js untuk menghitung jumlah total tagihan yang didasarkan hasil perkalian harga paket yang
        //dipilih dengan durasi serta jumlah peserta
        function hitung() {
            var hari = document.getElementById("durasi").value;
            var hpaket = document.getElementById("hargapaket").value;
            var hpaket1 = document.getElementById("hargapaketbf").value; //untuk breakfast
            var jumlahtagihantemp = parseInt(hari) * parseInt(hpaket);
            var jumlahtagihanbf = parseInt(hari) * parseInt(hpaket1); //untuk breakfast

            var diskon = 0;
            if (parseInt(hari) > 3) {
                diskon = jumlahtagihantemp * 0.1; // Menghitung diskon
                jumlahtagihantemp -= diskon; // Mengurangi diskon dari total tagihan
            }

            var jumlahtagihan = parseInt(jumlahtagihantemp) + parseInt(jumlahtagihanbf);
            document.getElementById("jumlahtagihan").value = jumlahtagihan;
            document.getElementById("diskon").value = diskon; // Menyimpan nilai diskon dalam input tersembunyi
        }
        //End script js perhitungan

        function checkInputLength() {
            var input = document.getElementById("no_identitas").value;

            if (input.length > 16) {
                alert("Isian kurang 16")
            }
        }
    </script>
    <!-- End script js perhitungan -->

    <!-- Perintah PHP untuk pemanggilan file footer-->
    <?php
    include '../navbarfooter/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>