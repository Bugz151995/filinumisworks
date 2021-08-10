<!--Breadcrumb-->
<nav class="fs-breadcrumb pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <i class="fas fa-home ml-2"></i>
      <a href="<?php echo base_url(); ?>" class="ms-2 link-secondary">Home</a>
    </li>
    <li class="breadcrumb-item">Events</li>
  </ol>
</nav>

<!-- shop selection -->
<label for="featuredAuctionEvent" class="pt-3">Featured Events</label>
<section class="py-3">
  <div id="featEventsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- carousel item -->
      <?php if(isset($feat_events)) {?>
        <?php foreach($feat_events as $key=>$feat_event):?>
          <?php
            echo ($key === array_key_first($feat_events))  ?
            '<div class="carousel-item active">' :
            '<div class="carousel-item">' ;

            $attibute = array(
              'class' => 'p-1 col-12 col-sm-6'
            );

            echo form_open('events/shop/'.$feat_event['shop_id'], $attibute);
          ?>
          <div class="card p-0 justify-self-center event-catalog-border edgeless">
            <button type="submit" id="featuredEvent" class="card p-0 border-0">
              <img src="<?php echo $feat_event['shop_logo']?>" class="card-img-top" alt="...">
              <div class="card-body w-100 event-catalog text-start">
                <div>
                  <i class="far fa-calendar-alt fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('F d, Y', strtotime($feat_event['starts_at']))." - ".date('F d, Y', strtotime($feat_event['expires_at'])); ?>
                  </span>
                </div>
                <div>
                  <i class="far fa-clock fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('h:m a', strtotime($feat_event['expires_at'])); ?> (UTC +8)
                  </span>
                </div>
              </div>
            </button>
          </div>
          <?php echo form_close()?>
        </div>
        <?php endforeach;?>
      <?php }?>
    </div>

    <!-- button control -->
    <button class="carousel-control-prev" type="button" data-bs-target="#featEventsCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featEventsCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<hr class="text-success p-0">
<!-- ongoing live auction -->
<label for="ongoingAuctionEvent" class="pt-3">Ongoing Events</label>
<section class="py-3">
  <div id="ongoingAuctionEvent" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- courousel item and form -->
      <?php if(isset($feat_events)) {?>
        <?php foreach($feat_events as $key=>$feat_event):?>
          <?php
            echo ($key === array_key_first($feat_events))  ?
            '<div class="carousel-item active">' :
            '<div class="carousel-item">' ;

            $attibute = array(
              'class' => 'p-1 col-12 col-sm-6'
            );

            echo form_open('events/shop/'.$feat_event['shop_id'], $attibute);
          ?>
          <div class="card p-0 justify-self-center featured-border edgeless">
            <button type="submit" id="featuredEvent" class="card p-0 border-0">
              <img src="<?php echo $feat_event['shop_logo']?>" class="card-img-top" alt="...">
              <div class="card-body w-100 featured text-start">
                <div>
                  <i class="far fa-calendar-alt fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('F d, Y', strtotime($feat_event['starts_at']))." - ".date('F d, Y', strtotime($feat_event['expires_at'])); ?>
                  </span>
                </div>
                <div>
                  <i class="far fa-clock fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('h:m a', strtotime($feat_event['expires_at'])); ?> (UTC +8)
                  </span>
                </div>
              </div>
            </button>
          </div>
          <?php echo form_close()?>
        </div>
        <?php endforeach;?>
      <?php }?>
    </div>

    <!-- carousel controller -->
    <button class="carousel-control-prev" type="button" data-bs-target="#ongoingAuctionEvent" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#ongoingAuctionEvent" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<hr class="text-success p-0">
<!-- upcoming auction -->
<label for="upcomingAuctionEvent" class="pt-3">Upcoming Events</label>
<section class="py-3">
  <div id="upcomingAuctionEvent" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- carousel item and fomr -->
      <?php if(isset($feat_events)) {?>
        <?php foreach($feat_events as $key=>$feat_event):?>
          <?php
            echo ($key === array_key_first($feat_events))  ?
            '<div class="carousel-item active">' :
            '<div class="carousel-item">' ;

            $attibute = array(
              'class' => 'p-1 col-12 col-sm-6'
            );

            echo form_open('events/shop/'.$feat_event['shop_id'], $attibute);
          ?>
          <div class="card p-0 justify-self-center upcoming-border edgeless">
            <button type="submit" id="featuredEvent" class="card p-0 border-0">
              <img src="<?php echo $feat_event['shop_logo']?>" class="card-img-top" alt="...">
              <div class="card-body w-100 upcoming text-start">
                <div>
                  <i class="far fa-calendar-alt fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('F d, Y', strtotime($feat_event['starts_at']))." - ".date('F d, Y', strtotime($feat_event['expires_at'])); ?>
                  </span>
                </div>
                <div>
                  <i class="far fa-clock fa-fw text-warning"></i>
                  <span class="ms-1 text-white">
                    <?php echo date('h:m a', strtotime($feat_event['expires_at'])); ?> (UTC +8)
                  </span>
                </div>
              </div>
            </button>
          </div>
          <?php echo form_close()?>
        </div>
        <?php endforeach;?>
      <?php }?>
    </div>

    <!-- buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#upcomingAuctionEvent" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#upcomingAuctionEvent" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- script for setting up the multi slide carousel -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  multiSlideCarousel('featEventsCarousel');
  multiSlideCarousel('ongoingAuctionEvent');
  multiSlideCarousel('upcomingAuctionEvent');
})
</script>