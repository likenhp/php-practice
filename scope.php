<?php
// :: scope resolution operator allows access to static properties, constants, etc.
class FirstClass {
  const EXAMPLE = "immutable";

  public static function test() {
    $testing = 'Testing in progress';
    return $testing; 
  }
}

class SecondClass extends FirstClass {
  public static $staticProperty = "static property";

  public static function anotherTest() {
    echo parent::EXAMPLE;
    echo self::$staticProperty;
  }
}

$a = FirstClass::EXAMPLE;
// $a = FirstClass::test();
echo $a;

$b = SecondClass::anotherTest();
// $b = SecondClass::$staticProperty;
echo $b;