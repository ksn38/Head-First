<?php
namespace pizza;
require_once("PizzaStore.php");
require_once("ChicagoStyleCheesePizza.php");

use pizza\PizzaStore;
use pizza\ChicagoStyleCheesePizza;

class ChicagoPizzaStore extends PizzaStore{
    public function createPizza($type){
        $pizza = null;
        
        if ($type == "cheese"){
            $pizza = new ChicagoStyleCheesePizza();
        /*} else if (type.equals("pepperoni")){
            pizza = new ChicagoStylePepperoniPizza();
        } else if (type.equals("clam")){
            pizza = new ChicagoStyleClamPizza();*/
        }
        return $pizza;
    }
}
