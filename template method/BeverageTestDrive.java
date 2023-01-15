public class BeverageTestDrive{
  public static void main(String[] args){
    TeaWithHook teaHook = new TeaWithHook();
    CoffeeWithHook coffeeHook = new CoffeeWithHook();
    
    System.out.println("\nMaking tea...");
    teaHook.prepareReciple();
    
    System.out.println("\nMaking coffee...");
    coffeeHook.prepareReciple();
  }
}
