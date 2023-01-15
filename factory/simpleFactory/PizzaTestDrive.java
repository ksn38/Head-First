public class PizzaTestDrive{
    public static void main(String[] args){
        SimplePizzaFactory f = new SimplePizzaFactory();
        PizzaStore store = new PizzaStore(f);
        Pizza pizza = store.orderPizza("cheese");
        System.out.println("Ethan ordered a " + pizza.getName() + "\n");
    }
}
