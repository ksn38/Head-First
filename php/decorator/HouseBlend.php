<?php
namespace coffee;
require_once('Beverage.php');
use coffee\Beverage;

class HouseBlend extends Beverage {
  function __construct(){
    $this->description = "House Blend Coffe";
  }
  
  public function cost(){
    return .89;
  }
}


