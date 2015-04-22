<div class="list-box">
    <div class="product-name">
        <h1><?php the_title();?></h1>
    </div>
</div>
<div class="short-description">
    <div class="std"><?php the_excerpt();?></div>
</div>
<?php
$sku = intval(get_field('sku'));
$unitPrice = intval(get_field('unit_price'));
$salePrice = intval(get_field('sale_price'));
$unitPriceFormatted = number_format($unitPrice, 2);
$salePriceFormatted = number_format($salePrice, 2);

$availability = $sku > 0? 'In stock': 'Out of stock';
?>
<div class="availability-price">
    <p class="availability in-stock">Availability: <span><?php echo $availability;?></span></p>
    <div class="price-box">
        <span class="regular-price" id="product-price-41">
            <span class="price">$<?php echo $unitPriceFormatted;?></span>
        </span>
    </div>
</div>

<div class="add-to-box-view">
    <div class="add-to-cart">
        <label for="qty">Qty:</label>
        <div class="input-content">
            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
            <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
            <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) qty_el.value--;return false;" class="qty-decrease">
        </div>
        <button type="button" class="button btn-cart" onclick="productAddToCartForm.submit(this)" rel="tooltip" data-original-title=""><span><span>Add to Cart</span></span>
        </button>
    </div>
</div>

<div class="add-to-box">
    <ul class="add-to-links">
        <li><a href="" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist" rel="tooltip" data-original-title="">+ Wishlist</a></li>
    </ul>
</div>