<!-- top navbar -->
<header class="header bg-white" id="header">
  <!-- menu toggle -->
  <div class="header_toggle"> 
    <i class='bx bx-menu-alt-left' id="header-toggle"></i> 
  </div>
  
  <!-- header navigation tab -->
  <div class="d-flex align-items-center btn-group" role="group" aria-label="Button group with nested dropdown">
    <!-- ************************************** -->
    <!-- watch nav item -->
    <div class="mx-1 mx-sm-2 mx-lg-3 btn-group" role="group">

      <!-- icon -->
      <button type="button" class="btn rounded-circle position-relative d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" id="watchNav">
        <span id="watch" class="d-flex ">
          <i class="fas header_icon fa-sm fa-binoculars"></i>
        </span>
        <!-- badge -->
        <?php if(isset($count_wl) && isset($count_wl)) {?>
          <?= 
          '<span class="badge-fp position-absolute badge rounded-pill bg-danger" style="font-size: 0.6rem">
            '.$count_wl.'
            <span class="visually-hidden">unread messages</span>
          </span>'
          ?>
        <?php }?>
      </button>

      <!-- dropdown menu -->
      <ul id="dropdownMenu" class="dropdown-menu border-0 dropdown-menu-end dropdown-menu-lg-start overflow-auto shadow py-0 rounded rounded-3" aria-labelledby="watchNav">
        <li class="tinted-bg-1 text-light dropdown-header fs-6 text-center p-3" style="background: linear-gradient(to right, rgb(94, 118, 255, 0.8), rgb(94, 118, 255, 0.8)), url(<?= site_url();?>assets/images/profile_bg.png);">Watch List</li>
        <?php if(isset($watch_lists)){ ?>
          <?php foreach($watch_lists as $watch_list): ?>
            <li class="dropdown-item small text-truncate text-lowercase px-3 py-2">
              <div class="fas fa-coins me-1"></div>
              <?= $watch_list['name']?>
            </li>
          <?php endforeach; ?>
        <?php }?>
        <!-- view more -->
        <li class="border-top p-2 d-flex justify-content-center">
          <button class="btn btn-sm btn-dark"><span class="small"><i class="fas fa-cog fa-fw"></i> View More</span></button>
        </li>
      </ul>
    </div>

    <!-- ************************************** -->
    <!-- cart nav item -->
    <div class="mx-1 mx-sm-2 mx-lg-3 btn-group" role="group" >

      <!-- icon -->
      <button type="button" class="btn rounded-circle position-relative d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" id="cartNav">
        <span id="cart" class="d-flex ">
          <i class="fas header_icon fa-sm fa-shopping-cart"></i>
        </span>
        <!-- badge -->
        <?php if(isset($count_c) && $count_c !== 0) {?>
          <?= 
          '<span class="badge-fp position-absolute badge rounded-pill bg-danger" style="font-size: 0.6rem">
            '.$count_c.'
            <span class="visually-hidden">unread messages</span>
          </span>'
          ?>
        <?php }?>
      </button>

      <!-- dropdown menu -->
      <ul id="dropdownMenu" class="dropdown-menu border-0 dropdown-menu-end dropdown-menu-lg-end overflow-auto shadow py-0 rounded rounded-3" aria-labelledby="cartNav">
        <li class="tinted-bg-1 text-light dropdown-header fs-6 p-3 text-center" style="background: linear-gradient(to right, rgb(94, 118, 255, 0.8), rgb(94, 118, 255, 0.8)), url(<?= site_url();?>assets/images/profile_bg.png);">Cart</li>
        <?php if(isset($cart)){ ?>
          <?php foreach($cart as $cart): ?>
            <li class="dropdown-item small text-truncate text-lowercase px-3 py-2">
              <div class="fas fa-coins me-1"></div>
              <?= $cart['name']?>
            </li>
          <?php endforeach; ?>
        <?php }?>
        <!-- view more -->
        <li class="border-top p-2 d-flex justify-content-center">
          <button class="btn btn-sm btn-dark"><span class="small"><i class="fas fa-cog fa-fw"></i> View More</span></button>
        </li>          
      </ul>
    </div>

    <!-- ************************************** -->     
    <!-- notifications nav item -->
    <div class="mx-1 mx-sm-2 mx-lg-3 btn-group" role="group" >

      <!-- icon -->
      <button type="button" class="btn rounded-circle position-relative d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" id="notifNav">
        <span id="bell" class="d-flex ">
          <i class="fas header_icon fa-sm fa-bell"></i>
        </span>
        <!-- badge -->
        <?php if(isset($count_wl) && $count_wl !== 0) {?>
        <?= 
        '<span class="badge-fp position-absolute badge rounded-pill bg-danger" style="font-size: 0.6rem">
          '.$count_wl.'<span class="visually-hidden">unread messages</span>
        </span>'
        ?>
        <?php }?>
      </button>

      <!-- dropdown menu -->
      <ul id="dropdownMenu"  class="dropdown-menu border-0 dropdown-menu-end dropdown-menu-lg-start overflow-auto shadow py-0 rounded rounded-3" aria-labelledby="notifNav" >
        <li class="tinted-bg-1 dropdown-header fs-6 text-light text-center p-3" style="background: linear-gradient(to right, rgb(94, 118, 255, 0.8), rgb(94, 118, 255, 0.8)), url(<?= site_url();?>assets/images/profile_bg.png);">Notifications</li>
        <?php if(isset($watch_lists)){ ?>
          <?php foreach($watch_lists as $watch_list): ?>
            <li class="dropdown-item small text-truncate px-3 py-2">
              <div class="fas fa-coins me-1"></div>
              <?= $watch_list['name']?>
            </li>
          <?php endforeach; ?>
        <?php }?>

        <!-- view more -->
        <li class="border-top p-2 d-flex justify-content-center">
          <button class="btn btn-sm btn-dark"><span class="small"><i class="fas fa-cog fa-fw"></i> View More</span></button>
        </li>
      </ul>
    </div>

    <!-- ************************************** -->    
    <!-- profile nav item -->
    
    <div class="ms-2 ms-lg-4 btn-group" role="group"> 
      <div class="header_img " data-bs-toggle="dropdown" id="profileNav">
        <?php 
          if (/*$this->session->user_img === NULL*/ true) {
            echo '<img src="'.site_url().'assets/images/avatar.png" alt="" class="img-fluid rounded-circle">';
          } else {
            echo '<img src="'.$this->session->user_img.'" alt="" class="img-fluid rounded-circle">';
          }
        ?>
      </div>

      <?php if (session()->get('logged_in') !== NULL) : ?>

        <?= $profile_nav?>

      <?php else : ?>

        <!-- default dropdown menu -->
        <ul id="dropdownMenu" class="dropdown-menu border-0 rounded rounded-3 shadow py-0" aria-labelledby="profileNav">
          <!-- profile picture and user name -->
          <li class="tinted-bg d-flex align-items-center p-3 dropdown-header text-light" style="background: linear-gradient(to right, rgba(124, 54, 253, 0.836), rgba(124, 54, 253, 0.836)), url(<?= site_url();?>assets/images/profile_bg.png);">
            <img src="<?= site_url()?>assets/images/avatar.png" alt="" class="img-fluid rounded-circle w-25">
            <div class="p-2">
              <span class="d-block">You are not signed in</span>
              <span class="text-warning ">please sign in</span>
            </div>
          </li>
          <li class="p-2 border-top d-flex justify-content-center border-top">
            <a href="<?= site_url()?>a/sign_in" class="btn btn-sm btn-primary"><span class="small"> Sign In</span></a>
          </li>
        </ul>

      <?php endif ?>
    </div>
  </div>
</header>