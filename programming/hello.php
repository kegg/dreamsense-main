<?php $title="Hello World";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<pre class="code">
public class HelloWorld {

  public static void main(String[] args) {
    System.out.println("Hello World!");
  }
}
</pre>

<p>In order to run this program, you need to have a text editor installed. You'll
  need to create a file and save it as <a href="HelloWorld.java">HelloWorld.java</a>
  with the above text in it.
  You will need to compile the program in the shell using the <code>javac</code>
  command as follows:</p>

<pre class="bash">
$ javac HelloWorld.java
</pre>

<p>After it compiles, you can run it using the <code>java</code> command.</p>

<pre class="bash">
$ java HelloWorld
Hello World
</pre>

<?php include('../footer.php');?>
