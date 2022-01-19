<?php
final class Dog implements Animal, Terrestrial {

    public function run() {
        print("Dog is running");
    }

    public function bark() {
        print("Dog is barking");
    }
}