<?php
namespace pizza;
require_once('Pizza.php');
require_once('CheesePizza.php');

use pizza\Pizza;
use pizza\CheesePizza;

class SimplePizzaFactory {
    public function createPizza($type){
        $pizza = null;
        
        if ($type === "cheese"){
            $pizza = new CheesePizza();
        /*} else if (type.equals("pepperoni")){
            pizza = new PepperoniPizza();
        } else if (type.equals("clam")){
            pizza = new ClamPizza();*/
        }
        return $pizza;
    }
}
