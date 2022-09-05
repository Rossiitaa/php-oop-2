<?php
    include_once '/product.php';

    class accessories extends Product {
        protected $color;
        protected $material;
        protected $size;
        protected $weight;
    }

    public function __construct($_name, $_price, $_description, $_color, $_material, $_size, $_weight) {
        parent::__construct($_name, $_price, $_description);
        $this->color = $_color;
        $this->material = $_material;
        $this->size = $_size;
        $this->weight = $_weight;
    }

    public function getcolor() {
        return $this->color;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getSize() {
        return $this->size;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setcolor($_color) {
        $this->color = $_color;
    }

    public function setMaterial($_material) {
        $this->material = $_material;
    }

    public function setSize($_size) {
        $this->size = $_size;
    }

    public function setWeight($_weight) {
        $this->weight = $_weight;
    }