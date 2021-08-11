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
    <li class="breadcrumb-item">
      <a href="<?php echo base_url(); ?>events/shop/1" class="link-secondary">Auction House</a>
    </a>
    </li>
    <li class="breadcrumb-item">Lot
    </li>
  </ol>
</nav>

<?php 
  $currentBid = 0;
  foreach($bids as $key=>$bid){
    if($key === array_key_first($bids)) {
      $currentBid = $bid['bid_price'];
    }
  }
?>
<?php if(isset($success)) {?>
<?php if($success === TRUE){
echo form_open('events/shop/lot/'.$lot['lot_id']).'<button class="btn btn-outline-success alert alert-success form-control w-100"><span><i class="me-2 fas fa-check-circle"></i>Your bid was recorded, and you have met the reserved price.</span></button>'.form_close();
} else {
echo validation_errors(form_open('events/shop/lot/'.$lot['lot_id']).'<button class="btn btn-outline-danger alert alert-danger form-control w-100"><span><i class="me-2 fas fa-exclamation-triangle"></i>', '</span></button>'.form_close());
}}
?>

<!-- live bidding event -->
<section class="py-3 pb-sm-0">
  <div class="row pb-3">
    <!-- item image -->
    <div class="col-md-7">
      <img src="<?= $lot['lot_img']?>" alt="" class="img-fluid">
      <!-- notes accordion -->
      <div class="accordion accordion-flush" id="notesAccordionPrimary">
        <div class="accordion-item pb-3">
          <h2 class="accordion-header" id="notesHeader">
            <button class="accordion-button ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#notesContainer" aria-expanded="true" aria-controls="notesContainer">
              <span class="fw-bold text-uppercase text-secondary">Notes And Description</span>
            </button>
          </h2>
          <div id="notesContainer" class="w-100 accordion-collapse collapse show" aria-labelledby="notesHeader" data-bs-parent="#notesAccordionPrimary">
            <div class="accordion-body ps-2">
              <p>
              <?php echo $lot['note_description']?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- item other description -->
    <div class="col-md-5">
      <h5 class="text-center text-uppercase text-secondary fw-bold">
        <?= $lot['name']?>
      </h5>
      <hr class="p-0 text-primary">

      <!-- time -->
      <div id="time" class="d-flex p-2 alert alert-secondary align-items-center w-100">
        <span class="flex-fill fs-minute rounded mr-1">
          Ends in :
        </span>
        <span id="days" class="fw-bold flex-fill fs-minute">
          &nbsp;
        </span>
        <span class="p-1 flex-fill">:</span>
        <span id="hours" class="fw-bold fs-minute flex-fill">
        </span>
        <span class="p-1 flex-fill">:</span>
        <span id="minutes" class="fw-bold fs-minute flex-fill">
        </span>
        <span class="p-1 flex-fill">:</span>
        <span id="seconds" class="fw-bold fs-minute flex-fill">
        </span>
      </div> 

      <!-- current bid -->
      <div class="alert alert-primary mb-4">
        <span class="fs-6 me-2">Current Bid:</span> &#x20B1;
        <span class="fw-bold"><?= $currentBid?></span>
      </div>

      <!-- lot description -->
      <div class="row">
        <div class="col-5 text-secondary">
          <h6>Estimate:</h6>
          <h6>Increment:</h6>
          <h6>Composition:</h6>
          <h6>Weight:</h6>
          <h6>Diameter:</h6>
        </div>
        <div class="col-7 fw-bold">
          <h6>&#x20B1; <?= $lot['estimate']?></h6>
          <h6>&#x20B1; <?= $lot['increment']?></h6>
          <h6><?= $lot['composition']?></h6>
          <h6><?= $lot['weight'] ?> g</h6>
          <h6><?= $lot['diameter']?> mm</h6>
        </div>
      </div>
      <hr class="p-0">

      <!-- bid status -->
      <div class="row g-3">
        <?php
          $attribute = array(
            'class' => 'col-6'
          );
        ?>
        <div class="col-6">
          <button id="bidBtn" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#bidModal">Bid</button>
        </div>

        <!-- add to watchlist form -->
        <?php echo form_open('events/add_to_watchlist', $attribute); ?>
        <input type="hidden" name="lot_id" value="<?= $lot['lot_id']?>">
          <button id="watchBtn" class="btn btn-outline-primary w-100"> 
            <i class="fas fa-binoculars"></i> 
            Watch
          </button>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</section>

