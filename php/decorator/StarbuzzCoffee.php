<?php
namespace coffee;
require_once('Espresso.php');
require_once('HouseBlend.php');
require_once('Mocha.php');
use coffee\Espresso;
use coffee\HouseBlend;
use coffee\Mocha;


class StarbuzzCoffee{
  public static function main(){
    $beverage = new Espresso();
    print_r($beverage->getDescription() . " $" . $beverage->cost());
    print_r("\n");
    $beverage2 = new HouseBlend();
    print_r($beverage2->getDescription() . " $" . $beverage2->cost());
    print_r("\n");
    $beverage2 = new Mocha($beverage2);
    print_r($beverage2->getDescription() . " $" . $beverage2->cost());
  }
}

$test = new StarbuzzCoffee();
$test->main();
