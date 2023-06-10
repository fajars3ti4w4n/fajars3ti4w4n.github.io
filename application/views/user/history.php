<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>history</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/history.css">
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- bootsrap end -->

</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bold" href="<?php echo site_url('halaman_utama') ?>">Noobies Book.</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex fw-semibold">
                    <li class="nav-item me-4">
                        <a class="nav-link " aria-current="page" href="<?php echo site_url('halaman_utama') ?>">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link " href="#">Recomended</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?php echo site_url('halaman_buku') ?>">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('history') ?>">History</a>
                    </li>
                </ul>
                <a href="<?php echo site_url('login/logout') ?>"style="color: white;" onclick="return confirm('Apakah Anda yakin akan Logout?');">
                <button class="btn">Log Out</button>
                </a> 
            </div>
        </div>
    </nav>
    <!-- Navbar End-->
    <section class="history-peminjaman mt-5">    <br><br>
    <center>
     <?php echo $this->session->flashdata('notif') ?>
  </center>


<center>
    <h1>History Peminjaman</h1>
</center>

<section class="history-peminjaman mt-5">

<table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Dipinjam Pada Tanggal</th>
                    <th scope="col">Dikembalikan Pada Tanggal</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php  $no = 1; foreach($history as $h){  ?>
                <tr>
                    <td scope="row" style="padding-top: 1%;"><?php echo $h->id_history?></th>
                    <td style="padding-top: 1%;"><?php echo $h->judul_buku?></td>
                    <td style="padding-top: 1%;"><?php echo $h->nama_peminjam?></td>
                    <td style="padding-top: 1%;"><?php echo $h->dipinjam_pada_tanggal?></td>
                    <td style="padding-top: 1%;"><?php echo $h->dikembalikan_pada_tanggal?></td>
                    <td style="padding-top: 1%;"><?php echo $h->status?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>

</section>
 

    <!-- popup modal  -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Return Book</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you have returned the book?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel peminjaman -->


    <!-- bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- bootsrap js end-->

</body>

</html>