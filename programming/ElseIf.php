<?php $title="Else If";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Else If applys a second condition to the test if the first if statement
  returns false.</p>

<pre class="code">
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
</pre>

<p><a href="ElseIf.java" target="_blank">Source Code</a></p>

<p>Add some more else if statements to test for more conditionals.</p>

<?php include('../footer.php');?>
