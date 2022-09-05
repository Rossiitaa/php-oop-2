<?php 
    class User {
        protected $name;
        protected $surname;
        protected $address;
        protected $discount = 0;
    }

    public function __construct($_name, $_surname, $_address) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setName($_name) {
        $this->name = ucwords($_name);
    }

    public function setSurname($_surname) {
        $this->surname = ucwords($_surname);
    }

    public function setAddress($_address) {
        $this->address = $_address;
    }

    public function setDiscount($_discount) {
        $this->discount = $_discount;
    }