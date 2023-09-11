<?php
namespace pizza;
require_once('PizzaIngredientFactory.php');

use pizza\PizzaIngredientFactory;

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough() {
        return print_r("ThinCrustDough\n");
    }
    public function createSauce() {
        return print_r("MarinaraSauce\n");
    }
    public function createCheese() {
        return print_r("ReggianoCheese\n");
    }
    public function createVeggies() {
        $veggies = ["Garlic", "Onion", "Mushroom", "RedPepper"];
        return $veggies;
    }
    public function createPepperoni() {
        return print_r("SlicedPepperoni\n");
    }
    public function createClam() {
        return print_r("FreshClams\n");
    }
}
