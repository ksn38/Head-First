<?php
namespace coffee;
require_once('Beverage.php');
use coffee\Beverage;

class Espresso extends Beverage {
  function __construct(){
    $this->description = "Espresso";
  }
  
  public function cost(){
    return 1.99;
  }
}
