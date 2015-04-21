<?php
$classesTopRight = array(
    'ul' => 'links',
    'li_first' => 'first',
    'li_last' => 'last'
);
$menuTopRight = getMenu('top-nav-right', $classesTopRight);
?>
<div class="col-md-2 col-sms12">
    <div class="special-offer"><a href="">Special Offer</a></div>
    <div class="link-mobile">
        <div class="title-link">
            <h2><?php echo $menuTopRight['menu_name']; ?></h2>
        </div>
        <div class="link-content">
            <?php echo $menuTopRight['menu_list']; ?>
        </div>
    </div>
</div>
<div class="col-md-7 col-sms12">
    <?php echo $menuTopRight['menu_list']; ?>
</div>