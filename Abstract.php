<?php
abstract class Animal
{
    abstract public function sesCixarir();
}

class cat extends Animal
{
    public function sesCixarir()
    {
        return "Miao";
    }
}

class cow extends Animal
{
    public function sesCixarir()
    {
        return "Moo";
    }
}

abstract class Shape
{
    abstract public function calculateArea();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}


/**
 * In PHP, an abstract class is a class that cannot be instantiated directly and is meant to be extended by other classes. 
 * The primary purpose of an abstract class is to serve as a blueprint for other classes.
 */









 /** COMPLEX ABSTRACT CLASS EXAMPLES */

// Define a payment interface for various payment methods
interface PaymentInterface {
    public function processPayment($amount);
}

// Abstract class representing a generic order
abstract class Order {
    protected $items = [];
    protected $totalAmount = 0;

    // Constructor to initialize order items
    public function __construct(array $items) {
        $this->items = $items;
        $this->calculateTotal();
    }

    // Abstract method to be implemented by child classes for payment
    abstract public function checkout(PaymentInterface $paymentMethod);

    // Method to calculate total price of the items in the order
    public function calculateTotal() {
        foreach ($this->items as $item) {
            $this->totalAmount += $item['price'] * $item['quantity'];
        }
    }

    // Common method that all orders can use
    public function getTotalAmount() {
        return $this->totalAmount;
    }

    // Abstract method to be implemented in child classes for order type-specific processing
    abstract protected function processOrder();
    
}

// OnlineOrder class extends the abstract Order class
class OnlineOrder extends Order {
    protected $deliveryFee = 5;

    // Overriding the abstract method checkout
    public function checkout(PaymentInterface $paymentMethod) {
        // Process payment
        $paymentMethod->processPayment($this->getTotalAmount() + $this->deliveryFee);

        // Additional online order processing steps
        $this->processOrder();
    }

    // Custom implementation for processing the online order
    protected function processOrder() {
        echo "Processing online order. Adding delivery charges: {$this->deliveryFee}\n";
    }
}

// StoreOrder class extends the abstract Order class
class StoreOrder extends Order {

    // Overriding the abstract method checkout
    public function checkout(PaymentInterface $paymentMethod) {
        // Process payment
        $paymentMethod->processPayment($this->getTotalAmount());

        // Additional store order processing steps
        $this->processOrder();
    }

    // Custom implementation for processing store order
    protected function processOrder() {
        echo "Processing store order. No delivery fee.\n";
    }
}

// Implementation of payment via CreditCard
class CreditCardPayment implements PaymentInterface {
    public function processPayment($amount) {
        echo "Processing credit card payment of $amount\n";
    }
}


// Implementation of payment via PayPal
class PayPalPayment implements PaymentInterface {
    public function processPayment($amount) {
        echo "Processing PayPal payment of $amount\n";
    }
}

// Example usage:

// Items for the order
$items = [
    ['name' => 'Laptop', 'price' => 1000, 'quantity' => 1],
    ['name' => 'Mouse', 'price' => 50, 'quantity' => 2]
];

// Create an OnlineOrder instance
$order1 = new OnlineOrder($items);
echo "Total Amount (Online Order): {$order1->getTotalAmount()}\n";

// Use CreditCardPayment to checkout
$order1->checkout(new CreditCardPayment());

echo "\n";

// Create a StoreOrder instance
$order2 = new StoreOrder($items);
echo "Total Amount (Store Order): {$order2->getTotalAmount()}\n";

// Use PayPalPayment to checkout
$order2->checkout(new PayPalPayment());
