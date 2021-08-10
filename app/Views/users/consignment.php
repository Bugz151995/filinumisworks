<!--Breadcrumb-->
<nav class="fs-breadcrumb pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item">
      <i class="fas fa-home"></i>
      <a href="<?= site_url(); ?>" class="ms-2 link-secondary">Home</a>
    </li>
    <li class="breadcrumb-item fw-">Consignments</li>
  </ol>
</nav>

<!-- container for featured items -->
<label for="featuredConsignment">
  Featured Consignments
</label>
<section id="featuredConsignment" class="py-3">
  <div id="consignFeat" class="carousel slide" data-bs-ride="carousel ride">
    <div class="carousel-inner" role="listbox">
      <?php if (isset($feat_items)) {?>
      <?php foreach($feat_items as $key => $feat_item) :?>
      <?php 
        echo ($key === array_key_first($feat_items)) ? 
        '<div class="carousel-item active">' : 
        '<div class="carousel-item">' ;

        $attibute = array(
          'class' => 'p-1 col-12 col-sm-6'
        );
      ?>
      <?php echo form_open('consignments/item/'.$feat_item['item_id'], $attibute);?>
        <div class="card p-0 featured-border edgeless">
        <input type="hidden" name="shop_id" value="<?= $feat_item['shop_id']?>">
          <button id="featuredItem" class="p-0 border-0 btn">
            <img src="<?php echo $feat_item['file_path'];?>" class="card-img-top p-2" alt="...">
            <div class="card-body text-start featured">
              <div class="pb-1">
                <i class="fas fa-coins fa-fw text-warning"></i>
                <span class="ms-1 text-white text-lowercase"> <?php echo $feat_item['name'];?></span>
              </div>

              <div class="fs-featured-item pb-0 pb-sm-1">
                <i class="fas fa-fw fa-tags text-warning"></i>
                <span class="ms-1 link-light">
                  &#x20B1;
                  <?php echo $feat_item['item_price'];?>
                </span>
              </div>
            </div>
          </button>
        </div>        
      <?php echo form_close();?>
      </div>
      <?php endforeach; ?>
      <?php }?>
      <!-- next and previous button -->
      <button class="carousel-control-prev" type="button" data-bs-target="#consignFeat" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#consignFeat" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<hr class="text-success p-0">
<!-- all items -->
<label for="consignedItems">
  All Items
</label>
<sectiion id="consignedItems" class="row g-1 py-3">
  <?php if (isset($items)) {?>
  <?php foreach($items as $key => $item) :?>
  <?php 
    $attribute = array(
      'class' => 'col-6 col-sm-4 col-lg-3',
      'style' => 'border-radius: 1rem'
    );
  ?>
    <?php echo form_open('consignments/item/'.$item['item_id'], $attribute);?>
      <div class="card p-0 item-catalog-border">
        <input type="hidden" name="shop_id" value="<?= $item['shop_id']?>">
        <button class="border-0 p-0 btn">
          <img src="<?php echo $item['file_path']?>" class="card-img-top p-1" alt="" class="card-img-top">
          <div class="card-body p-2 w-100 text-start item-catalog d-inline-block text-truncate text-light">
            <i class="fas fa-coins fa-fw text-warning"></i>
            <span class="ms-1 text-lowercase small"> <?php echo $item['name'];?></span>
          </div>
        </button>
      </div>
    <?php echo form_close();?>
  <?php endforeach;?>
  <?php }?>
</sectiion>

<!-- script for setting up the multi slide carousel -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  multiSlideCarousel('consignFeat');
})
</script>