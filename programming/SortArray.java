import java.util.Arrays;

public class SortArray {
  public static void main(String[] args) {
    String[] myArray = {"z", "a", "x", "b"};
    Arrays.sort(myArray);
    Arrays.stream(myArray)
      .forEach(System.out::println);
  }
}
