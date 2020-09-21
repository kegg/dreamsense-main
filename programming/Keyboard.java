import java.util.Scanner;

public class Keyboard {

  public static void main(String[] args) {
    Scanner keyboard = new Scanner(System.in);
    System.out.print("enter a number: ");
    int num = keyboard.nextInt();
    System.out.println("You entered: " + num);
  }
}
