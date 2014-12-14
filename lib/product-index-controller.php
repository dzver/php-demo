<?php

class Product_Index_Controller {
	public function __construct() {
		global $db;

		$products = $db->get_results( "SELECT * FROM products LIMIT 3" );
		foreach ( $products as $product ) {
			?>
				<div><span><?php echo $product->ID; ?>.</span>
					<a href="/product/<?php echo $product->ID;
						?>"><?php echo $product->product_name; ?></a>
				</div>
			<?php
		}
	}
}