<!-- bid modal -->
<div class="modal fade" id="bidModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bidModalLabel" aria-hidden="true">
  <!-- model dialog -->
  <div class="modal-dialog">
    <!-- model content -->
    <div class="modal-content">
      <!-- model header -->
      <div class="modal-header">
        <h5 class="modal-title" id="bidModalLabel">
          <i class="fas fa-hand-holding-usd"></i> Place Bid</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- form -->
      <?php echo form_open('events/place_bid/'.$lot['lot_id']);?>
        <!-- model body -->
        <div class="modal-body">
          <!-- lot bid status -->
          <div class="row px-2">
            <div class="col-sm-6 alert alert-primary">
              <span class="fs-6 me-2">Current Bid:</span> &#x20B1;
              <span class="fw-bold"><?= $currentBid?></span>
            </div>
            <div class="col-sm-6 alert alert-warning">
              <span class="fs-6 me-2">Increment:</span> &#x20B1;
              <span class="fw-bold"><?= $lot['increment']?></span>
            </div>
          </div>

          <!-- form group -->
          <div class="form-group input-group">
            <span class="input-group-text bg-primary border-primary text-light">Place Bid</span>
            <span class="input-group-text border-primary bg-white">&#x20B1;</span>
            
            <!-- input -->
            <input type="hidden" value="<?= $lot['lot_id']?>" name="lot_id">
            <input type="hidden" value="1" name="user_id">
            <input id="bidInputNumber" name="bid" type="number" step="<?= $lot['increment']?>" value="<?= $currentBid + $lot['increment']?>" min="<?= $currentBid + $lot['increment']?>" class="form-control border-primary">
          </div>
        </div>
        <!-- model footer -->
        <div class="modal-footer">
          <div type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</div>
          <button type="submit" class="btn btn-primary">Bid</button>
        </div>
      <?php echo form_close()?>
    </div>
  </div>
</div>

<!-- rules -->
<section class="py-4 pt-sm-0">
  <div class="row">
    <div class="col-sm-7 order-2 order-sm-1">
      <div class="alert alert-warning">
        <h6 class="fw-bold text-uppercase">Rules:</h6>
        <p>
        <?= $lot['rules']?>
        </p>
      </div>
    </div>
    <div class="col-sm-5 order-1 order-sm-2">
      <!-- bidders accordion -->
      <div class="accordion accordion-flush" id="notesAccordionPrimary">
        <div class="accordion-item pb-3">
          <h2 class="accordion-header" id="bidderHeader">
            <button class="accordion-button ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#bidderContainer" aria-expanded="true" aria-controls="bidderContainer">
              <span class="fw-bold text-uppercase text-secondary">Bidders</span>
            </button>
          </h2>
          <div id="bidderContainer" class="w-100 accordion-collapse collapse show" aria-labelledby="bidderHeader">
            <div class="accordion-body border overflow-auto p-0"  style="height: 220px">
              <table class="p-0 table table-hover table-striped table-warning">
                <tbody>
                  <?php foreach($bids as $bid):?>
                    <tr>
                      <td class="small"><?= $bid['username']?></td>
                      <td class="small">&#x20B1; <?= $bid['bid_price']?></td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<input type="hidden" value="<?= $lot['starts_at']?>" id="lotStart">
<input type="hidden" value="<?= $lot['expires_at']?>" id="lotEnd">

<script src="<?=base_url()?>js/timer.js"></script>