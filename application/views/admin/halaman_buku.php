<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Halaman Buku</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/halaman-buku.css">
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- bootsrap end -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="<?php echo site_url('admin_halaman_utama') ?>">Noobies Book <b style="color:aqua" >ADMIN+</b></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
                    <li class="nav-item me-4">
                        <a class="nav-link " aria-current="page" href="<?php echo site_url('admin_halaman_utama') ?>">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link " href="#recomended">Recomended</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="<?php echo site_url('admin_halaman_buku') ?>">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin_history') ?>">History</a>
                    </li>
                </ul>
                <a href="<?php echo site_url('login/logout') ?>"style="color: white;" onclick="return confirm('Apakah Anda yakin akan Logout?');">
                <button class="btn">Log Out</button>
                </a> 
            </div>
        </div>
    </nav>

    <!-- navbar end -->
    <!-- halaman buku -->

    <section class="halaman-buku min-vh-100 d-flex align-items-center">
        <div class="container">
            <lottie-player class=" lottiefiles mx-auto"
                src="https://assets1.lottiefiles.com/packages/lf20_eq9hnyso.json" background="transparent" speed="1"
                loop autoplay></lottie-player>
            <input type="text" id="recomended" class=" input form-control form-control-lg shadow-none"
                placeholder="Search Book...">  <br> <br>
                
                <center>
                <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#tambah_buku">
                    Tambah Buku
                </button>
                </center> 
                <!-- Popup Tambah Buku -->
  <div class="modal fade " id="tambah_buku" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Tambah Buku</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('admin_halaman_buku/tambah_aksi') ?>
          <form action="<?php echo base_url('admin_halaman_buku/tambah_aksi'); ?>" method="post">

          <div class="mb-2">
                    <input type="text" class="form-control" name="id_buku" id="exampleInputNim"  hidden>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="exampleInputNim" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Caption Buku</label>
                    <input type="text" class="form-control" name="caption_buku" id="exampleInputNim" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis_buku" id="exampleInputNim" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" id="exampleInputNim" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="exampleInputNim" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Jumlah Halaman</label>
                    <input type="number" class="form-control" name="jumlah_halaman" id="exampleInputNim" required>
           </div>

           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" > Keterangan Buku</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan"></textarea>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku </label>
                    <input type="file" class="form-control" name="gambar_buku" id="exampleInputNim" required>
           </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="return confirm('Konfirmasi Tambah Buku?');">Confirm</button>
          <?php echo form_close(); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    <!-- Popup Tambah Buku End --><br>
    <center>
                <?php echo $this->session->flashdata('notif') ?>
             </center>

             <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 g-4 mt-5 ">
            <?php  $no = 1; foreach($buku as $b){  ?>
                <div class="col " data-bs-toggle="modal" data-bs-target="#popup<?php echo $b->id_buku ?>">
                <img src="<?php echo base_url();?>assets/buku/<?php echo $b->gambar_buku ?>" alt=""class=" mb-3 rounded-3">
                    <h5 class="fw-bold"><?php echo $b->judul_buku?></h5>
                    <p><?php echo $b->caption_buku?></p>
                </div>
                
                
                <!-- Popup edit-->
    <div class="modal fade " id="popup<?php echo $b->id_buku ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"> Buku <b><?php echo $b->judul_buku ?></b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><small>*Harap isi semua kolom sebelum memperbarui data</small></center>
                <?php echo form_open_multipart('admin_halaman_buku/update') ?>
                <form action="<?php echo base_url('admin_halaman_buku/update'); ?>" method="post">
                
                <div class="mb-2">
            <input type="text" class="form-control" name="id_buku" id="exampleInputNim" value="<?php echo $b->id_buku?>"  hidden>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="exampleInputNim" placeholder="<?php echo $b->judul_buku?>" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Caption Buku</label>
                    <input type="text" class="form-control" name="caption_buku" id="exampleInputNim" placeholder="<?php echo $b->caption_buku?>" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis_buku" id="exampleInputNim" placeholder="<?php echo $b->penulis_buku?>" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" id="exampleInputNim" placeholder="<?php echo $b->tahun_terbit?>" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="exampleInputNim"  placeholder="<?php echo $b->penerbit?>" required>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Jumlah Halaman</label>
                    <input type="number" class="form-control" name="jumlah_halaman" id="exampleInputNim" placeholder="<?php echo $b->jumlah_halaman?>" required>
           </div>

           <div class="mb-4">
                    <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" > Keterangan Buku</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="keterangan" required><?php echo $b->keterangan?></textarea>
           </div>

           <div class="mb-2">
           <label for="exampleInputNim" class="form-label" style="padding-right: 40%;" >Masukan Gambar Buku </label>
                    <input type="file" class="form-control" name="gambar_buku" id="exampleInputNim" placeholder="<?php echo $b->gambar_buku?>" required>
           </div>
          
        </div>
        <div class="modal-footer">
        
          <button type="submit" class="btn btn-primary" onclick="return confirm('Konfirmasi Update Buku?');">Perbaharui Data Buku</button>
          <?php echo form_close(); ?>
          
          </form>
                </div>
                
            </div>
            
        </div>
        
        </div>
        <?php } ?>
    </div>
    
    
    
    </section>


    
</body>


 <!-- bootsrap js -->
 <script src="<?php echo base_url();?>assets/Scripts/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- bootsrap js end-->

    <script>
        let columns = document.querySelectorAll('.col[data-bs-toggle="modal"]');

        // Loop melalui setiap elemen col
        columns.forEach(function (column) {
            // Tambahkan event listener untuk menghandle klik pada setiap elemen col
            column.addEventListener('click', function () {
                // Dapatkan judul dari elemen "h5" yang ada di dalam elemen col terkait
                let bookTitle = this.querySelector('h5').innerText;

                // Temukan elemen modal title
                let modalTitle = document.querySelector('.modal-title');

                // Perbarui judul modal dengan judul buku yang dipilih
                modalTitle.innerText = bookTitle;
            });
        });
    </script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>