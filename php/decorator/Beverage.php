<?php
namespace coffee;

abstract class Beverage {
  public $description = "unknown beverage";
  
  function __construct(){
    $this->description = $description;
  }
  
  public function getDescription() {
    return $this->description;
  }
  
  abstract public function cost();
}


