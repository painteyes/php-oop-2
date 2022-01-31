<?php 

require_once __DIR__ . '/Ereader.php';
require_once __DIR__ . '/Bestseller.php';


class Kindle extends Ereader {
    use Bestseller;

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