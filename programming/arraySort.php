<?php $title="Sort an Array";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Fill an array with letters and then sort it.</p>

<pre class="code">
import java.util.Arrays;

public class SortArray {
  public static void main(String[] args) {
    String[] myArray = {"z", "a", "x", "b"};
    Arrays.sort(myArray);
    Arrays.stream(myArray)
      .forEach(System.out::println);
  }
}
</pre>

<p>Output:</p>

<pre class="bash">
a
b
x
z
</pre>

<p><a href="SortArray.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
