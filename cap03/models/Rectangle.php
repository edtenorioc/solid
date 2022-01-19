<?php
class Rectangle {

    private $length;
    private $width;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }
}