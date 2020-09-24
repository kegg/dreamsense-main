<?php $title="Array from a Sentence";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Fill an array split from a sentence.</p>

<pre class="code">
public class Array {

  public static void main(String[] args) {
    String sentence = "the quick brown fox jumps over the lazy dog";
    String[] array = sentence.split(" ");

    for (String s : array) {
      System.out.println(s);
    }
  }
}
</pre>

<p>Output:</p>

<pre class="bash">
the
quick
brown
fox
jumps
over
the
lazy
dog
</pre>

<?php include('../footer.php');?>
