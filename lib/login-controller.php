<?php

class Login_Controller {
	public function __construct() {

		if ( !empty( $_POST ) ) {
			if ( $this->is_password_valid( $_POST['username'],
				$_POST['password'] ) ) {
					$_SESSION['username'] = $_POST['username'];
				};
		}

?><form method="post">
<input type="text" name="username" />
<br /><input type="password" name="password" />
<br /><input type="submit" value="Login" />
	</form><?php
	}

	protected function is_password_valid( $username, $password ) {
		global $db;
		$password_hash = md5(
			SECRET_SALT . $password);

		$user = $db->get_results(
			"SELECT * FROM users WHERE username = '" .
			$db->escape( $username ) . "' AND
			password = '" . $db->escape( $password_hash ) . "'" );

		return ! empty( $user );
	}
}
