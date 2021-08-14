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
<section class="illustration shadow mb-4 rounded">
  <div class="row px-3">
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
<section class="bg-white shadow">
  <div class="row p-0 align-items-center justify-content-between">
    <div class="col-sm-8 col-md-7">
      <div id="featItemsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

        <?php if(isset($consignments)) :?>
          <?php foreach($consignments as $key=>$consignment):?>
            
            <?php 
            // set an active slide
            echo ($key === array_key_first($consignments)) ? 
            '<div class="carousel-item active">' : 
            '<div class="carousel-item">'; 
            echo form_open('consignments/item/'.$consignment['shop_id']);
            ?>

              <button class="fs-feat card p-0 border-0">
                <div class="card-img-top p-1">
                  <img src="<?= $consignment['image']?>" class="img-catalog" alt="...">
                </div>
                <div class="card-body w-100 text-start featured">
                  <div class="pb-1">
                    <i class="fas fa-ring fa-fw text-warning"></i>
                    <span class="ms-1 text-white text-lowercase">
                      <?= $consignment['name']?>
                    </span>
                  </div>

                  <div class="fs-featured-item pb-0 pb-sm-1">
                    <i class="fas fa-fw fa-tag text-warning"></i>
                    <span class="ms-1 link-light">
                      &#x20B1;
                      <?= $consignment['price']?>
                    </span>
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
    <div class="text-center text-md-start col-sm-4 col-md-5 p-3 pe-sm-4">
      <h4 class="text-highlight">Featured Items</h4>
      <p>
        Consign with us and get your coins, medals, or banknotes featured in our website. 
      </p>
      <a href="#" class="btn btn-md btn-warning fs-btn"> 
        <i class="fas fa-chevron-right"></i>
        Register Now
      </a>
    </div>
  </div>
</section>

<!-- features and services provided -->
<section class="row justify-content-center py-4 gap-3 mb-4">
  <div class="col-sm-5">
    <div class="card rounded bg-secondary text-light">
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
    <div class="card rounded bg-dark text-light">
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
<section class="bg-white shadow mb-5">
  <div class="row p-0 align-items-center justify-content-between">
    <!-- text introduction -->
    <div class="text-center text-md-start col-sm-4 col-md-5 p-3">
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

        <?php if(isset($lots)) :?>
          <?php foreach($lots as $key=>$lot):?>
            <?= 
              ($key === array_key_first($lots))  ?
              '<div class="carousel-item active">' :
              '<div class="carousel-item">' ;
            ?>
            <?= form_open('events/shop/'.$lot['shop_id']);?>
            <button type="submit" class="fs-feat w-100 card border-0 p-0">
              <div class="card-img-top">
                <img src="<?= $lot['image']?>" class="img-catalog" alt="...">  
              </div>
              <div class="card-body w-100 event-catalog text-start">
                <div>
                  <i class="far fa-calendar-alt fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('F d, Y', strtotime($lot['starts_at']))." - ".date('F d, Y', strtotime($lot['expires_at'])); ?>
                  </span>
                </div>
                <div>
                  <i class="far fa-clock fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('h:m a', strtotime($lot['expires_at'])); ?> (UTC +8)
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
  </div>
</section>