<?php $title="JFrame Window";?>
<?php include('../header.php');?>
<?php $footer="../footer/program.php";?>

<p>The first thing we create when creating a GUI is the JFrame. It's our main window.</p>

<pre class="code">
import javax.swing.JFrame;

public class Window extends JFrame {

  public Window() {
    super("My Window");
    setSize(640, 480);
    setResizable(false);
    setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    setLocationRelativeTo(null);
    setVisible(true);
  }

  public static void main(String[] args) {
    new Window();
  }
}
</pre>

<?php include('../footer.php');?>
