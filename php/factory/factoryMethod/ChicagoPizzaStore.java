public class ChicagoPizzaStore extends PizzaStore{
    Pizza createPizza(String type){
        Pizza pizza = null;
        
        if (type.equals("cheese")){
            pizza = new ChicagoStyleCheesePizza();
        /*} else if (type.equals("pepperoni")){
            pizza = new ChicagoStylePepperoniPizza();
        } else if (type.equals("clam")){
            pizza = new ChicagoStyleClamPizza();*/
        }
        return pizza;
    }
}
