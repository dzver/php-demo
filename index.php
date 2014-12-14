<?php

require_once 'config/config.php';
require_once 'lib/db.php';

$db = new DB();

$result = $db->get_results( "SELECT * FROM products" );
print_r( $result );
