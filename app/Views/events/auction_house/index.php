<!--Breadcrumb-->
<nav class="fs-breadcrumb pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <i class="fas fa-home ml-2"></i>
      <a href="<?php echo base_url(); ?>" class="ms-2 link-secondary">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?php echo base_url(); ?>events" class="link-secondary">Events</a>
    </li>
    <li class="breadcrumb-item">Auction House</li>
  </ol>
</nav>

<!-- shop lots -->
<section class="py-2 pb-5">
  <!-- shop name -->
  <div class="d-flex align-items-center justify-content-center btn btn-outline-primary">
    <i class="fas fa-store fa-fw me-2"></i>
    <div class="text-truncate d-inline-block w-100"><?= $lots[0]['shop_name'] ?></div>
  </div>
  <!-- shop logo -->
  <div class="row justify-content-center">
    <div class="card col-sm-6 border-0">
      <img src="<?php echo $lots[0]['shop_logo']?>" alt="" class="card-img-top">
    </div>
  </div>
  <hr>
  <!-- shop lots -->
  <div class="row g-1">
    <?php foreach($lots as $lot):?>
      <?php
        $attribute = array(
          'class' => 'col-6 col-sm-4'
        );
      ?>
      <?php echo form_open('events/shop/lot/'.$lot['lot_id'], $attribute);?>
        <div class="card featured-border p-0">
          <button class="border-0 bg-transparent p-0 py-sm-2">
            <img src="<?php echo $lot['lot_img'];?>" alt="" class="card-img-top" style="height: 100px; object-fit: contain">
          </button>
          <div class="card-body small p-2 featured text-white text-center text-truncate">
            <span><?= $lot['name']?></span>
          </div>
        </div>
      <?php echo form_close();?>
    <?php endforeach; ?>
  </div>
</section>

<section class="p-5">
</section>