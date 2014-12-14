<?php

$router = new Router;
$router->add( 'product', 'Product_Controller' );
$router->add( 'product-add-form', 'Product_Add_Form_Controller' );
$router->add( 'index', 'Product_Index_Controller' );
$router->add( 'login', 'Login_Controller' );
