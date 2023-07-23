<?php
namespace coffee;

class Mocha {
  public $beverage;
  
  function __construct($beverage){
    $this->beverage = $beverage;
  }
  
  public function getDescription(){
    return $this->beverage->getDescription() . ", Mocha";
  }
  
  public function cost(){
    return $this->beverage->cost() + .20;
  }
}
