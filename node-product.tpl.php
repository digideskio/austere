<?php
// Grabs the firsts image path and sets $imagePath.
$imagePath = $node->field_image_cache['0']['filepath'];
?>

<div id="node">
    <?php
        $taxonomy[] = $node->content['taxonomy'];
        foreach ($taxonomy as $term) {
            print t("heel height") . ": " .  $term->name;
        }
    ?>
    <ul>
        <li><b class="key">description</b> <div class="value"><?php print $node->content['body']['#value'];  ?></div></li>
        <li><b class="key">price</b> <span class="value"><?php print uc_currency_format($node->sell_price); ?></span></li>
        <li><b class="key"><?php print $node->content['model']['#value'];  ?></b> <span class="value"><?php print $node->content['add_to_cart']["#value"]; ?></span></li>
    </ul>

    <?php // default image display  ?>
    <div id="image"><img src="/files/imagecache/product/<?php print $imagePath; ?>" alt="Title"></div>

</div>

<pre>
<?php // this will print the $node array at the bottom of each node take it out when finished ?>
<?php var_dump($node); ?>
</pre>