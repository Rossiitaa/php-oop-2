<?php
    include_once '/product.php';

    class Food extends Product {
        protected $expirationDate;
        protected $weight;
        protected $calories;
    }

    public function __construct($_name, $_price, $_description, $_expirationDate, $_weight, $_calories) {
        parent::__construct($_name, $_price, $_description);
        $this->expirationDate = $_expirationDate;
        $this->weight = $_weight;
        $this->calories = $_calories;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getCalories() {
        return $this->calories;
    }

    public function setExpirationDate($_expirationDate) {
        $this->expirationDate = $_expirationDate;
    }

    public function setWeight($_weight) {
        $this->weight = $_weight;
    }

    public function setCalories($_calories) {
        $this->calories = $_calories;
    }
