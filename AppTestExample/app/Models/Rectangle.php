<?php

namespace App\Models;

class Rectangle {

    private $length;
    private $breadth;

    public function setLength($length) {
        $this->length = $length;
    }

    public function setBreadth($breadth) {
        $this->breadth = $breadth;
    }

    public function getLength() {
        return $this->length;
    }

    public function getBreadth() {
        return $this->breadth;
    }

    public function area() {
        return $this->length * $this->breadth;
    }

    //Note that formula is incorrect
    public function perimeter() {
        return 2 * ($this->length * $this->breadth);
    }

}
