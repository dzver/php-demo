<?php

class Router {
	static $routes;

	public function add( $path, $controller, $action = '' ) {
		self::$routes[ $path ] = array(
			'controller' => $controller,
			'action' => $action,
		);
	}

	public function route() {
		$path = $this->get_path();
		if ( isset( self::$routes[ $path ] ) ) {
			$controller = new self::$routes[ $path ]['controller'];
		}
	}

	public function get_path() {
		$controller = 'index';
		if ( isset( $_GET['url'] )  ) {
			$url_parts = explode( '/', $_GET['url'] );
			if ( ! empty( $url_parts[0] ) ) {
				$controller = $url_parts[0];
			}
		}
		return $controller;
	}
}
