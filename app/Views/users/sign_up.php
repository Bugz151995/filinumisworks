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
    
    <!-- form and logo -->
    <div class="mx-auto col-lg-7 col-12 d-flex align-items-center position-relative">
      <!-- spinner -->
      <div id="spinner" class="position-absolute top-50 w-100 text-center invisible" style="z-index: 15">
        <button class="btn btn-dark" type="button" disabled>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          <span>Loading...</span>
        </button>
      </div>

      <div class="container">
        <div class="container d-flex justify-content-center">
          <img src="<?= site_url()?>assets/images/logo-dark.png" id="compLogo" class="py-4" alt="">
        </div>
        <h4 class="fw-normal text-secondary pb-4">
          <div>Welcome,</div>
          <span class="fs-5">it only takes a <span class="text-success">few seconds</span> to create your account</span>
        </h4>

        <?= form_open('a/sign_up/request')?>
          <?= csrf_field() ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="email" class="form-label"><span class="text-danger">*</span> Email</label>
                <input name="email" id="email" placeholder="Email here..." type="email" class="form-control">
                <?= $validation->showError('email', 'error_single')?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="username" class="form-label"><span class="text-danger">*</span> Username</label>
                <input name="username" id="username" placeholder="Username here..." type="text" class="form-control" >
                <?= $validation->showError('username', 'error_single')?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="password" class="form-label"><span class="text-danger">*</span> Password</label>
                <div class="input-group">
                  <input name="password" placeholder="Password here..." type="password" class="form-control border-0 border-top border-start border-bottom password" >
                  <a class="toggle-show-pass bg-white input-group-text">
                    <i class="far fa-eye fa-fw eye-icon"></i>
                  </a>
                </div>
                <?= $validation->showError('password', 'error_single')?>
              </div>
            </div>
            <div class="col-md-6">
              <div class=" form-group mb-3">
                <label for="passwordconf" class="form-label"><span class="text-danger">*</span> Repeat Password</label>
                <div class="input-group">
                  <input name="passwordconf" id="passwordconf" placeholder="Repeat Password here..." type="password" class="form-control border-0 border-top border-start border-bottom password" >
                  <a class="toggle-show-pass bg-white input-group-text">
                    <i class="far fa-eye eye-icon"></i>
                  </a>
                </div>
                <?= $validation->showError('passwordconf', 'error_single')?>
              </div>
            </div>
          </div>
          <div class="mt-3 form-check">
            <input name="accept" id="accept" type="checkbox" class="form-check-input">
            <label for="agree" class="form-label mb-0 small">Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
            <?= $validation->showError('accept', 'error_single')?>
          </div>
          <div class="p-2 mt-4 row g-3 align-items-center justify-content-center">
            <h5 class="mb-0 col-12 col-sm-8 order-2 order-sm-1 text-secondary fs-6">Already have an account? <a href="<?= site_url()?>a/sign_in" class="text-primary">Sign in</a></h5>
            <button id="createAccountBtn" class="btn-shine-hover btn-primary btn rounded-pill ml-auto col-12 col-sm-4 order-1 order-sm-2" onclick="loadSpinner(this)">Create Account</button>
          </div>
        <?= form_close()?>
      </div>
    </div>

    <!-- background image with opacity -->
    <div class="col-lg-4 d-none d-md-block">
      <img src="<?= site_url()?>assets/images/sign_up_bg.png" id="sideBg" alt="">
    </div>
  </div>

  <!-- font awesome script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script src="<?= site_url()?>js/spinner.js" crossorigin="anonymous"></script>
  <script src="<?= site_url()?>js/p_toggle.js" crossorigin="anonymous"></script>
</body>