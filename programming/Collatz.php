<?php $title="Collatz conjecture"?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>The Collatz conjecture is a conjecture in mathematics that concerns a sequence
  defined as follows: start with any positive integer n. Then each term is obtained
  from the previous term as follows: if the previous term is even, the next term
  is one half of the previous term. If the previous term is odd, the next term is
  3 times the previous term plus 1. The conjecture is that no matter what value of
  n, the sequence will always reach 1.</p>

<pre class="code">
public class Collatz {

  public static void main(String[] args) {
    int i = Integer.valueOf(args[0]);
    int attempts = 0;

    System.out.println(i);

    while (i != 1) {
      OddOrEven oddOrEven = oddOrEven(i);

      if (oddOrEven == OddOrEven.EVEN) {
        i = i / 2;
      } else if (oddOrEven == OddOrEven.ODD) {
        i = (i * 3) + 1;
      }

      System.out.println(i);

      attempts++;
    }
    System.out.format("This attempt took %d attempts%n", attempts);
  }

  public static OddOrEven oddOrEven(int number) {
    if (number %2 == 0) {
      return OddOrEven.EVEN;
    } else {
      return OddOrEven.ODD;
    }
  }

  static enum OddOrEven {
    ODD,
    EVEN;
  }
}

</pre>

<p>Entering 27 in this class will produce the following:</p>

<pre class="bash">
27    82    41    124   62    31    94    47    142   71
214   107   322   161   484   242   121   364   182   91
274   137   412   206   103   310   155   466   233   700
350   175   526   263   790   395   1186  593   1780  890
445   1336  668   334   167   502   251   754   377   1132
566   283   850   425   1276  638   319   958   479   1438
719   2158  1079  3238  1619  4858  2429  7288  3644  1822
911   2734  1367  4102  2051  6154  3077  9232  4616  2308
1154  577   1732  866   433   1300  650   325   976   488
244   122   61    184   92    46    23    70    35    106
53    160   80    40    20    10    5     16    8     4
2     1
This attempt took 111 attempts
</pre>

<p><a href="Collatz.java" target="_blank">Source Code</a></p>

<?php include('../footer.php');?>
