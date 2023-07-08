<?php
namespace ducks;

abstract class Duck{

  function __construct() {
  }
  
  public abstract function display();
  
  public abstract function performFly();
  
  public abstract function performQuack();
  
  public function swim() {
    print_r("All ducks float");
  }
}
