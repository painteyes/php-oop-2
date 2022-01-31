<?php 

class Product {

    public $name;
    public $model;
    public $brand;
    public $price;

    public $category;
    public $availability;
    protected $discount;

    public function __construct($_name, $_brand, $_model, $_price) { 
        $this->name = $_name;
        $this->brand = $_brand;
        $this->model = $_model;
        $this->price = $_price;

        if ( !is_int($_price) ) {
            throw new Exeption('$_price need to be a number');
        } 

        if ( !is_string($_name) || !is_string($_brand) ) {
            throw new Exeption('$_name or $_brand are not string');
        } 

        if ( !is_string($_model) && !is_int($_model) ) {
            throw new Exeption('$_model need to be string or number');
        }

    }

    // public function setDiscount() {
    //     
    // }

    // public function getDiscount() {
    //     
    // }

}

?>