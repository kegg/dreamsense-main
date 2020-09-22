<?php $title="If";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Conditional programming includes the use of if statements.</p>

<p>Below is an example of an if statement. It checks against the input given by
  the user and outputs to the screen based off that input.</p>

<pre class="code">
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
</pre>

<p><a href="If.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
