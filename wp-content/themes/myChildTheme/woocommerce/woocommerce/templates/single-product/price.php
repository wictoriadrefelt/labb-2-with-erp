<?php

/**
 * Single Product Price
 */

global $post, $product;

?>
<p itemprop="price" class="price"><?php echo $product->get_price_html(); ?></p>
<p>Notice: price shown excludes tax and shipping.</p>

