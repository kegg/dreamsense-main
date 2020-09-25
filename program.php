<?php $title="Programming";?>
<?php include('header.php');?>
<?php $footer="footer/program.php";?>

<pre class="bash">
<code>Hello World</code>
</pre>

<?php
$id = 1;
$basics = "Programming Basics";
$keyboard = "Keyboard Input";
$loops = "Loops";
$if = "If Statements";
$array = "Arrays";

$program = "Program";
$todo = "To Do";
?>

<table id="records" style="width:100%;font-size:14pt;border:1px solid #000">
  <thead>
  <tr>
    <th colspan="4">Basics of Java Programming</td>
  </tr>
  </thead>
  <!--
    Basic Programming
  -->
  <tbody>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/hello.php">Hello World</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/variables.php">Variables</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/variables2.php">More Variables</a></td>
    <td><?php echo $todo;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/comments.php">Comments</a></td>
    <td><?php echo $todo;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/OddEven.php">Odd Or Even</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <!--
    keyboard input
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/input.php">Keyboard Input</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/moreInput.php">More Input</a></td>
    <td><?php echo $todo;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/calculator.php">Silly Simple Calculator</a></td>
    <td><?php echo $todo;?></td>
  </tr>
  <!--
    Loops
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/doWhile.php">Do While Loop</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/while.php">While Loop</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/for.php">For Loop</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/Collatz.php">Collatz conjecture</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <!--
    If Statements
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/If.php">If</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/Else.php">Else</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/ElseIf.php">Else If</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <!--
    Arrays
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $array;?></td>
    <td><a href="/programming/array.php">Array</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $array;?></td>
    <td><a href="/programming/arrayWords.php">Array from a Sentence</a></td>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $array;?></td>
    <td><a href="/programming/arrayChars.php">Array from a String</a></td>
    <td><?php echo $program;?></td>
  </tr>
  </tbody>
</table>

<?php include('footer.php');?>
