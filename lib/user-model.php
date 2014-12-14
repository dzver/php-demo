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

		$password_hash = password_hash(
			SECRET_SALT . $this->password, PASSWORD_BCRYPT );
		$db->query( "INSERT INTO users( username, password )
			VALUES('". $db->escape( $this->username ) ."','".
			$password_hash ."')" );
	}
}
