<?php 

class User {
    public $email;
    public $name;

    public $lastname;
    private $basket = [];
    public $discount;

    public function __construct($_email, $_name) {
        $this->email = $_email;
        $this->name = $_name;
    }

    public function addToBasket($item) {
        $this->basket[] = $item;
    }

    // public function setDiscount() {
    //     
    // }

    // public function getDiscount() {
    //     
    // }
}

?>