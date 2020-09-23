<?php $title="Odd or Even";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Method for determing if a number is odd or even.</p>

<pre class="code">
public class OddOrEven {

  public static void main(String[] args) {
    int i = Integer.valueOf(args[0]);
    System.out.println(oddOrEven(i));
  }

  public static String oddOrEven(int number) {
    if (number %2 == 0) {
      return "Even";
    } else {
      return "Odd";
    }
  }
}
</pre>

<p><a href="OddOrEven.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
