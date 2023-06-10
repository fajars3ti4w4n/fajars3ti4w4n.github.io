<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Beranda</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Style/halaman-utama.css" />



  <!-- slick -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- slick end-->


  <!-- bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- bootsrap end -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <a class="navbar-brand fw-bold" href="<?php echo site_url('admin_halaman_utama') ?>">Noobies Book <b style="color:aqua" >ADMIN+</b></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
          <li class="nav-item me-4">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('admin_halaman_utama') ?>">Home</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="#rekomended">Recomended</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin_halaman_buku') ?>">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin_history') ?>"> History</a>
          </li>
        </ul>
        <a href="<?php echo site_url('login/logout') ?>"style="color: white;" onclick="return confirm('Apakah Anda yakin akan Logout?');">
        <button class="btn">Log Out</button>
        </a> 
      </div>
    </div>
  </nav>
  <!-- Navbar End-->
    <br>
  <center>
     <?php echo $this->session->flashdata('notif') ?>
  </center>

  

  <!-- Hero 1 -->
  <?php  $no = 1; foreach($buku_terbaru as $bt){  ?>
  <section class="container-hero-1 mt-5 mx-auto">
    <div class="row d-flex align-items-center row-cols-lg-2 row-cols-1 ">
      <div class="col mt-4 ">
        <h2><?php echo $bt->judul_buku_terbaru?></h2>
        <p class="w-100 mt-4">
        <?php echo $bt->caption_buku_terbaru?>
        </p>
          
     </div>
      <div class="col">
        <img src="<?php echo base_url();?>assets/buku_terbaru/<?php echo $bt->gambar_buku ?>" alt="" />
      </div>
    </div>
  </section>
  
  
     <br>  <br>  
    <center>
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?php echo $bt->id_buku ?>" style="color:white" >
            Update Buku Terbaru Minggu ini  
          </button> 
          </center> <br>  <br>  
  <!-- Hero 1 -->

  <!-- Popup update buku terbaru minggu ini-->
  <div class="modal fade " id="update<?php echo $bt->id_buku ?>" tabindex="-1" aria-labelledby="update_bukuLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Update Buku Terbaru Minggu Ini</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('admin_halaman_utama/update') ?>
          <form action="<?php echo base_url('admin_halaman_utama/update'); ?>" method="post">

          <div class="mb-2">
                    <input type="text" class="form-control" name="id_buku" id="exampleInputNim" required value="<?php echo $bt->id_buku?>" hidden>
           </div>
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku Terbaru</label>
                    <input type="text" class="form-control" name="judul_buku_terbaru" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Caption Untuk Buku Terbaru </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="caption_buku_terbaru" required></textarea>
           </div>
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku Terbaru</label>
                    <input type="file" class="form-control" name="gambar_buku" id="exampleInputNim" required>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin akan Memperbaharui Buku Terbaru Minggu ini?');">Confirm</button>
          <?php echo form_close(); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?> 
  <!--popup end  -->


  <!-- hero 2 -->
  <?php  $no = 1; foreach($rekomendasi_buku as $rb){  ?>

  <section class="container-hero-2" id="rekomended">
    <h4 class="fw-semibold ">Recomended For You </h4>
    <div class="caraosel d-flex ">

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/rekomendasi_buku/<?php echo $rb->gambar_buku_1 ?>">
        </div>
        <div class="caption-button ">
          <h6><?php echo $rb->judul_buku_1?></h6>
          <p><?php echo $rb->keterangan_buku_1?></p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/rekomendasi_buku/<?php echo $rb->gambar_buku_2 ?>">
        </div>
        <div class="caption-button ">
          <h6><?php echo $rb->judul_buku_2?></h6>
          <p><?php echo $rb->keterangan_buku_2?></p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/rekomendasi_buku/<?php echo $rb->gambar_buku_3 ?>">
        </div>
        <div class="caption-button ">
          <h6><?php echo $rb->judul_buku_3?></h6>
          <p><?php echo $rb->keterangan_buku_3?></p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/rekomendasi_buku/<?php echo $rb->gambar_buku_4 ?>">
        </div>
        <div class="caption-button ">
          <h6><?php echo $rb->judul_buku_4?></h6>
          <p><?php echo $rb->keterangan_buku_4?></p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>

      <div class="buku1 d-flex mt-2 gap-3 ">
        <div class="cover">
          <img src="<?php echo base_url();?>assets/rekomendasi_buku/<?php echo $rb->gambar_buku_5 ?>">
        </div>
        <div class="caption-button ">
          <h6><?php echo $rb->judul_buku_5?></h6>
          <p><?php echo $rb->keterangan_buku_5?></p>
          <button class="btn fw-semibold mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Choose
            Book</button>
        </div>
      </div>


    </div>
    </div>
  </section> <br> <br>

  <center>
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update_rekomendasi_buku<?php echo $rb->id_rekomendasi?>" style="color:white" >
            Update Rekomendasi Buku Minggu ini  
          </button> 
          </center>
   
  <!-- hero 2 end -->

  <!-- Popup update Rekomendasi minggu ini-->
  <div class="modal fade " id="update_rekomendasi_buku<?php echo $rb->id_rekomendasi ?>" tabindex="-1" aria-labelledby="update_bukuLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Update Rekomendasi Buku Minggu Ini</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('admin_halaman_utama/update_rekomendasi_buku') ?>
          <form action="<?php echo base_url('admin_halaman_utama/update_rekomendasi_buku'); ?>" method="post">

          <div class="mb-2">
                    <input type="text" class="form-control" name="id_rekomendasi" id="exampleInputNim" required value="<?php echo $rb->id_rekomendasi?>" hidden>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku 1</label>
                    <input type="file" class="form-control" name="gambar_buku_1" id="exampleInputNim" required>
           </div>
           
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku 1</label>
                    <input type="text" class="form-control" name="judul_buku_1" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Keterangan Untuk Buku 1 </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan_buku_1"></textarea>
           </div>

           <hr>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku 2</label>
                    <input type="file" class="form-control" name="gambar_buku_2" id="exampleInputNim" required>
           </div>
           
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku 2</label>
                    <input type="text" class="form-control" name="judul_buku_2" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Keterangan Untuk Buku 2 </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan_buku_2"></textarea>
           </div>

           <hr> 
           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku 3</label>
                    <input type="file" class="form-control" name="gambar_buku_3" id="exampleInputNim" required>
           </div>
           
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku 3</label>
                    <input type="text" class="form-control" name="judul_buku_3" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Keterangan Untuk Buku 3 </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan_buku_3"></textarea>
           </div>

           <hr>
           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku 4</label>
                    <input type="file" class="form-control" name="gambar_buku_4" id="exampleInputNim" required>
           </div>
           
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku 4</label>
                    <input type="text" class="form-control" name="judul_buku_4" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Keterangan Untuk Buku 4 </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan_buku_4"></textarea>
           </div>
           <hr>
           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku 5</label>
                    <input type="file" class="form-control" name="gambar_buku_5" id="exampleInputNim" required>
           </div>
           
          <div class="mb-2">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Untuk Buku 5</label>
                    <input type="text" class="form-control" name="judul_buku_5" id="exampleInputNim" required>
           </div>
           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Keterangan Untuk Buku 5 </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan_buku_5"></textarea>
           </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin akan Memperbaharui Rekomendasi Buku Minggu ini?');">Confirm</button>
          <?php echo form_close(); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!--popup end  -->

  <!-- Popup -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <label for="exampleDataList" class="form-label">Masukan data kamu </label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Masukan Nama">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirm Book</button>
        </div>
      </div>
    </div>
  </div>
  <!--popup end  -->

  

  <!-- hero 3 -->
  <section class="container-hero-3">
    <div class="row p-3 rounded-3 mb-4 d-flex justify-content-between">
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
  <!-- hero 3 end-->







  <!-- slick -->
  </script>
  <!-- initialize jQuery Library -->
  <script src="<?php echo base_url();?>assets/slick/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/slick/slick-carousel/slick.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  </script>
  <!-- slick end -->

  <!-- bootsrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!-- bootsrap js end-->
</body>

</html>