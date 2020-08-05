<?php

/*
private only allows usage within the class, does not allow extensions
public allow usage outside of classes
protected can only be access within the same class, but also allows extensions of the class
*/
namespace Person

class NewClass {
  // properties and methods here
  public $info = "Information";
}

// $object = new NewClass;
// var_dump($object);

class Person {
  protected $firstname = "Ken";
  private $lastname = "Li";
  private $age = "24";

  public function name() { // can access the private values and display publicly
    $a = $this->firstname;
    return $a;
  }
  
}

class Pet extends Person { // can access the private in Person dues to extends
  public function owner() { 
    $a = 'bark,' . $this->firstname;
    return $a;
  }
}

class Somebody {
  // Properties
  private $name;
  private $eyeColor;
  private $age;

  // static property, can access anywhere without haivng to create an object
  public static $drinkingAge = 21;

  // constructor
  public function __construct($name, $eyeColor, $age) {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  // Methods
  public function setPerson(string $name, string $eyeColor, int $age) {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  public function getName() {
    return $this->name;
  }

  // destructor, runs when object is closed off
  // runs when script is stopped or exited
  public function __destruct() {
    echo $this->name;
  }

  public static function setDrinkingAge($newDA) {
    self::$drinkingAge = $newDA;
  }

  public static function getDA() {
    return self::$drinkingAge;
  }

}

