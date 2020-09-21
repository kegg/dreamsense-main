<?php $title="For Loop";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>A for loop loops through a set of numbers starting at zero until its
  criteria is met.</p>

<pre class="code">
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
</pre>

<p>The output is as follows:</p>

<pre class="bash">
What message do you want to repeat? <code>Hi</code>
0. Hi
1. Hi
2. Hi
3. Hi
4. Hi
5. Hi
6. Hi
7. Hi
8. Hi
9. Hi
</pre>

<p>Imagine what would happen if you put <code>i = i + 2</code> instead of
  <code>i++</code>. Give it a try and see what happens.</p>

<p><a href="ForLoop.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
