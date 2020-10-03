<?php $title="Reverse Sort an Array";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Fill an array with letters and then sort it by reverse order.</p>

<pre class="code">
import java.util.Arrays;
import java.util.Collections;

public class ReverseOrder {

  public static void main(String[] args) {
    String[] letters = {"a", "b", "c", "d", "e", "f", "g", "h", "i"};
    Arrays.sort(letters, Collections.reverseOrder());

    for (String s : letters) {
      System.out.println(s);
    }
  }
}
</pre>

<p>Output:</p>

<pre class="bash">
i
h
g
f
e
d
c
b
a
</pre>

<p><a href="ReverseOrder.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
