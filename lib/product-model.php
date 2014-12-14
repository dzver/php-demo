<?php

class Product_Model {
	public $product_name = '';
	public $id = 0;

	public function __construct( $product_name ) {
		$this->product_name = $product_name;
	}

	public function save() {
		global $db;

		if ( $this->id ) {
			$db->query( "UPDATE products SET product_name = '".
				$db->escape( $this->product_name ) ."' WHERE
				id = " . $this->id );
		} else {
			$db->query( "INSERT INTO products( product_name )
				VALUES ( '". $db->escape( $this->product_name ) ."' )
				");
		}
	}

	public function delete() {
		global $db;
		$db->query( "DELETE FROM products WHERE ID = " . (int) $this->id );
	}
}
