<?php

class DB {
	static $conn;

	public function __construct() {
		self::$conn = mysqli_connect( DB_HOST, DB_USER, 
			DB_PASS, DB_NAME );
	}

	public function get_results( $sql ) {
		$result = mysqli_query( self::$conn, $sql );
		$return = array();
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			$return[] = $row;
		}
		return $return;
	}
}
