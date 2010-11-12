<?php
// Grab the firsts image path and sets $imagePath.
if ( $user->uid ) {
    // user logged in
    $image = $node->field_image_cache['0'];
    $lightBoxImagePath = "/sites/default/files/imagecache/product_full/";
}
else {
    // Not logged in
    $image = $node->field_image_preview['0'];
    $lightBoxImagePath = "/sites/default/files/imagecache/product_full/";
}
?>

<div class="view view-uc-shoe-single view-id-uc_shoe_single view-display-id-page_1 view-dom-id-1">
<div class="view-content">
<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">

    <?php // Product image ?>
    <div class="views-field-field-image-preview-fid">
    <div class="field-content">
        <a rel="lightbox[<?php print $nid ?>][<?php print drupal_get_title() ?>]" href="<?php print $lightBoxImagePath . $image['filepath'] ?>">
        <?php print theme('imagecache', 'product', $image['filepath'], $image['alt'], $image['title']); ?>
        </a>
    </div>
    </div>

    <div class="views-field-tid">
        <label class="views-label-tid">Specifications:</label>
            <div class="field-content">
            <div class="item-list">
                <ul>
                    <li class="first"><b class="key">Size</b><span class="value"><?php print $node_vocabulary[1] ?></span></li>
                    <li><b class="key">Heel Height</b><span class="value"><?php print $node_vocabulary[2] ?></span></li>
                    <li><b class="key">Toe Box</b><span class="value"><?php print $node_vocabulary[4] ?></span></li>
                    <li><b class="key">Heel Cage</b><span class="value"><?php print $node_vocabulary[3] ?></span></li>
                    <li><b class="key">Sole</b><span class="value"><?php print $node_vocabulary[7] ?></span></li>
                    <li><b class="key">Upper</b><span class="value"><?php print $node_vocabulary[8] ?></span></li>
                    <li class="last"><b class="key">Straps</b><span class="value"><?php print $node_vocabulary[6] ?></span></li>
                </ul>
            </div>
            </div>
    </div>

    <div class="views-field-body">
        <div class="field-content">
            <ul>
                <?php /*if (!empty($node->content['body']['#value']) && strcmp($node->content['body']['#value'],'<div class="product-body"></div>')!=0 ) { */?><!--
                <li><b class="key">description</b><div class="value"><?php /*print $node->content['body']['#value'] */?></div></li>
                --><?php /*} */?>
                <li><b class="key">price</b><span class="value"><?php print uc_currency_format($node->sell_price); ?></span></li>
            </ul>
        </div>
    </div>

    <div class="views-field-buyitnowbutton">
        <div class="field-content">
            <ul>
                <li>
                    <b class="key"><?php print $node->model ?></b>
                    <div class="value" id="cartButton">
                        <?php print $node->content['add_to_cart']["#value"]; ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>