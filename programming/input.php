<?php $title="Keyboard Input";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>The Scanner class can be used to get input from the user at the keyboard.</p>

<pre class="code">
import java.util.Scanner;

public class Keyboard {

  public static void main(String[] args) {
    Scanner keyboard = new Scanner(System.in);
    System.out.print("enter a number: ");
    int num = keyboard.nextInt();
    System.out.println("You entered: " + num);
  }
}
</pre>

<p><a href="Keyboard.java" target="_blank">Source Code</a></p>

<p>Here's how the program runs and some sample input/output.</p>

<pre class="bash">
$ java Keyboard
enter a number: 56
You entered: 56
</pre>

<?php include('../footer.php');?>
