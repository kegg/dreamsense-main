<?php $title="For Each Loop";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>A for each loop iterates through a type like an array item by item so you
   can deal with those speciifc items.</p>

<pre class="code">
  1 public class Loop {
  2 
  3   public static void main(String[] args) {
  4     String[] items = {"One", "Two", "Three"};
  5 
  6     for (String item : items) {
  7       System.out.println(item);
  8     }
  9   }
 10 
 11 }
</pre>

<p>The output is as follows:</p>

<pre class="bash">
One
Two
Three
</pre>

<?php include('../footer.php');?>
