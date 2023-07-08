public abstract class CaffeineBeverage{
  final void prepareReciple(){
    boilWater();
    brew();
    pourInCap();
    addCondiments();
  }
  
  abstract void brew();
  
  abstract void addCondiments();
  
  void boilWater(){
    System.out.println("Boiling water");
  }
  
  void pourInCap(){
    System.out.println("Pouring into cup");
  }
}
