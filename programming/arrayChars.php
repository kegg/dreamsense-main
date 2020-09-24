<?php $title="Array from a String";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Fill an array split from a string character by character.</p>

<pre class="code">
public class Test {

  private static String alphabet = "abcdefghijklmnopqrstuvwxyz";

  public static void main(String[] args) {
    alphabet();
  }

  public static void alphabet() {
    String[] array = alphabet.split("(?!^)");

    for (String c : array) {
      System.out.println(c);
    }
  }
}
</pre>

<p>Output:</p>

<pre class="bash">
a
b
c
d
e
f
g
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
</pre>

<?php include('../footer.php');?>
