<!--Breadcrumb-->
<nav class="fs-breadcrumb pt-3" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <i class="fas fa-home"></i>
      <span class="ms-2">Home</span>
    </li>
  </ol>
</nav>

<!-- website intro -->
<section class="illustration edgeless shadow mb-4">
  <div class="row ps-3 pe-3">
    <div class="col-sm-7 p-3">
      <div class="text-center text-sm-start d-flex justify-content-center align-items-center h-100">
        <div>
          <h4 class="text-highlight">Online Auction</h4>
          <p>
            The Numisworks Auction Product Trading provides you the first ever auction site in the Philippines that specializes in numismatics.
          </p>
          <div class="d-flex gap-3 justify-content-center justify-content-sm-start">
            <a href="#" class="btn btn-primary">
              <i class="fas fa-chevron-right"></i>
              Read more
            </a>
            <a href="<?= site_url()?>sign_up" class="btn btn-warning">
              <i class="fas fa-chevron-right"></i>
              Sign Up
            </a>
          </div>
        </div>
      </div>      
    </div>
    
    <div class="col-sm-5 d-none d-sm-block">
      <img src="<?= site_url();?>/assets/images/auction_illustration.svg" class="w-100 rounded" alt="">
    </div>
  </div>
</section>

<!-- carousel for selected featured items -->
<section class="row align-items-center justify-content-between mb-4">  
  <div class="col-sm-8 col-md-7">
    <div id="featItemsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

      <?php if(isset($items)) :?>
        <?php foreach($items as $key=>$item):?>

          <?php 
          echo ($key === array_key_first($items)) ? 
          '<div class="carousel-item active">' : 
          '<div class="carousel-item">'; 
          echo form_open('consignments/item/'.$item['item_id']);
          ?>

            <input type="hidden" name="shop_id" value="<?= $item['shop_id']?>">
            <button id="featuredItem" class="card p-0">
              <img src="<?php echo $item['file_path'];?>" class="card-img-top p-2" alt="...">
              <div class="card-body w-100 text-start featured">
                <div class="pb-1">
                  <i class="fas fa-coins fa-fw text-warning"></i>
                  <span class="ms-1 text-white text-lowercase"> <?php echo $item['name'];?></span>
                </div>

                <div class="fs-featured-item pb-0 pb-sm-1">
                  <i class="fas fa-fw fa-tags text-warning"></i>
                  <span class="ms-1 link-light">
                    &#x20B1;
                    <?php echo $item['item_price'];?>
                  </span>
                </div>
                
                <div class="d-none d-sm-block fs-featured-item">
                  <i class="far fa-fw fa-heart text-warning"></i>
                  <a href="#" class="ms-1 link-light">
                    <?php echo $item['shop_name'];?>
                  </a>
                </div>
              </div>
            </button>
          </div>

          <?php echo form_close();?>
        <?php endforeach; ?>
      <?php endif ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#featItemsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#featItemsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- text introduction -->
  <div class="text-center text-md-start col-sm-4 col-md-5 pt-3">
    <h4 class="text-highlight">Featured Items</h4>
    <p>
      Consign with us and get your coins, medals, or banknotes featured in our website. 
    </p>
    <a href="#" class="btn btn-md btn-warning fs-btn"> 
      <i class="fas fa-chevron-right"></i>
      Register Now
    </a>
  </div>
</section>

<!-- features and services provided -->
<section class="row justify-content-center py-4 gap-3 mb-4">
  <div class="col-sm-5">
    <div class="card edgeless bg-secondary text-light">
      <div class="card-body text-center">
        <div class="h1">
          <i class="fas fa-gavel"></i>
        </div>
        <h5>Live Bidding</h5>
        <p class="py-2">
          Bidding is easier than ever before on our online live-bidding platform. Clients can bid anytime, anywhere, and host their own auction event. 
        </p>
        <a href="#" class="btn btn-dark">
          <i class="fas fa-chevron-right"></i>
          Read more
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card edgeless bg-dark text-light">
      <div class="card-body text-center">
        <div class="h1">
          <i class="fas fa-tags"></i>
        </div>
        <h5>Consignment</h5>
        <p class="py-2">
          More than just an auction house, Our system knows and understands how to market and showcase a collection to the general audience.
        </p>
        <a href="#" class="btn btn-secondary">
          <i class="fas fa-chevron-right"></i>
          Read more
        </a>
      </div>
    </div>
  </div>
</section>

<!-- carousel for selected featured events -->
<section class="row align-items-center justify-content-between pb-5">
  <!-- text introduction -->
  <div class="text-center text-md-start col-sm-4 col-md-5 pb-3">
    <h4 class="text-highlight">Featured Events</h4>
    <p>
      Host your own auction event and have your auction house be featured on the website. 
    </p>
    <a href="#" class="btn btn-md btn-warning fs-btn"> 
      <i class="fas fa-chevron-right"></i>
      Register Now
    </a>
  </div>
  <!-- carousel -->
  <div class="col-sm-8 col-md-7">
    <div id="featEventsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

      <?php if(isset($events)) :?>
        <?php foreach($events as $key=>$event):?>
          <?php echo form_open('events/shop/'.$event['shop_id']);?>
          <?php 
            echo ($key === array_key_first($events))  ?
            '<div class="carousel-item active">' :
            '<div class="carousel-item">' ;
          ?>

          <button type="submit" id="featuredEvent" class="card p-0">
            <img src="<?php echo $event['shop_logo']?>" class="card-img-top" alt="...">
            <div class="card-body w-100 event-catalog text-start">
              <div>
                <i class="far fa-calendar-alt fa-fw text-warning"></i>
                <span class="ms-1 text-white">
                  <?php echo date('F d, Y', strtotime($event['starts_at']))." - ".date('F d, Y', strtotime($event['expires_at'])); ?>
                </span>
              </div>
              <div>
                <i class="far fa-clock fa-fw text-warning"></i>
                <span class="ms-1 text-white">
                  <?php echo date('h:m a', strtotime($event['expires_at'])); ?> (UTC +8)
                </span>
              </div>
            </div>
          </button>

          <?php echo form_close()?>
        </div>
        <?php endforeach;?>
      <?php endif ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#featEventsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#featEventsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>