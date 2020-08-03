<?php

/*
private only allows usage within the class, does not allow extensions
public allow usage outside of classes
protected can only be access within the same class, but also allows extensions of the class
*/

class NewClass {
  // properties and methods here
  public $info = "Information";
}

$object = new NewClass;
var_dump($object);

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

