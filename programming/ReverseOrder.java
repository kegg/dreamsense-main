import java.util.Arrays;
import java.util.Collections;

public class ReverseOrder {

  public static void main(String[] args) {
    String[] letters = {"a", "b", "c", "d", "e", "f", "g", "h", "i"};
    Arrays.sort(letters, Collections.reverseOrder());

    for (String s : letters) {
      System.out.println(s);
    }
  }
}
