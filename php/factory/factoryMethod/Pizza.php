<?php
namespace pizza;

abstract class Pizza {
    public $name;
    public $dough;
    public $sauce;
    public $toppings = [];
    
    public function prepare(){
        print_r("Preparing " . $this->name . "\n");
        print_r("Tossing dough " . $this->dough . "\n");
        print_r("Adding sauce " . $this->sauce . "\n");
        print_r("Adding toppings:");
        for ($i = 0; $i < count($this->toppings); $i++){
            print_r(" " . $this->toppings[$i]);
        }
        print_r("\n");
    }
    
    public function bake(){
        print_r("Bake for 25 minutes at 350\n");
    }
    
    public function cut(){
        print_r("Cutting the pizza into diagonal slices\n");
    }
    
    public function box(){
        print_r("Place pizza in official PizzaStore box\n");
    }
    
    public function getName(){
        return $this->name;
    }
}
