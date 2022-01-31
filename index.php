<!-- Oggi pomeriggio aggiungete un trait ed una exception (con relativa gestione) all'esercizio di venerdì. -->


<?php 

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Ereader.php';
require_once __DIR__ . '/Kindle.php';


// PRODUCT-RELATED ISTANCES

// Instance of Ereader extending Product
try {
    $kobo_clara = new Ereader ('Kobo', 'Rakuten', 'Clara', 130);
} catch (Exeption $e) {
    error_log($e);
}

// Instance of Kindle extending Ereader
try {
    $kindle_oasis = new Kindle ('Oasis', 200);
} catch (Exeption $e) {
    error_log($e);
}


// USER-RELATED ISTANCES

// Instance of User
$user1001 = new User ('mariorossi@mail.it', 'Gianni');

// Instance of User->addToBasket
$user1001->addToBasket($kindle_oasis);
$user1001->addToBasket($kobo_clara);

var_dump($user1001);


?>





 

