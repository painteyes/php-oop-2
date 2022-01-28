<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/User.php';

// Instances of the products in the cart
$kindle_oasis = new Product ('Amazon Kindle', 'Oasis', 200);
var_dump($kindle_oasis);

$kindle_paperwhite = new Product ('Amazon Kindle', 'Paperwhite', 130);
var_dump($kindle_paperwhite);



$user1001 = new User ('mariorossi@mail.it', 'Mario');
$user1001-> addToBasket($kindle_oasis);

var_dump($user1001);



?>





 

