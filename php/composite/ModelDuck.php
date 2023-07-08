<?php
namespace ducks;
require_once('Duck.php');
require_once('FlyBehavior.php');
require_once('QuackBehavior.php');

use ducks\Duck;

class ModelDuck extends Duck implements FlyBehavior, QuackBehavior{

  function __construct() {}

  public function performFly() {
    $this->fly();
  }
  
  public function performQuack() {
    $this->quack();
  }
  
  public function fly(){
    print_r("i can't fly");
  }
  
  public function quack(){
    print_r("<< Silence >>");
  }
    
  public function display() {
    print_r("i'm model duck");
  }
}


