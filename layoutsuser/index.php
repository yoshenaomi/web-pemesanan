<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Hotel Aston Banyuwangi</title>
</head>

<body>
    <!-- Perintah PHP untuk pemanggilan file navbar-->
    <?php
    include '../navbarfooter/navbar.php'
    ?>
    <!-- End navbar -->

    <!-- Header -->
    <div class="container mt-3">
        <div class="px-3 py-2" style="background-image: url('../assets/aston1.jpg'); 
      background-size: cover; 
      background-position: center;">
            <h1 style="margin-top: 50px; 
      color: black; 
      text-align: center;
      font-weight: bolder;
      ">Aston Banyuwangi</h1>
            <p style="margin: 20px; 
      color: white; 
      text-align: center;
      font-weight: bold;
    ">Hotel and Conference Center</p>
        </div>
    </div>
    <!-- End Header -->

    <!-- Content card keunggulan dari Aston Banyuwangi-->
    <div class="container" style="display: flex; 
  justify-content: center; 
  align-items: center; 
  text-align: center;">
        <div class="item" style="padding: 20px;
    margin: 10px;
    background-color: rgb(224, 211, 195);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;">
            <img src="../assets/room.png" alt="Icon 1" style="max-width: 50px;
      height: auto;">
            <h3 style="margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bolder;
      font-size:large;">Lingkungan Yang Nyaman</h3>
            <p style="margin-top: 5px;
      margin-bottom: 0;
      font-size: 14px;
      color: #666;">Menyediakan beberapa tipe kamar yang sangat nyaman untuk ditempati.</p>
        </div>
        <div class="item" style="padding: 20px;
    margin: 10px;
    background-color: rgb(224, 211, 195);
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <img src="../assets/besprice.png" alt="Icon 1" style="max-width: 50px;
      height: auto;">
            <h3 style="margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bolder;
      font-size:large;">Harga Terbaik</h3>
            <p style="margin-top: 5px;
      margin-bottom: 0;
      font-size: 14px;
      color: #666;">Harga kamar mulai dari Rp.500.000, dengan fasilitas dalam kamar dalam kondisi baik.</p>
        </div>
        <div class="item" style="padding: 20px;
    margin: 10px;
    background-color: rgb(224, 211, 195);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;">
            <img src="../assets/staf.png" alt="Icon 1" style="max-width: 50px;
      height: auto;">
            <h3 style="margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bolder;
      font-size:large;">Staff 24jam</h3>
            <p style="margin-top: 5px;
      margin-bottom: 0;
      font-size: 14px;
      color: #666;">Terdapat banyak pegawai yang bekerja selama 24 jam untuk melayani permintaan pelanggan.</p>
        </div>
    </div>
    <!-- End content keunggulan Aston Banyuwangi -->

    <!-- Content  card tipe kamar-->

    <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Tipe Kamar Yang Tersedia</h3>

    <div class="container">
        <div class="row mt-3" style="padding-left: 80px; padding-right: 80px;">
            <div class="col-12 col-md-9" style="margin-top: 10px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <!-- Script php untuk koneksi ke database -->
                    <?php

                    $servername = "localhost";
                    $username = "root"; // username MySQL 
                    $password = ""; // password MySQL
                    $dbname = "registrasi"; // nama database

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Periksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Ambil data dari database tabel untuk tipe kamar = tabel tour_packages
                    $sql = "SELECT * FROM tour_packages";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Menampilkan data dalam bentuk card
                        while ($row = $result->fetch_assoc()) {
                    ?>

                            <!-- Card tipe kamar -->
                            <div class="card" style="margin-top: 10px;">
                                <img src="data:image/jpeg;base64, <?php echo base64_encode($row['gambar']); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight: bold; font-size: medium;">
                                        <?php echo $row['nama']; ?>
                                    </h5>
                                    <hr>
                                    <img src="../assets/jam.png" alt="Jam Icon" style="width: 20px; height: auto;">
                                    <span style="font-weight:normal; font-size: small;"> - <?php echo $row['jam']; ?></span>
                                    <br>
                                    <img src="../assets/calendar.png" alt="Tanggal Icon" style="width: 20px; height: auto;">
                                    <span style="font-weight:normal; font-size: small;"> - <?php echo $row['tanggal']; ?></span>
                                    <p class="card-text" style="margin-top: 8px; font-size: small;">
                                        <?php echo $row['deskripsi']; ?>
                                    </p>
                                    <hr>
                                    <h5 class="card-title" style="font-weight: bold; font-size: medium; text-align: center;">
                                        Harga Rp. <?php echo $row['harga']; ?> /pax
                                    </h5>
                                    <div class="text-center">
                                        <a href="../layoutsuser/pemesanan.php" class="btn btn-secondary btn-sm" style="margin-top: 10px;">Pesan Tipe Kamar Ini?</a>
                                    </div>
                                </div>
                            </div>

                            <!-- End card paket wisata -->
                    <?php
                        }
                    } else {
                        echo "Tidak ada data yang ditemukan";
                    }

                    // Tutup koneksi
                    $conn->close();
                    ?>
                </div>
            </div>
            <!-- End content card paket wisata -->

            <!-- Content card menampilkan video dari youtube -->
            <div class="col-12 col-md-3" style="padding: 10px;">
                <div class="card video-card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; font-size: medium;">
                            Standar Room
                        </h5>
                        <div class="text-center ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ehE0vdBqbDk?si=bI1LwYRl7LNR81Ls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="card video-card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; font-size: medium;">
                            Review Hotel Aston
                        </h5>
                        <div class="text-center ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/2po71lQtknU?si=yqpb6aIhVJyWseoh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="card video-card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold; font-size: medium;">
                                Hotel Aston Banyuwangi
                            </h5>
                            <div class="text-center ratio ratio-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/1Lu8jEmdnw8?si=dol1fER-KTwGJf1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content card menampilkan video dari youtube -->

        <!-- Content contact us -->
        <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Kontak Kami</h3>
        <div class="col-md-3" style="justify-content: center; margin-left: 400px;">
            <section id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="../controllerslayoutuser/proses_kontak_kami.php" method="post" autocomplete="off">
                                <div class="mb-3" strict-origin-when-cross-origin>
                                <label for="namapemesan" class="form-label">Nama Pengunjung</label>
                        <input type="text" class="form-control form-control-sm" id="namapemesan" name="namapemesan" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kritiksaran" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control form-control-sm" id="kritiksaran" name="kritiksaran" placeholder="" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom: 20px;" name="submit">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- End content contact us -->
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