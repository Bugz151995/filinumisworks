<!--Breadcrumb-->
<nav class="fs-breadcrumb pt-3" style="--bs-breadcrumb-divider: '>';"  aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <i class="fas fa-home"></i>
      <a href="<?= site_url(); ?>" class="ms-2 link-secondary">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?= site_url(); ?>consignments" class="link-secondary">Consignments</a>
    </li>
    <li class="breadcrumb-item">Item</li>
  </ol>
</nav>

<?php if(isset($success)) {?>
  <?php if($success === TRUE){
  echo form_open('consignments/item/'.$items['item_id']).'<button class="btn btn-outline-success alert alert-success form-control w-100"><span><i class="me-2 fas fa-check-circle"></i>The Item has been successfully added to cart.</span></button>'.form_close();
  } else {
  echo validation_errors(form_open('consignments/item/'.$items['item_id']).'<button class="btn btn-outline-danger alert alert-danger form-control w-100"><span><i class="me-2 fas fa-exclamation-triangle"></i>', '</span></button>'.form_close());
  }}
?>

<!-- item description -->
<section>
  <!-- item description / buy now / add to cart -->
  <div class="row py-4 pb-0">
    <div class="col-sm-7 pb-2">
      <img src="<?= $items['file_path']?>" class="img-fluid" alt="">
    </div>

    <div class="col-sm-5 d-flex flex-column justify-content-between">
      <!-- item name -->
      <h6 class="text-secondary text-uppercase text-center text-sm-start fw-bold lead"><?= $items['name']?></h6>
      <hr class="mt-0">
      <div class="row">
        <div class="col-5 text-secondary">
          <h6 class="fw-normal">Price:</h6>
          <h6 class="fw-normal">Composition:</h6>
          <h6 class="fw-normal">Weight:</h6>
          <h6 class="fw-normal">Diameter:</h6>
        </div>
        <div class="col-7">
          <!-- item price -->
          <h6>&#x20B1;<?= $items['item_price']?></h6>

          <!-- item composition -->
          <h6><?= $items['composition']?></h6>

          <!-- item weight -->
          <h6><?= $items['weight']?> g</h6>

          <!-- item diameter -->
          <h6><?= $items['diameter']?> mm</h6>
        </div>
      </div>
      <!-- buttons -->
      <div class="row justify-content-center py-2">
        <?= form_open('', 'class="col-5"');?>
          <button class="btn btn-success w-100">Buy</button>
        <?= form_close();?>
        
        <?= form_open('consignments/add_to_cart', 'class="col-7"');?>
          <input type="hidden" name="item_id" value="<?= $items['item_id']?>">
          <input type="hidden" name="shop_id" value="<?= $items['shop_id']?>">
          <button class="btn btn-outline-success w-100">
            <i class="fas fa-cart-plus"></i>
            Add to Cart
          </button>
        <?= form_close();?>
      </div>
    </div>
  </div>

  <!-- notes accordion -->
  <div class="accordion accordion-flush" id="notesAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="notesHeader">
        <button class="accordion-button ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#notesContainer" aria-expanded="true" aria-controls="notesContainer">
          <span class="fw-bold text-uppercase text-secondary">Notes And Description</span>
        </button>
      </h2>
      <div id="notesContainer" class="w-100 accordion-collapse collapse show" aria-labelledby="notesHeader" data-bs-parent="#notesAccordion">
        <div class="accordion-body ps-2">
          <p>
          <?= $items['note_description']?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- items from shop -->
<section class="py-3">
  <div class="text-uppercase text-secondary fw-bold">From the same Shop</div>
  <div id="itemsInShopCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php if (isset($all_items)) {?>
      <?php foreach($all_items as $key => $all_item) :?>
      <?php 
        echo ($key === array_key_first($all_items)) ? 
        '<div class="carousel-item active">' : 
        '<div class="carousel-item">' ;

        $attibute = array(
          'class' => 'p-1 col-12 col-sm-6'
        );
      ?>
      <?= form_open('consignments/item/'.$all_item['item_id'], $attibute);?>
        <div class="card p-0 featured-border edgeless">
        <input type="hidden" name="shop_id" value="<?= $all_item['shop_id']?>">
          <button id="featuredItem" class="p-0 border-0 btn">
            <img src="<?= $all_item['file_path'];?>" class="card-img-top p-2" alt="...">
            <div class="card-body text-start featured">
              <div class="pb-1">
                <i class="fas fa-coins fa-fw text-warning"></i>
                <span class="ms-1 text-white text-lowercase"> <?= $all_item['name'];?></span>
              </div>

              <div class="fs-featured-item pb-0 pb-sm-1">
                <i class="fas fa-fw fa-tags text-warning"></i>
                <span class="ms-1 link-light">
                  &#x20B1;
                  <?= $all_item['item_price'];?>
                </span>
              </div>
            </div>
          </button>
        </div>        
      <?= form_close();?>
      </div>
      <?php endforeach; ?>
      <?php }?>
    </div>
    <!-- buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#itemsInShopCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#itemsInShopCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- script for setting up the multi slide carousel -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  multiSlideCarousel('itemsInShopCarousel');
})
</script>