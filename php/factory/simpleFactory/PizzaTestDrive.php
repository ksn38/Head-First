<?php
namespace pizza;
require_once('SimplePizzaFactory.php');
require_once('PizzaStore.php');
require_once('CheesePizza.php');

use pizza\CheesePizza;
use pizza\SimplePizzaFactory;
use pizza\PizzaStore;

class PizzaTestDrive{
    public static function main(){
        $f = new SimplePizzaFactory();
        $store = new PizzaStore($f);
        $pizza = $store->orderPizza("cheese");
        print_r("Ethan ordered a " . $pizza->getName() . "\n");
    }
}

$x = new PizzaTestDrive();
$x->main();
