
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('argon')?>/assets/img/twk.png" rel="icon">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
    <link rel="stylesheet" href="<?= base_url('fa4')?>/css/font-awesome.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('usr')?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('usr')?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('usr')?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('usr')?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
                    <?php

                        foreach ($profile as $profile) {

                    ?>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Lokasi Masjid</h6>
                        <span><?= $profile['alamat'] ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email</h6>
                        <span><?= $profile['email'] ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Telepon</h6>
                        <span class="fi fi-id" style="background-color: black;"></span> <span><?= $profile['telepon'] ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="" class="navbar-brand ms-lg-5">
            <h3 class="m-0 text-uppercase text-dark">Sistem Informasi Masjid</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/home" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">Profile</a>
                <a href="/kajian" class="nav-item nav-link">Kajian</a>
                <a href="/user-pengumuman" class="nav-item nav-link active">Pengumuman</a>
                <a href="product.html" class="nav-item nav-link">Dakwah</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <a href="/user-pengumuman"><button type="button" class="btn btn-primary ps-3 mb-4"><i class="bi-arrow-left"></i></button></a>
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="<?= base_url('usr')?>/img/mas.jpg" alt="">
                    <h1 class="text-uppercase mb-4"><?= $pengumuman['Judul_Pengumuman'] ?></h1>
                    <p><?= $pengumuman['deskripsi'] ?></p>
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Masjid Tawakal</h3>

               <!-- Image Start -->
                <div class="mb-4">
                    <img src="<?= base_url('usr') ?>/img/showtwk.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End --> 


                <!-- Plain Text Start -->
                <div>
                    <div class="bg-light text-center" style="padding: 30px;">
                                           <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Misi</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Visi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <p class="mb-0">1. Melaksanakan kegiatan sholat lima waktu secara berjamaah <br>
                       2. Meningkatkan program pengajian secara rutin <br>
                       3. Melaksanakan Peringatan Hari Besar Islam <br>
                       4. Melaksanakan pembiasaan hidup bersih dan sehat <br>
                       5. Meningkatkan kegiatan sosial kemasyarakatan <br>
                       6. Menjaga kesucian Masjid sebagai tempat ibadah <br>
                       7. Menjadikan Masjid sebagai tempat untuk beribadah kepada Allah semata.</p> 
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Membentuk jamaah Masjid Tawakal yang beriman, bertaqwa, dan selamat dunia akhirat</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-8">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Alamat</h5>
                    <p class="mb-4">Masjid Tawakal</p>
                    <p class="mb-4">Pusat Kegiatan Ibadah Umat Muslim daerah Rajabasa</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i><?= $profile['alamat'] ?></p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i><?= $profile['email'] ?></p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i><?= $profile['telepon'] ?></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Profile</a>
                        <a class="text-body mb-2" href="kajian"><i class="bi bi-arrow-right text-primary me-2"></i>Kajian</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pengumuman</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Dakwah</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Kunjungi Website Admin Masjid Tawakal</h5>
                    <h6 class="text-uppercase mt-4 mb-3">Klik Dibawah ini</h6>
                    <div class="d-flex">
                        <a class="text-body mb-2" href="/login"><i class="bi bi-arrow-right text-primary me-2"></i>Admin Masjid Tawakal </a>
                    </div>
                </div>

                <!-- Jam Digital -->
                <h3 class="text-center " style="font-size: 100px; font-family: verdana;" id="jam"></h3>

                <div class="col-12 text-center text-body">
                    <a class="text-body" href="home">Home</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="profile">Profile</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="kajian">Kajian</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="user-pengumuman">Pengumuman</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="dakwah">Dakwah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Sistem Informasi Masjid Tawakal</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('usr')?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url('usr')?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('usr')?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('usr')?>/js/main.js"></script>
</body>

</html>
