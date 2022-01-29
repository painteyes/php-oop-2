<?php 

require_once __DIR__ . '/Ereader.php';

class Kindle extends Ereader {

    // override
    public $name = 'Kindle';
    public $brand = 'Amazon';

    // override
    public function __construct($_model, $_price) {
        $this->model = $_model;
        $this->price = $_price;
    }

}

?>