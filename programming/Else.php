<?php $title="Else";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Below is an example of an if/else statement. It checks against the input given by
  the user and outputs to the screen based off that input. If the input doens't match
  a choice, the program warns the user.</p>

<pre class="code">
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
</pre>

<p><a href="Else.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
