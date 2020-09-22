import java.util.Scanner;

public class If {

  public static void main(String[] args) {
    System.out.println("Make a choice: ");
    System.out.println("1. Say Hello");
    System.out.println("2. Say Goodbye");

    Scanner scan = new Scanner(System.in);

    System.out.print("Your choice: ");
    int choice = scan.nextInt();

    if (choice == 1) {
      System.out.println("Hello World");
    }

    if (choice == 2) {
      System.out.println("Goodbye World");
    }
  }

}
