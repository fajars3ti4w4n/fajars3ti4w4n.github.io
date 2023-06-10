<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSTAKAAN-WEB</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/awal-akses.css" />
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos end -->

    <!-- slick js -->

    <!-- slick js  end-->

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- bootsrap end -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="<?php echo site_url('awal_akses') ?>">Noobies Book.</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('awal_akses') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">About Us</a>
                    </li>
                </ul>
                <a href="<?php echo site_url('login') ?>" style="color: white;">
                <button class="btn fw-semibold">Login</button>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End-->

    <!-- Hero 1 -->
    <?php  $no = 1; foreach($buku_terbaru as $bt){  ?>
    <section class="container-hero-1 mt-5">
        <div class="row">
            <div class="col mt-4">
                <h2><?php echo $bt->judul_buku_terbaru?></h2>
                <p class="w-100 mt-4">
                <?php echo $bt->caption_buku_terbaru?>
                </p>
                <a href="<?php echo site_url('register') ?>" style="color: white;">
                <button class="btn mt-4">Register Now</button>
                </a>
            </div>
            <div class="col">
                <img src="<?php echo base_url();?>assets/buku_terbaru/<?php echo $bt->gambar_buku ?>" alt="" />
            </div>
        </div>
    </section>
    <?php } ?> 
    <!-- Hero 1 -->
    



    <!-- hero 2 -->
    <section class="container-hero-2">
        <div class="row p-3 rounded-3 mb-4 d-flex justify-content-between" id="footer">
            <div class="col ">
                <h3 class="fw-bold mb-4">Noobies Book.</h3>
                <p>Our library book booking system provides convenient and efficient access, ensuring you get the
                    desired books without having to wait. Together, let's explore the world of knowledge through the
                    books available in our library.</p>
            </div>

            <div class="col d-flex flex-column gap-2 col-lg-2 col-12">
                <h5 class="fw-bold mb-4">Menu</h5>
                <a href="#">Home</a>
                <a href="#">About Us</a>
            </div>

            <div class="col d-flex flex-column gap-2  ">
                <h5 class="fw-bold mb-4 ">Follow Me</h5>
                <a href="https://instagram.com/noobies.io?igshid=MmJiY2I4NDBkZg==" target="_blank">Instagram </a>
                <a href="https://github.com/Orizaaaaa" target="_blank">Github</a>
            </div>
        </div>
    </section>
    <!-- hero 2 end -->















    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- aos end -->

    <!-- slick -->

    <!-- slick end -->

    <!-- bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- bootsrap js end-->
</body>

</html>