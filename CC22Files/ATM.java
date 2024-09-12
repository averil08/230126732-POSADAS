//Programmed by: Averil Roshan F. Posadas
import java.util.Scanner;

public class ATM{
    private static double balance = 10000.00;

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Welcome to the Automated Teller Machine.");

        while (true) {
            System.out.println("\nPlease Choose Your Choice of Transaction");
            System.out.println("[1] Check balance");
            System.out.println("[2] Withdrawal");
            System.out.println("[3] Exit");

            System.out.print("Enter your transaction [1-3]: ");
            if (scanner.hasNextInt()) {
                int choice = scanner.nextInt();
                if (choice == 1) {
                    balance();
                } else if (choice == 2) {
                    withdraw(scanner);
                } else if (choice == 3) {
                    exit(scanner);
                    break;
                } else {
                    System.out.println("Error: Invalid choice, please try again.");
                }
            } else {
                System.out.println("Error: Invalid input. Please enter a valid integer.");
                scanner.next(); 
                continue;
            }
        }

        scanner.close();
    }

    private static void balance() {
        System.out.println("\nCurrent Balance: PHP " + balance);
    }

    private static void withdraw(Scanner scanner) {
        while (true) {
            System.out.print("\nEnter the amount you want to withdraw: PHP ");
            if (scanner.hasNextDouble()) {
                double wit_amount = scanner.nextDouble();

                if (wit_amount > balance) {
                    System.out.println("Error: Insufficient balance. Please try again.");
                } else {
                    System.out.println("Withdrawn Amount Breakdown:");
                    int thousand = (int) (wit_amount / 1000);
                    int hundred = (int) ((wit_amount % 1000) / 100);
                    int twenty = (int) ((wit_amount % 100) / 20);
                    int coins = (int) (wit_amount % 20);

                    System.out.println("P1000 Bills: " + thousand);
                    System.out.println("P100 Bills: " + hundred);
                    System.out.println("P20 Bills: " + twenty);
                    System.out.println("Coins: " + coins);

                    balance -= wit_amount;
                    break;
                }
            } else {
                System.out.println("Error: Invalid input. Please enter a valid double.");
                scanner.next(); 
            }
        }
    }

    private static void exit(Scanner scanner) {
        System.out.println("\nThank you for using the ATM. Goodbye!");
    }
}
