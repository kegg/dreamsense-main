public class Variables {
  public static void main(String[] args) {
    String name = "Fred";
    int age = 45;
    System.out.println("Hello, my name is " + name + " I am " + age + " years old.");
    System.out.format("Hello, my name is %s I am %d years old.", name, age);
  }
}
