<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style/style.css">

  <title>Form Register</title>
</head>

<style type="text/css">
    body{
        background-image: url(<?php echo base_url("assets/bg.jpg");?>);
      
    }
</style>

<body>

            <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

  <div class="container">
    <div class="card login-form">
      <div class="card-body ">
        <h1 class="card-title mt-4 text-center">Register</h1>
        <h6 class="card-subtitle text-muted mb-3 fw-bold text-center">Please register your account immediately</h6>

       

        <form method="post" action="<?php echo base_url(); ?>index.php/register/proses">

          <!--  -->
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email*</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Your Email" name="email"required>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username*</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Your Username" name="username"required>
          </div>

        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 Character"
            name="password" required>
          </div>

          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 Character"
            name="level" hidden value="2">
          </div>
            
          <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

          </div>
          <div class="d-grid mt-2">
            <button type="submit" class="btn btn-success btn-login">create an account</button>
          </div>

          <div class="mt-3">
            <label>Already have an account? <a href="<?php echo site_url('login') ?>" class="link">log in to an existing account</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>