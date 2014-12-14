<?php
	session_start();
?><html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php

echo 'Hi, ' . $_SESSION['username'];

require_once 'config/config.php';
require_once 'lib/db.php';

require_once 'lib/router.php';
require_once 'config/routes.php';
require_once 'lib/controller.php';
require_once 'lib/product-controller.php';
require_once 'lib/product-index-controller.php';
require_once 'lib/product-add-form-controller.php';
require_once 'lib/product-model.php';
require_once 'lib/user-model.php';
require_once 'lib/login-controller.php';

$db = new DB();

$user = new User_Model( 0, 'losho', 'mecho puh' );
$user->save();

$router = new Router();
$router->route();

?>
</html>
