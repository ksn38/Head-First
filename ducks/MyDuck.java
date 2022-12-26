public class MyDuck extends Duck {
  public MyDuck(){
    quackBehavior = new MuteQuack();
    }
  public void display(){
    System.out.println("i'm MyDuck");
  }
}   
