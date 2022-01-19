<?php
final class BaseClass {
    public function test() {
        echo "llamada a BaseClass::test()\n";
    }
 
    // Aquí no importa si definimos una función como final o no
    final public function moreTesting() {
        echo "llamada a BaseClass::moreTesting()\n";
    }
 }
 
 class ChildClass extends BaseClass {
 }
// Devuelve un error Fatal: Class ChildClass may not inherit from final class (BaseClass)