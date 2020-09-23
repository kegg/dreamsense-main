<?php $title="Programming";?>
<?php include('header.php');?>
<?php $footer="footer/program.php";?>

<pre class="bash">
Hello World
</pre>

<?php
$id = 1;
$basics = "Programming Basics";
$keyboard = "Keyboard Input";
$loops = "Loops";
$if = "If Statements";
?>

<table style="width:100%;font-size:14pt;border:1px solid #000">
  <tr>
    <th colspan="3">Basics of Java Programming</td>
  </tr>
  <!--
    Basic Programming
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/hello.php">Hello World</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/variables.php">Variables</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/variables2.php">More Variables</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $basics;?></td>
    <td><a href="/programming/comments.php">Comments</a></td>
  </tr>
  <!--
    keyboard input
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/input.php">Keyboard Input</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/moreInput.php">More Input</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $keyboard;?></td>
    <td><a href="/programming/calculator.php">Silly Simple Calculator</a></td>
  </tr>
  <!--
    Loops
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/doWhile.php">Do While Loop</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/while.php">While Loop</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/for.php">For Loop</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $loops;?></td>
    <td><a href="/programming/Collatz.php">Collatz conjecture</a></td>
  </tr>
  <!--
    If Statements
  -->
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/If.php">If</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/Else.php">Else</a></td>
  </tr>
  <tr>
    <td class="right"><?php echo $id; $id++;?></td>
    <td><?php echo $if;?></td>
    <td><a href="/programming/ElseIf.php">Else If</a></td>
  </tr>
</table>

<?php include('footer.php');?>
