import java.util.Scanner;

public class ForLoop {

  public static void main(String[] args) {
    Scanner in = new Scanner(System.in);

    System.out.print("What message do you want to repeat? ");
    String line = in.nextLine();

    for (int i = 0; i < 10; i++) {
      System.out.format("%d. %s%n", i, line);
    }
  }

}
