<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-ezquiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="<?= site_url()?>css/user.css" rel="stylesheet" />
  <title>FiliNumisworks</title>
</head>
<body>
  <div class="app-container">
    <div class="col-lg-4 d-none d-md-block">
      <img src="<?= site_url()?>assets/images/sign_in_bg.png" id="sideBg" alt="">
    </div>
    
    <div class="mx-auto col-lg-7 col-12 d-flex align-items-center position-relative">
      <!-- spinner -->
      <div id="spinner" class="position-absolute top-50 w-100 text-center invisible" style="z-index: 15">
        <button class="btn btn-dark" type="button" disabled>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          <span>Loading...</span>
        </button>
      </div>

      <div class="container text-secondary">
        <div class="container d-flex justify-content-center">
          <img src="<?= site_url()?>assets/images/logo-dark.png" class="pb-4" id="compLogo" alt="">
        </div>
        <h4 class="fw-normal text-secondary">Welcome Back,</h4>
        <p class="mb-4">Please sign in to your account.</p>
  
        <?= $validation->showError('password', 'error_single')?>
        <?= form_open('a/sign_in/verify') ?>
          <?= csrf_field() ?>
          
          <div class="row g-3 form-group">
            <div class="col-6">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username here...">
            </div>
            <div class="col-6">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" name="password" id="password" class="password form-control border-0 border-top border-start border-bottom" placeholder="Password here...">
                <a class="toggle-show-pass bg-white input-group-text">
                  <i id="eyeIcon" class="far fa-eye fa-fw eye-icon"></i>
                </a>
              </div>
            </div>
          </div>
          <hr class="mt-4">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <span>No account? <a href="<?= site_url()?>a/sign_up" class="text-decoration-none">Sign up now</a></span>
            </div>
            <div>
              <a href="recover" class="text-decoration-none btn btn-outline-primary border-0 rounded-pill"><span class="small">Recover Password</span></a>
              <button type="submit" class="btn btn-primary rounded-pill" onclick="loadSpinner(this)">Sign In</button>
            </div>            
          </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>

  <!-- font awesome script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script src="<?= site_url()?>js/spinner.js" crossorigin="anonymous"></script>
  <script src="<?= site_url()?>js/p_toggle.js" crossorigin="anonymous"></script>
</body>