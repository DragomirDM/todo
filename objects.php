<?php 

abstract class Carrier {
    
    public function takePackage() {
        
    }
    
    public abstract function delivery();
    
}

class Postman extends Carrier {
    
    public function delivery() {
        echo 'Puts mails in mailboxes';
    }

}

class Newsman extends Carrier {
    
    public function delivery() {
        echo 'Throws the papers in the front of the doors';
    }

}

class Color {
    
    private $red;
    private $green;
    private $blue;
    
}

class Vehicle {
    
    private $numberOfWeels;
    private $c;
    private $breaksType;
    private $numberOfGears;
            
    function getNumberOfGears() {
        return $this->numberOfGears;
    }

    function setNumberOfGears($numberOfGears) {
        $this->numberOfGears = $numberOfGears;
    }
        
    function getBreaksType() {
        return $this->breaksType;
    }

    function setBreaksType($breaksType) {
        $this->breaksType = $breaksType;
    }
        
    function getColor() {
        return $this->color;
    }

    function setColor($color) {
        $colorObj = new Color($color);
        // red, black, white
        $this->c = $colorObj;
    }
        
    function getNumberOfWeels() {
        return $this->numberOfWeels;
    }

    function setNumberOfWeels($numberOfWeels) {
        $this->numberOfWeels = $numberOfWeels;
    }
    
}

class Car extends Vehicle {
    
    private $engine;
    private $carType;
    private $numberOfDoors;
    private $brand;
    private $model;
    
    function getCarType() {
        return $this->carType;
    }

    function getNumberOfDoors() {
        return $this->numberOfDoors;
    }

    function setCarType($carType) {
        $this->carType = $carType;
    }

    function setNumberOfDoors($numberOfDoors) {
        $this->numberOfDoors = $numberOfDoors;
    }
        
    function getEngine() {
        return $this->engine;
    }

    function setEngine($engine) {
        $this->engine = $engine;
    }
    
    function getModel() {
        return $this->model;
    }

    function setModel($model) {
        $this->model = $model;
    }
    
    function getBrand() {
        return $this->brand;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }
    
}