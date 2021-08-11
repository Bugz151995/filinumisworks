<ul id="dropdownMenu" class="dropdown-menu border-0 rounded rounded-3 shadow py-0" aria-labelledby="profileNav">
  <!-- profile picture and user name -->
  <li class="tinted-bg d-flex align-items-center p-3 dropdown-header text-light" style="background: linear-gradient(to right, rgba(124, 54, 253, 0.836), rgba(124, 54, 253, 0.836)), url(<?= site_url()?>assets/images/profile_bg.png);">
    <!-- profile picture -->
    <?php 
      if (session()->get('user_img') === NULL) {
        echo '<img src="'.site_url().'assets/images/avatar.png" alt="" class="img-fluid rounded-circle w-25">';
      } else {
        echo '<img src="'.session()->get('user_img').'" alt="" class="img-fluid rounded-circle">';
      }
    ?>
    
    <!-- account name and privilege -->
    <div class="p-2">
      <!-- name -->
      <span class="d-block text-uppercase">
        <?= session()->get('username');?>
      </span>
      <!-- account privilege -->
      <?php 
        switch (session()->get('privilege')) {
          case 1:
            echo '<span class="text-warning ">Semi-Verified</span>';
            break;
            
          case 2:
            echo '<span class="text-success ">Fully-Verified</span>';
            break;
          default:
            # code...
            break;
        }
      ?>
    </div>
  </li>

  <!-- activity -->
  <li class="dropdown-header">
      Activity
  </li>
  
  <!-- buttons -->
  <li class="p-0 d-flex">
    <div class="col-6 d-flex justify-content-center border-top">
      <button class="btn btn-sm btn-outline-primary border-0 w-100 p-2">
        <span class="small">
        <i class="far fa-envelope d-block text-center w-100"></i>Messages</span>
      </button>
    </div>
    <div class="col-6 d-flex justify-content-center border-top">
      <a href="<?= site_url()?>profile" class="btn btn-sm btn-outline-danger border-0 w-100 p-2">
        <span class="small">
        <i class="far fa-user d-block text-center w-100"></i>My Profile</span>
      </a>
    </div>
  </li>
  <li class="p-2 border-top d-flex justify-content-center border-top">
    <a href="<?= site_url()?>a/sign_out" class="btn btn-sm btn-primary"><span class="small"><i id="signOutIcon" class="fas fa-sign-out-alt"></i> Sign Out</span></a>
  </li>

</ul>