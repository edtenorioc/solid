<?php
abstract class MeasurableAbstract {
    abstract function getTotalLength();
    abstract function getSentLength();
    
    public function getSentLengthPercentage() {
        return $this->getSentLength() * 100 / $this->getTotalLength();
    }
}