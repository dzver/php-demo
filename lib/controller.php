<?php

class Controller {
	public function render( $view, $args = array() ) {
		include dirname( __DIR__ ) . "/views/$view-view.php";
	}
}
