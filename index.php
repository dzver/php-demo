<?php

require_once 'config/config.php';
require_once 'lib/db.php';

require_once 'lib/router.php';
require_once 'config/routes.php';
require_once 'lib/product-controller.php';
require_once 'lib/product-index-controller.php';

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
