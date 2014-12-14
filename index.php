<?php

$conn = mysqli_connect( 'localhost', 'softuni', 'howdy', 'ecommerce' );

$sql = "SELECT * FROM products";
$result = mysqli_query( $conn, $sql );
while ( $row = mysqli_fetch_assoc( $result ) ) {
	print_r( $row );
}
