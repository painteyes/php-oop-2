<?php 

class Product {

    public $name;
    public $model;
    public $brand;
    public $price;

    public $category;
    public $availability;
    protected $discount;

    public function __construct($_name, $brand, $_model, $_price) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->model = $_model;
        $this->price = $_price;
    }

    // public function setDiscount() {
    //     
    // }

    // public function getDiscount() {
    //     
    // }

}

?>