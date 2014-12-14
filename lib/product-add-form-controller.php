<?php

class Product_Add_Form_Controller {
	public function __construct() {
		global $db;
		if ( !empty( $_POST ) ) {
			$product_name = $_POST['product_name'];

			$product = new Product_Model( $product_name );
			$product->save();
		}
?>
<h1>Insert new product!</h1>
<form method="post">
	<input name="product_name">
	<input type="submit">
	</form><?
	}
}
