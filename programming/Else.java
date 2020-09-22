import java.util.Scanner;

public class Else {

  public static void main(String[] args) {
    System.out.println("Make a choice: ");
    System.out.println("1. Say Hello");

    Scanner scan = new Scanner(System.in);

    System.out.print("Your choice: ");
    int choice = scan.nextInt();

    if (choice == 1) {
      System.out.println("Hello World");
    } else {
      System.out.println("That isn't a valid option");
    }
  }
}
