<?php
namespace pizza;

abstract class PizzaStore{
    public abstract function createPizza($type);
    
    public function orderPizza($type){
        $pizza = null;
        
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
