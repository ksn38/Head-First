<?php
namespace pizza;
require_once('PizzaStore.php');
require_once('NYPizzaIngredientFactory.php');
require_once('CheesePizza.php');

use pizza\PizzaStore;
use pizza\NYPizzaIngredientFactory;
use pizza\CheesePizza;

class NYPizzaStore extends PizzaStore {
  public $pizza;
    
  public function createPizza($item) {
    $pizza = null;
    $ingredientFactory = new NYPizzaIngredientFactory();
    if ($item == "cheese") {
        $pizza = new CheesePizza($ingredientFactory);
        $pizza->setName("New York Style Cheese Pizza\n");
    } else if (item == "veggie") {
        $pizza = new VeggiePizza($ingredientFactory);
        $pizza->setName("New York Style Veggie Pizza\n");
    } else if (item == "clam") {
        $pizza = new ClamPizza($ingredientFactory);
        $pizza->setName("New York Style Clam Pizza\n");
    } else if (item == "pepperoni") {
        $pizza = new PepperoniPizza($ingredientFactory);
        $pizza->setName("New York Style Pepperoni Pizza\n");
    }
    return $pizza;
  }
}
