<?php
final class Bird implements Animal, Aerial {
    public function fly() {
        print("Bird is flying");
    }
}