<?php
namespace ducks;
require_once('Duck.php');
require_once('FlyBehavior.php');
require_once('QuackBehavior.php');

use ducks\Duck;

class MallardDuck extends Duck implements FlyBehavior, QuackBehavior{
  
  function __construct() {}
  
  public function performFly() {
    $this->fly();
  }
  
  public function performQuack() {
    $this->quack();
  }
  
  public function fly(){
    print_r("I'm flying");
  }
  
  public function quack(){
    print_r("Quack");
  }
    
  public function display() {
    print_r("Im real MallardDuck");
  }
}


