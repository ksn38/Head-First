<?php
namespace pizza;
require_once('NYPizzaStore.php');
require_once('ChicagoPizzaStore.php');

use pizza\NYPizzaStore;
use pizza\ChicagoPizzaStore;


class PizzaTestDrive{
    public static function main(){
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();
        $pizza = $nyStore->orderPizza("cheese");
        print_r("Ethan ordered a " . $pizza->getName() . "\n");
        $pizza = $chicagoStore->orderPizza("cheese");
        print_r("Joel ordered a " . $pizza->getName() . "\n");
    }
}

$x = new PizzaTestDrive();
$x->main();
