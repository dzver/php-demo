<?php

require_once 'config/config.php';

$conn = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );

$sql = "SELECT * FROM products";
$result = mysqli_query( $conn, $sql );
while ( $row = mysqli_fetch_assoc( $result ) ) {
	print_r( $row );
}
