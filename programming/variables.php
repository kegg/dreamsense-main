<?php $title="Variables";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>Variables make code easier to read and allow the programmer to not use magic
  numbrers (the use of numbers directly in source code).</p>

<pre class="code">
public class Variables {
  public static void main(String[] args) {
    String name = "Fred";
    int age = 45;
    System.out.println("Hello, my name is " + name + " I am " + age + " years old.");
  }
}
</pre>

<p>If we run this program, it outputs the following:</p>

<pre class="bash">
Hello, my name is Fred I am 45 years old.
</pre>

<p>As you can see, the string is concatinated with the variables. There's also
  another way of outputing the data, that's using a format. Try replacing the
  println line with the following:</p>

<pre class="code">
System.out.format("Hello, my name is %s I am %d years old.", name, age);
</pre>

<?php include('../footer.php');?>
