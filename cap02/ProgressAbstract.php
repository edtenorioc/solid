<?php
final class Progress {
    public function getSentLengthPercentage(MeasurableAbstract $measurable) {
        return $measurable->getSentLengthPercentage();
    }
}