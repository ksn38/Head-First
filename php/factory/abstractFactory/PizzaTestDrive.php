<?php
namespace pizza;
require_once('NYPizzaStore.php');

use pizza\NYPizzaStore;


class PizzaTestDrive{
    public static function main(){
        $nyStore = new NYPizzaStore();
        $pizza = $nyStore->orderPizza("cheese");
        print_r("Ethan ordered a " . $pizza->getName() . "\n");
    }
}

$x = new PizzaTestDrive();
$x->main();
