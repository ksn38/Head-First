<?php
namespace pizza;
require_once("PizzaStore.php");
require_once("NYStyleCheesePizza.php");

use pizza\PizzaStore;
use pizza\NYStyleCheesePizza;

class NYPizzaStore extends PizzaStore{
    public function createPizza($type){
        $pizza = null;
        
        if ($type == "cheese"){
            $pizza = new NYStyleCheesePizza();
        /*} else if (type.equals("pepperoni")){
            pizza = new NYStylePepperoniPizza();
        } else if (type.equals("clam")){
            pizza = new NYStyleClamPizza();*/
        }
        return $pizza;
    }
}
