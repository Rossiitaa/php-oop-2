<?php
    class creditCard {
        protected $cardNumber;
        protected $expirationDate;
        protected $cvv;
        protected $owner;
    }

    public function __construct($_cardNumber, $_expirationDate, $_cvv, $_owner) {
        $this->cardNumber = $_cardNumber;
        $this->expirationDate = $_expirationDate;
        $this->cvv = $_cvv;
        $this->owner = $_owner;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getCvv() {
        return $this->cvv;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setCardNumber($_cardNumber) {
        $this->cardNumber = $_cardNumber;
    }

    public function setExpirationDate($_expirationDate) {
        $this->expirationDate = $_expirationDate;
    }

    public function setCvv($_cvv) {
        $this->cvv = $_cvv;
    }

    public function setOwner($_owner) {
        $this->owner = $_owner;
    }
