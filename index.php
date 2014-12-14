<?php

require_once 'config/config.php';
require_once 'lib/db.php';

$db = new DB();

$products = $db->get_results( "SELECT * FROM products LIMIT 3" );

foreach ( $products as $product ) {
	?>
		<div><span><?php echo $product->ID; ?>.</span>
			<a href="/product/<?php echo $product->ID;
				?>"><?php echo $product->product_name; ?></a>
		</div>
	<?php
}
