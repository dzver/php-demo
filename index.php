<?php

require_once 'config/config.php';
require_once 'lib/db.php';

require_once 'lib/router.php';
require_once 'config/routes.php';

$db = new DB();

$controller = 'index';
if ( isset( $_GET['url'] )  ) {
	$url_parts = explode( '/', $_GET['url'] );
	if ( ! empty( $url_parts[0] ) ) {
		$controller = $url_parts[0];
	}
}

$router = new Router();
$router->route( $controller );

if ( $controller == 'index' ) {
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

if ( $controller == 'product' ) {
	echo 'HA!';
}
