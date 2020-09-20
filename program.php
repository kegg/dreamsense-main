<?php $title="Programming";?>
<?php include('header.php');?>
<?php $footer="footer/program.php";?>

<pre class="bash">
Hello World
</pre>

<?php $id = 0;?>

<table style="width:100%;font-size:14pt;border:1px solid #000">
  <tr>
    <th colspan="3">Basics of Java Programming</td>
  </tr>
  <tr>
    <td><?php echo $id; $id++;?></td>
    <td>Basics</td>
    <td><a href="/programming/hello.php">Hello World</a></td>
  </tr>
  <tr>
    <td><?php echo $id; $id++;?></td>
    <td>Basics</td>
    <td><a href="/programming/variables.php">Variables</a></td>
  </tr>
  <tr>
    <td><?php echo $id; $id++;?></td>
    <td>Basics</td>
    <td><a href="/programming/variables2.php">More Variables</a></td>
  </tr>  
  <tr>
    <td><?php echo $id; $id++;?></td>
    <td>Basics</td>
    <td><a href="/programming/comments.php">Comments</a></td>
  </tr>
</table>

<?php include('footer.php');?>
