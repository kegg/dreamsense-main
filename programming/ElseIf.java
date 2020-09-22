import java.util.Scanner;

public class ElseIf {

  public static void main(String[] args) {
    Scanner scan = new Scanner(System.in);
    System.out.print("What's your age? ");

    int age = scan.nextInt();

    if (age > 20) {
      System.out.println("You can do it all, you're old enough.");
    } else if (age > 17) {
      System.out.println("You can drive");
      System.out.println("You can vote");
      System.out.println("You can't drink");
    } else if (age > 16) {
      System.out.println("You can drive");
      System.out.println("You can't vote");
    } else if (age < 16) {
      System.out.println("You can't drive.");
      System.out.println("You can't vote.");
    }
  }
}
