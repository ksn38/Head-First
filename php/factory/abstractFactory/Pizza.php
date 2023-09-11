<?php
namespace pizza;

abstract class Pizza {
    public $name;
    public $dough;
    public $sauce;
    public $veggies;
    public $cheese;
    public $pepperoni;
    public $clam;
    
    abstract function prepare();
    
    public function bake() {
        print_r("Bake for 25 minutes at 350\n");
    }
    
    public function cut() {
        print_r("Cutting the pizza into diagonal slices\n");
    }
    
    public function box() {
        print_r("Place pizza in official PizzaStore box\n");
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function toString() {
    // Код вывода описания пиццы
    }
}
