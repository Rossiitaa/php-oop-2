<?php
    include_once __DIR__ . '/user.php';

    class RegisteredUser extends User {
        protected $email;
        protected $password;
        protected $discount = 20;
    }

    public function __construct($_name, $_surname, $_address, $_email, $_password) {
        parent::__construct($_name, $_surname, $_address);
        $this->email = $_email;
        $this->password = $_password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setEmail($_email) {
        $this->email = $_email;
    }

    public function setPassword($_password) {
        $this->password = $_password;
    }

    public function setDiscount($_discount) {
        $this->discount = $_discount;
    }

