<?php
require_once("vendor/autoload.php");
// $Square = new Square(4);
// echo $Square->getArea();
//ini_set('memory_limit', '4164M');
$squareLengthAndWidth = 2;
$square = new Square($squareLengthAndWidth);

$newSquareLength = 4;
$square->setLength($newSquareLength);

$expectedAreaTakingIntoAccountRectangleLaws = 8;
echo $square->getArea();