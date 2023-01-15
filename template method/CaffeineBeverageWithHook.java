public abstract class CaffeineBeverageWithHook{
  public void prepareReciple(){
    boilWater();
    brew();
    pourInCap();
    if (customerWantsCondiments()){
      addCondiments();
    }
  }
  
  abstract void brew();
  
  abstract void addCondiments();
  
  void boilWater(){
    System.out.println("Boiling water");
  }
  
  void pourInCap(){
    System.out.println("Pouring into cup");
  }
  
  boolean customerWantsCondiments(){
    return true;
  }
}
