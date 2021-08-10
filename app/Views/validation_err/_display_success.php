<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-ezquiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="<?= site_url()?>css/user.css" rel="stylesheet" />
  <title>FiliNumisworks</title>
</head>

<body>
  <div class="app-container">

    <!-- form and logo -->
    <div class="mx-auto col-lg-7 col-12 d-flex align-items-center">
      <div class="container">
        <div class="d-flex justify-content-center">
          <img src="<?= site_url()?>assets/images/logo-dark.png" id="compLogo" class="py-4" alt="">
        </div>
        
        <div class="alert alert-success text-center p-4">
          <i class="far fa-check-circle fa-7x"></i>
          <p class="py-3">
            <?= $message?>
          </p>
          <div class="d-flex justify-content-end">
            <a href="<?= site_url()?>sign_in" class="btn btn-success rounded-pill">Okay</a>
          </div>
        </div>
        
        <h6 class="text-center text-sm-start text-secondary mt-3">
          Already have an account? <a href="<?= site_url()?>sign_in" class="link-primary">Sign in</a>
        </h6>
      </div>
    </div>

    <!-- background image with opacity -->
    <div class="col-lg-4 d-none d-md-block">
      <img src="<?= site_url()?>assets/images/sign_up_bg.png" id="sideBg" alt="">
    </div>
  </div>

  <!-- font awesome script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script src="<?= site_url()?>js/toast.js" crossorigin="anonymous"></script>
</body>