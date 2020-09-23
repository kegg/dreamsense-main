public class OddOrEven {

  public static void main(String[] args) {
    int i = Integer.valueOf(args[0]);
    System.out.println(oddOrEven(i));
  }

  public static String oddOrEven(int number) {
    if (number %2 == 0) {
      return "Even";
    } else {
      return "Odd";
    }
  }
}
