<?php
namespace pizza;
require_once('SimplePizzaFactory.php');

use pizza\SimplePizzaFactory;

class PizzaStore{
    public $factory;
    
    public function __construct(){
        $this->factory = new SimplePizzaFactory();
    }
    
    public function orderPizza($type){
        $pizza = null;
        
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
