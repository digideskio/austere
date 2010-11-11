<?php
// Grabs the firsts image path and sets $imagePath.
$imagePath = $node->field_image_cache['0']['filepath'];
?>

<div class="view view-uc-shoe-single view-id-uc_shoe_single view-display-id-page_1 view-dom-id-1">
<div class="view-content">
<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">

<!--    <div id="image"><img src="/<?php /*print $imagePath; */?>" alt="Title"></div>-->

<?php // get all images
foreach ($node->field_image_cache as $images) {
?>
    <div class="views-field-field-image-preview-fid">
    <div class="field-content">
    <a class="thickbox" href="/sites/default/files/imagecache/product/<?php print $images['filename']?>">
        <!-- <img src="/files/imagecache/uc_thumbnail/<?php /*print $images['filename']; */?>" alt="<?php /*print $images['alt']; */?>" hspace="0" border="0" class="styleimages">-->
        <?php print theme('imagecache', 'product', $images['filepath'], $images['alt'], $images['title']); ?>
    </a>
    </div>
    </div>
<?php
}
?>
   
<!--    <div class="views-field-field-image-cache-fid">
        <div class="field-content">
            <a class="imagefield imagefield-lightbox2 imagefield-lightbox2-product imagefield-field_image_cache imagecache imagecache-field_image_cache imagecache-product imagecache-field_image_cache-product lightbox-processed" rel="lightbox[24][click to enlarge]" href="http://austere.local/sites/default/files/imagecache/product_full/sz39c-9cm_0.jpg">
                <img src="/files/imagecache/product/<?php /*print $imagePath; */?>" alt="Title">
            </a>
        </div>
    </div>-->

<!--    <div class="views-field-field-image-preview-fid">
        <span class="field-content">
            <a class="imagefield imagefield-lightbox2 imagefield-lightbox2-product imagefield-field_image_preview imagecache imagecache-field_image_preview imagecache-product imagecache-field_image_preview-product lightbox-processed" rel="lightbox[24][click to enlarge]" href="http://austere.local/sites/default/files/imagecache/product_full/sz39c-9cm-public.jpg">
                <img height="180" width="180" title="click to enlarge" alt="the shoe" src="http://austere.local/sites/default/files/imagecache/product/sz39c-9cm-public.jpg">
            </a>
        </span>
    </div>-->

    <div class="views-field-tid">
        <label class="views-label-tid">Specifications:</label>
            <div class="field-content">
            <div class="item-list">
                <ul>
                    <li class="first"><b class="key">Size</b><span class="value"><?php print $node->taxonomy[3]->name ?></span></li>
                    <li><b class="key">Heel Height</b><span class="value"><?php print $node->taxonomy[9]->name ?></span></li>
                    <li><b class="key">Toe Box</b><span class="value"><?php print $node->taxonomy[21]->name ?></span></li>
                    <li><b class="key">Heel Cage</b><span class="value"><?php print $node->taxonomy[26]->name ?></span></li>
                    <li><b class="key">Sole</b><span class="value"><?php print $node->taxonomy[50]->name ?></span></li>
                    <li><b class="key">Upper</b><span class="value"><?php print $node->taxonomy[59]->name ?></span></li>
                    <li class="last"><b class="key">Straps</b><span class="value"><?php print $node->taxonomy[38]->name ?></span></li>
                </ul>
            </div>
            </div>
    </div>

    <div class="views-field-body">
        <div class="field-content">
            <ul>
                <li><b class="key">description</b><span class="value"><?php print $node->content['body']['#value'] ?></span></li>
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

<p>***************</p>
<?php
$terms = taxonomy_node_get_terms_by_vocabulary($node->nid, 2);
foreach ($terms as $term) {
  $tagsOne[] = l($term->name, taxonomy_term_path($term));
    }
print t("Size") . ": " . implode(' | ', $tagsOne);
?>
<p>***************</p>

<!--<div id="node">
    <ul>
        <li><b class="key">description</b> <div class="value"><?php /*print $node->content['body']['#value']; */?></div></li>
        <li><b class="key">price</b> <span class="value"><?php /*print uc_currency_format($node->sell_price);*/?></span></li>
        <li><b class="key"><?php /*print $node->content['model']['#value'];  */?></b> <span class="value"><?php /*print $node->content['add_to_cart']["#value"]; */?></span></li>
    </ul>
</div>-->

<pre>
<?php // this will print the $node array at the bottom of each node take it out when finished ?>
<?php var_dump($node); ?>
</pre>