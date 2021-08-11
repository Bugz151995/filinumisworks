<!-- dim content when sidebar is toggled -->
<div id="nav_bar_shadow">
</div>

<?php 
$uri = service('uri');
$page = $uri->getSegment(1);
?>

<!-- side navbar -->
<div class="l-navbar shadow" style="background: linear-gradient(#4723d9e7,#4723d9c2), url(<?= site_url()?>/assets/images/sidebar_bg.png);" id="nav-bar">
  <nav class="nav">
    <div> 
      <a href="#" class="nav_logo"> 
        <img src="<?= site_url(); ?>assets/images/logo.png" alt="" id="brand-logo">
        <span class="nav_logo-name">FILINumisworks</span> 
      </a>
      <div class="nav_list"> 
        <a href="<?= site_url();?>" class="nav_link <?= ($page == '' ? 'active' : '') ?>"> 
          <i class='fas fa-home fa-fw nav_icon'></i> 
          <span class="nav_name">Home</span> 
        </a> 
        <a href="<?= site_url();?>consignments" class="nav_link <?= ($page == 'consignments' ? 'active' : '') ?>"> 
          <i class='fas fa-search-dollar fa-fw nav_icon'></i> 
          <span class="nav_name">Consignment</span> 
        </a> 
        <a href="<?= site_url();?>events" class="nav_link <?= ($page == 'events' ? 'active' : '') ?>">
          <i class='fas fa-gavel fa-fw nav_icon'></i> 
          <span class="nav_name">Auction</span> 
        </a> 
        <a href="<?= site_url();?>orders" class="nav_link <?= ($page == 'orders' ? 'active' : '') ?>"> 
          <i class='fas fa-list-ul fa-fw nav_icon'></i>
          <span class="nav_name">Order</span> 
        </a> 
        <a href="<?= site_url();?>shop" class="nav_link <?= ($page == 'shop' ? 'active' : '') ?>"> 
          <i class='fas fa-book-reader fa-fw nav_icon'></i> <span class="nav_name">My Shop</span> 
        </a> 
      </div>
    </div>
    <a href="<?= site_url()?>a/sign_out" class="nav_link"> 
      <i id="signOutIcon" class='fas fa-sign-out-alt fa-fw nav_icon'></i> 
      <span class="nav_name">Sign Out</span> 
    </a>
  </nav>
</div>
<!-- main content -->
<div id="wrapper" style="background: #f6f7f8">
  <main id="mainContent">