<?php

require_once('classes/Cart.php');


$cart = new Cart(0, 100);
$cart->setTotalPrice (50);

$cart->discount (10);

var_dump($cart);