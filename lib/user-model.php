<?php

class User_Model {
	protected $username, $password;
	public $id = 0;
	public function __construct( $id, $username = '', $password = '' ) {
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
	}

	public function save() {
		global $db;

		$password_hash = md5(
			SECRET_SALT . $this->password );
		$db->query( "INSERT INTO users( username, password )
			VALUES('". $db->escape( $this->username ) ."','".
			$db->escape( $password_hash ) ."')" );
	}
}
