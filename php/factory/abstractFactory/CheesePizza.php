<?php
namespace pizza;
require_once('Pizza.php');

use pizza\Pizza;

class CheesePizza extends Pizza {
    public $ingredientFactory;
    public $name;
    
    public function __construct($ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }
    
    public function prepare() {
        print_r("Preparing " . $this->getName());
        $dough = $this->ingredientFactory->createDough();
        $sauce = $this->ingredientFactory->createSauce();
        $cheese = $this->ingredientFactory->createCheese();
    }
}
