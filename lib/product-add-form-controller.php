<?php

class Product_Add_Form_Controller extends Controller {
	public function __construct() {
		global $db;
		if ( !empty( $_POST ) ) {
			$product_name = $_POST['product_name'];

			$product = new Product_Model( $product_name );
			$product->save();
		}

		$this->render( 'product-add-form' );
	}
}
