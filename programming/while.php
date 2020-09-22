<?php $title="While Loop";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Unlike a do while loop, the code won't get executed unless the condition
  is initially met.</p>

<pre class="code">
public class While {

  public static void main(String[] args) {

    int i = 0;

    while(i < 10) {
      System.out.println(i);
      i++;
    }
  }
}
</pre>

<p>Output:</p>

<pre class="bash">
0
1
2
3
4
5
6
7
8
9
</pre>

<?php include('../footer.php');?>
