<?php

// final class Song {
//   private $totalLength;
//   private $sentLength;

//   public function getSentLengthPercentage() {
//     return $this->sentLength * 100 / $this->totalLength;
//   }
// }

final class Song implements Measurable {
    private $totalLength;
    private $sentLength;
    
    public function getTotalLength() {
        return $this->totalLength;
    }
    
    public function getSentLength() {
        return $this->sentLength;
    }
}